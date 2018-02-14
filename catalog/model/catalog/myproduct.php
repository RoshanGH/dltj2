<?php
class ModelCatalogMyproduct extends Model {

    public function save_order($data) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "order SET firstname = '" . $data['user_name'] . "' , email ='" . $data['user_email'] . "' , telephone = '" . $data['user_phone'] ."' , payment_postcode = '" . $data['user_code'] . "', payment_zone ='" . $data['user_address'] ."',payment_city ='".$data['user_zone']."',order_status_id = 1 ,total = '" .$data['price']."',store_name = '".$data['store_name']."',payment_method ='".$data['payment_method']."', date_added = '".$data['time']."'");
        return $this->db->getLastId();
    }

    public function save_order_product($data){
//        error_log(print_r("INSERT INTO " . DB_PREFIX . "order_product SET order_id = '" . $data['order_id'] . "',product_id = '".$data['product_id']."', name = '".$data['product_name']."',quantity='".$data['quantity']."',total ='".$data['total']."' , price = '" . $data['price'] . "'",1),3,'/tmp/log.log');
        $this->db->query("INSERT INTO " . DB_PREFIX . "order_product SET order_id = '" . $data['order_id'] . "',product_id = '".$data['product_id']."', name = '".$this->db->escape($data['product_name'])."',quantity='".$data['quantity']."',total ='".$data['total']."' , price = '" . $data['price'] . "'" );
        return $this->db->getLastId();
    }

    public function get_product_info($data){
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "product_description` WHERE product_id = '" . (int)$data . "'");
        return $query->row;
    }

    public function get_options_value($data){
        $query = $this->db->query("SELECT name as `value` FROM `" . DB_PREFIX . "option_value_description` WHERE option_value_id = " . (int)$data . " AND language_id =" . (int)$this->config->get('config_language_id'));
        return $query->row;
    }

    public function get_options_name($data){
        $query = $this->db->query("SELECT name FROM `" . DB_PREFIX . "option_description` WHERE option_id = " . "(select option_id from `oc_option_value` where option_value_id = $data)" . " AND language_id =" . (int)$this->config->get('config_language_id'));
        return $query->row;
    }

    public function save_order_option($name,$value,$order_product_id,$order_id){
        $this->db->query("INSERT INTO " . DB_PREFIX . "order_option SET name = '" .$this->db->escape($name)  . "' , value ='" . $value . "' , order_product_id = '" . $order_product_id ."' , order_id = '" . $order_id . "'");
    }

    public function get_order_by_email($email){
         $query = $this->db->query("SELECT order_id FROM `" . DB_PREFIX . "order` WHERE email = '" . $email ."'");
        return $query->rows;
    }

}
