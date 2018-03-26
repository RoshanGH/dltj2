<?php

class ControllerProductMyproduct extends Controller {
    private $error = array();
    private $myCurrency ='' ;

    public function index() {
        $this->logger = new \Log('log.log');
        $this->load->language('product/myproduct');
        if (isset($this->request->get['product_id'])) {
            $product_id = (int)$this->request->get['product_id'];
        } else {
            $product_id = 0;
        }
        $this->load->model('catalog/product');

        $product_info = $this->model_catalog_product->getProduct($product_id);
        $fb_pixel = $product_info['upc'];
        $this->myCurrency = $product_info['ean'];

        //图片
        $this->load->model('tool/image');

        $data['popup'] ='http://farawaymall.xyz/image/' . $product_info['image'];


        $data['images'][]['popup'] = $data['popup'];

        $results = $this->model_catalog_product->getProductImages($this->request->get['product_id']);
        foreach ($results as $result) {
            $data['images'][] = array(
                'popup' =>'http://farawaymall.xyz/image/'. $result['image'],
//                'thumb' => $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height'))
            );
        }

        foreach ($this->model_catalog_product->getProductOptions($this->request->get['product_id']) as $option) {
            $product_option_value_data = array();

            foreach ($option['product_option_value'] as $key => $option_value) {
                if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
                    if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
                        $price = $this->currency->format($this->tax->calculate($option_value['price'], $product_info['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $this->session->data['currency']);
                    } else {
                        $price = false;
                    }

                    $product_option_value_data[$key] = array(
                        'product_option_value_id' => $option_value['product_option_value_id'],
                        'option_value_id' => $option_value['option_value_id'],
                        'name' => $option_value['name'],
                        'image' => $this->model_tool_image->resize($option_value['image'], 400, 400),
//                        'price' => $price,
                        'price' => $option_value['price'],

                        'price_prefix' => $option_value['price_prefix'],
                        'key' => $key
                    );
                }
            }

            $data['options'][] = array(
                'product_option_id' => $option['product_option_id'],
                'product_option_value' => $product_option_value_data,
                'option_id' => $option['option_id'],
                'name' => $option['name'],
                'type' => $option['type'],
                'value' => $option['value'],
                'required' => $option['required']
            );
        }

        $order_url = $this->url->link('product/myproduct/save_order');
        $this->logger->write(HTTP_SERVER);
        $this->logger->write($order_url);
        $search_order_url = $this->url->link('product/myproduct/search_order');
        $show_order_url = $this->url->link('product/myproduct/show_order');



        $data['pay_return_url'] = $this->url->link('product/myproduct','product_id='.$product_id.'#success',true);
        $data['pay_cancel_return_url'] = $this->url->link('product/myproduct','product_id='.$product_id,true);
        $data['pay_notify_url'] = $this->url->link('extension/payment/pp_standard/paymentcallback', '', true);

        $data['smcss'] = HTTP_SERVER . '/catalog/view/javascript/my/css/sm.css';
        $data['sm_extendcss'] = HTTP_SERVER . '/catalog/view/javascript/my/css/sm-extend.css';
        $data['mycss'] = HTTP_SERVER . '/catalog/view/javascript/my/css/my.css';
        $data['zeptojs'] = HTTP_SERVER . '/catalog/view/javascript/my/js/zepto.js';
        $data['smjs'] = HTTP_SERVER . '/catalog/view/javascript/my/js/sm.js';
        $data['sm_extendjs'] = HTTP_SERVER . '/catalog/view/javascript/my/js/sm-extend.js';


        $data['http'] = HTTP_SERVER;
        $data['price'] = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->myCurrency);
        $data['origin_price'] = $this->currency->format($this->tax->calculate($product_info['price'] + 100, $product_info['tax_class_id'], $this->config->get('config_tax')), $this->myCurrency);
        $data['price_num'] = $product_info['price'];
        $data['title'] = $product_info['meta_title'];
        $data['name'] = $product_info['name'];
//        $data['product_id'] = (int)$this->request->get['product_id'];
        $data['description'] = html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8');
        $data['order_url'] = $order_url;
        $data['pixel'] = $fb_pixel;
        $data['show_order_url'] = $show_order_url;
        $data['product_id'] = $product_id;
        $data['search_order_url'] = $search_order_url;
//        echo '<pre>';
//        print_r($product_info);
//        print_r($data);
//        exit;
//        $this->logger->write($data);
        if ($product_info['ean']=='TWD')
        {
            $myproduct = 'myproduct2';
        }else{
            $myproduct = 'myproduct';
        }
        $this->response->setOutput($this->load->view('product/'.$myproduct, $data));
    }

    public function save_order() {
        $this->logger = new \Log('log.log');
//        $this->logger->write($this->request->post);

//        生成订单号
//        $order_id = '60'.time().rand(1,9).rand(1.9);
//        $post_data['order_id'] = $order_id;
        $post_data = $this->request->post;
        $post_data['time'] = date('Y-m-d H:i:s', time());
//        $this->logger->write($post_data['time']);
        $post_data['store_name'] = 'small_store';
        if ($post_data['payment'] == 'paypal'){
            $post_data['payment_method'] = 'paypal在线支付';
        }else{
            $post_data['payment_method'] = '货到付款';
        }
        $this->load->model('catalog/myproduct');
        //order表
//        $this->logger->write($post_data['price']);
        $total_price = $post_data['price'] * $post_data['number'];
        $post_data['total_price'] = $total_price;
//        $this->logger->write($total_price);
//        $this->logger->write($post_data);
        $order_id = $this->model_catalog_myproduct->save_order($post_data);
//        $this->logger->write($total_price);
        //order_product
        $product_info = $this->model_catalog_myproduct->get_product_info($post_data['product_id']);
        $product_name = $product_info['name'];
//        $this->logger->write($product_name);


        $order_product_data = array(
            'order_id' => $order_id,
            'product_id' => $post_data['product_id'],
            'product_name' => $product_name,
            'quantity' => $post_data['number'],
            'total' => $total_price,
            'price' => $post_data['price'],
        );
        //整理商品属性
//        $this->logger->write($order_product_data);
        $option_str = '';
        foreach ($post_data['options'] as $key => $val) {
            $ops[$key]['name'] = $this->model_catalog_myproduct->get_options_name($val)['name'];
            $ops[$key]['value'] = $this->model_catalog_myproduct->get_options_value($val)['value'];
            $option_str .= $ops[$key]['name'] . ":" . $ops[$key]['value'];
        }
//        $this->logger->write($option_str);
        $order_product_id = $this->model_catalog_myproduct->save_order_product($order_product_data);
//        $this->logger->write($order_product_id);
        foreach ($ops as $key => $val) {
            $this->model_catalog_myproduct->save_order_option($val['name'], $val['value'], $order_product_id, $order_id);
        }
        $return = array(
            'status' => 'success',
            'order_id' => $order_id,
            'time' => $post_data['time'],
            'price' => $total_price,
            'option_str' => $option_str,
        );
//        $this->logger->write($return);
        header('Content-Type: text/json;charset=utf8');
        echo json_encode($return, true);
        exit();
    }


    public function show_order() {
//        $this->logger = new \Log('log.log');
//        $this->logger->write($this->request->post);
        $order_id = $this->request->post['order_id'];
        $return = array(
            'status' => 'success',
        );
        header('Content-Type: text/json;charset=utf8');
        echo json_encode($return, true);
        exit();
    }

    public function search_order() {
        $this->load->language('product/myproduct');

//        $this->logger = new \Log('log.log');
//        $this->logger->write($this->request->post);
        $email = $this->request->post['search_email'];
        $this->load->model('catalog/myproduct');
        $order_ids = $this->model_catalog_myproduct->get_order_by_email($email);


        $this->load->model('account/order');
        $this->load->model('catalog/product');
        $this->load->model('tool/upload');
//        $this->logger->write($order_ids);
        foreach ($order_ids as $key => $val) {
            $order_id = $val['order_id'];
//            $this->logger->write($order_id);

            // Products
            $data['products'] = array();

            $products = $this->model_account_order->getOrderProducts($order_id);
//            $this->logger->write($products);

            unset($option_data);
            foreach ($products as $product) {
                $option_data = array();

                $options = $this->model_account_order->getOrderOptions($order_id, $product['order_product_id']);

                foreach ($options as $option) {
                    if ($option['type'] != 'file') {
                        $value = $option['value'];
                    } else {
                        $upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

                        if ($upload_info) {
                            $value = $upload_info['name'];
                        } else {
                            $value = '';
                        }
                    }

                    $option_data[] = array(
                        'name' => $option['name'],
                        'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value)
                    );
                }


                $data[$order_id]['products'][] = array(
                    'name' => $product['name'],
                    'model' => $product['model'],
                    'option' => $option_data,
                    'quantity' => $product['quantity'],
//                    'price'    => $this->currency->format($product['price'] + ($this->config->get('config_tax') ? $product['tax'] : 0), $order_info['currency_code'], $order_info['currency_value']),
//                    'total'    => $this->currency->format($product['total'] + ($this->config->get('config_tax') ? ($product['tax'] * $product['quantity']) : 0), $order_info['currency_code'], $order_info['currency_value']),
                    'price' => $product['price'],
                    'total' => $product['total'],

                );
            }

        }

        krsort($data);

        $text_order_id = $this->language->get('order_number');
        $text_product_name = $this->language->get('product_name');
        $text_option = $this->language->get('option');
        $text_price = $this->language->get('price');
        $text_quantity = $this->language->get('quantity');
        $text_total = $this->language->get('order_amount');


//        $this->logger->write($text_order_id);


        $content = '';
        foreach ($data as $key => $val) {
            foreach ($val['products'] as $vkey => $vval) {

                $content .= "<div style='background-color: white'>";
                $content .= "<p>{$text_order_id} : $key</p>";

                $content .= "<p>{$text_product_name} : {$vval['name']}</p>";

                $option_str = '';
                foreach ($vval['option'] as $okey => $oval) {
                    $option_str .= $oval['name'] . ":" . $oval['value'] . "  ";
                }

                $content .= "<p>{$text_option} : {$option_str}</p>";

                $content .= "<p>{$text_price} : {$vval['price']}</p>";

                $content .= "<p>{$text_quantity} : {$vval['quantity']}</p>";

                $content .= "<p>{$text_total} : {$vval['total']}</p>";

                $content .= "</div>";

                $content .= "<div style='width: 100%;height: 0.5rem'></div>";


            }
        }


//        $this->logger->write($data);


//        $content = "<p>123123123</p>";
        $data = array(
            'status' => 'success',
            'content' => $content,
        );
        header('Content-Type: text/json;charset=utf8');
        echo json_encode($data);
        exit();


    }
}

