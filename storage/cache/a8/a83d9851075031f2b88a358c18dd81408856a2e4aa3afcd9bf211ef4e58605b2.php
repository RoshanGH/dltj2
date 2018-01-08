<?php

/* default/template/product/myproduct.twig */
class __TwigTemplate_b0f817843b57dd0b53bfa9412fcd99fa4c7ee1705740646b683754de8866c913 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 6
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
    <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
    <link rel=\"shortcut icon\" href=\"/favicon.ico\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    ";
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        // line 14
        echo "    <link rel=\"stylesheet\" href=\"";
        echo (isset($context["mycss"]) ? $context["mycss"] : null);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo (isset($context["sm_extendcss"]) ? $context["sm_extendcss"] : null);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo (isset($context["smcss"]) ? $context["smcss"] : null);
        echo "\">
</head>
<body style=\"max-width: 640px;margin: 0 auto\">


<div class=\"page-group\">
    <div class=\"page page-current\" id=\"router\">
        <!--图片轮播 start-->
        <div class=\"content\">
            <!-- Slider -->
            <div style=\"padding-bottom: 0\" class=\"swiper-container\" data-space-between='10'>
                <div class=\"swiper-wrapper\">
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 29
            echo "                        <div class=\"swiper-slide\"><img class=\"image\" src=\"";
            echo $this->getAttribute($context["image"], "popup", array());
            echo "\" alt=\"\"></div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </div>
                <div class=\"swiper-pagination\"></div>
            </div>
            <!--图片轮播 end-->
            <!--商品信息 start-->
            <div class=\"product_info\">
                <div class=\"product_title\">
                    ";
        // line 38
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "
                </div>
                <div class=\"row\">
                    <div class=\"col-80\">
                        <div class=\"row\">
                            <div class=\"col-40 product_info_price\">";
        // line 43
        echo (isset($context["price"]) ? $context["price"] : null);
        echo "</div>
                            <div class=\"col-25 product_info_original_price\"><s>";
        // line 44
        echo (isset($context["origin_price"]) ? $context["origin_price"] : null);
        echo "</s></div>
                            <div class=\"col-35 product_info_tag\">";
        // line 45
        echo (isset($context["text_limitedtime_sales"]) ? $context["text_limitedtime_sales"] : null);
        echo "</div>
                        </div>
                    </div>
                </div>

            </div>

            <div class=\"space\"></div>
            <!--商品信息 end-->
            <!--活动描述   标识 start-->
            <div class=\"middle_message\">
                <div class=\"middle_message_one\">
                    <div class=\"row\">
                        <div class=\"col-35 active\" style=\"margin-top: 0.8rem\">";
        // line 58
        echo (isset($context["text_sales_promotion"]) ? $context["text_sales_promotion"] : null);
        echo "</div>

                        <div class=\"col-60 middle_message_font\">";
        // line 60
        echo (isset($context["text_sales_promotion_content"]) ? $context["text_sales_promotion_content"] : null);
        echo "</div>
                    </div>
                </div>
                <div class=\"middle_message_two\" style=\"\">
                    <div class=\"row\">
                        <div class=\"col-50 middle_message_two_font\">
                            <div class=\"middle_message_two_tag\"><img class=\"image\" src=\"/catalog/view/javascript/my/image/qietu-02-1.png\"></div>
                            ";
        // line 67
        echo (isset($context["small_title_1"]) ? $context["small_title_1"] : null);
        echo "
                        </div>
                        <div class=\"col-50 middle_message_two_font\">
                            <div class=\"middle_message_two_tag\"><img class=\"image\" src=\"/catalog/view/javascript/my/image/qietu-02-1.png\"></div>
                            ";
        // line 71
        echo (isset($context["small_title_2"]) ? $context["small_title_2"] : null);
        echo "
                        </div>
                        ";
        // line 74
        echo "                            ";
        // line 75
        echo "                            ";
        // line 76
        echo "                        ";
        // line 77
        echo "                    </div>
                </div>
            </div>

            <div class=\"space\"></div>
            <!--活动描述   标识 end-->





            ";
        // line 89
        echo "            ";
        // line 90
        echo "
                ";
        // line 92
        echo "                    ";
        // line 93
        echo "                ";
        // line 94
        echo "
                ";
        // line 96
        echo "                    ";
        // line 97
        echo "                        ";
        // line 98
        echo "                            ";
        // line 99
        echo "                                ";
        // line 100
        echo "                                    ";
        // line 101
        echo "                                ";
        // line 102
        echo "                            ";
        // line 103
        echo "                            ";
        // line 104
        echo "                            ";
        // line 105
        echo "                                ";
        // line 106
        echo "
                                    ";
        // line 108
        echo "                                        ";
        // line 109
        echo "                                            ";
        // line 110
        echo "                                        ";
        // line 111
        echo "                                    ";
        // line 112
        echo "                                    ";
        // line 113
        echo "                                        ";
        // line 114
        echo "                                            ";
        // line 115
        echo "                                        ";
        // line 116
        echo "                                    ";
        // line 117
        echo "                                    ";
        // line 118
        echo "                                        ";
        // line 119
        echo "                                            ";
        // line 120
        echo "                                        ";
        // line 121
        echo "                                    ";
        // line 122
        echo "                                    ";
        // line 123
        echo "                                        ";
        // line 124
        echo "                                            ";
        // line 125
        echo "                                        ";
        // line 126
        echo "                                    ";
        // line 127
        echo "                                    ";
        // line 128
        echo "                                        ";
        // line 129
        echo "                                            ";
        // line 130
        echo "                                        ";
        // line 131
        echo "                                    ";
        // line 132
        echo "                                ";
        // line 133
        echo "                            ";
        // line 134
        echo "                        ";
        // line 135
        echo "                        ";
        // line 136
        echo "                            ";
        // line 137
        echo "                        ";
        // line 138
        echo "                        ";
        // line 139
        echo "                         ";
        // line 140
        echo "                             ";
        // line 141
        echo "                         ";
        // line 142
        echo "                        ";
        // line 143
        echo "                        ";
        // line 144
        echo "                            ";
        // line 145
        echo "                                ";
        // line 146
        echo "                                    ";
        // line 147
        echo "                                        ";
        // line 148
        echo "                                    ";
        // line 149
        echo "                                ";
        // line 150
        echo "                                ";
        // line 151
        echo "                                    ";
        // line 152
        echo "                                        ";
        // line 153
        echo "                                    ";
        // line 154
        echo "                                ";
        // line 155
        echo "                                ";
        // line 156
        echo "                                    ";
        // line 157
        echo "                                        ";
        // line 158
        echo "                                    ";
        // line 159
        echo "                                ";
        // line 160
        echo "                                ";
        // line 161
        echo "                                    ";
        // line 162
        echo "                                        ";
        // line 163
        echo "                                    ";
        // line 164
        echo "                                ";
        // line 165
        echo "                            ";
        // line 166
        echo "                        ";
        // line 167
        echo "                    ";
        // line 168
        echo "                    ";
        // line 169
        echo "                        ";
        // line 170
        echo "                            ";
        // line 171
        echo "                                ";
        // line 172
        echo "                                    ";
        // line 173
        echo "                                ";
        // line 174
        echo "                            ";
        // line 175
        echo "                            ";
        // line 176
        echo "                            ";
        // line 177
        echo "                                ";
        // line 178
        echo "
                                    ";
        // line 180
        echo "                                        ";
        // line 181
        echo "                                            ";
        // line 182
        echo "                                        ";
        // line 183
        echo "                                    ";
        // line 184
        echo "                                    ";
        // line 185
        echo "                                        ";
        // line 186
        echo "                                            ";
        // line 187
        echo "                                        ";
        // line 188
        echo "                                    ";
        // line 189
        echo "                                    ";
        // line 190
        echo "                                        ";
        // line 191
        echo "                                            ";
        // line 192
        echo "                                        ";
        // line 193
        echo "                                    ";
        // line 194
        echo "                                    ";
        // line 195
        echo "                                        ";
        // line 196
        echo "                                            ";
        // line 197
        echo "                                        ";
        // line 198
        echo "                                    ";
        // line 199
        echo "                                    ";
        // line 200
        echo "                                        ";
        // line 201
        echo "                                            ";
        // line 202
        echo "                                        ";
        // line 203
        echo "                                    ";
        // line 204
        echo "                                ";
        // line 205
        echo "                            ";
        // line 206
        echo "                        ";
        // line 207
        echo "                        ";
        // line 208
        echo "                            ";
        // line 209
        echo "                        ";
        // line 210
        echo "                        ";
        // line 211
        echo "                 ";
        // line 212
        echo "                             ";
        // line 213
        echo "                         ";
        // line 214
        echo "                        ";
        // line 215
        echo "                        ";
        // line 216
        echo "                            ";
        // line 217
        echo "                            ";
        // line 218
        echo "                        ";
        // line 219
        echo "                    ";
        // line 220
        echo "                    ";
        // line 221
        echo "                        ";
        // line 222
        echo "                            ";
        // line 223
        echo "                                ";
        // line 224
        echo "                                    ";
        // line 225
        echo "                                ";
        // line 226
        echo "                            ";
        // line 227
        echo "                            ";
        // line 228
        echo "                            ";
        // line 229
        echo "                                ";
        // line 230
        echo "
                                    ";
        // line 232
        echo "                                        ";
        // line 233
        echo "                                            ";
        // line 234
        echo "                                        ";
        // line 235
        echo "                                    ";
        // line 236
        echo "                                    ";
        // line 237
        echo "                                        ";
        // line 238
        echo "                                            ";
        // line 239
        echo "                                        ";
        // line 240
        echo "                                    ";
        // line 241
        echo "                                    ";
        // line 242
        echo "                                        ";
        // line 243
        echo "                                            ";
        // line 244
        echo "                                        ";
        // line 245
        echo "                                    ";
        // line 246
        echo "                                    ";
        // line 247
        echo "                                        ";
        // line 248
        echo "                                            ";
        // line 249
        echo "                                        ";
        // line 250
        echo "                                    ";
        // line 251
        echo "                                    ";
        // line 252
        echo "                                        ";
        // line 253
        echo "                                            ";
        // line 254
        echo "                                        ";
        // line 255
        echo "                                    ";
        // line 256
        echo "                                ";
        // line 257
        echo "                            ";
        // line 258
        echo "                        ";
        // line 259
        echo "                        ";
        // line 260
        echo "                            ";
        // line 261
        echo "                        ";
        // line 262
        echo "                        ";
        // line 263
        echo "                 ";
        // line 264
        echo "                             ";
        // line 265
        echo "                         ";
        // line 266
        echo "                        ";
        // line 267
        echo "                        ";
        // line 268
        echo "                            ";
        // line 269
        echo "                                ";
        // line 270
        echo "                                    ";
        // line 271
        echo "                                        ";
        // line 272
        echo "                                    ";
        // line 273
        echo "                                ";
        // line 274
        echo "                                ";
        // line 275
        echo "                                    ";
        // line 276
        echo "                                        ";
        // line 277
        echo "                                    ";
        // line 278
        echo "                                ";
        // line 279
        echo "                                ";
        // line 280
        echo "                                    ";
        // line 281
        echo "                                        ";
        // line 282
        echo "                                    ";
        // line 283
        echo "                                ";
        // line 284
        echo "                                ";
        // line 285
        echo "                                    ";
        // line 286
        echo "                                        ";
        // line 287
        echo "                                    ";
        // line 288
        echo "                                ";
        // line 289
        echo "                            ";
        // line 290
        echo "                        ";
        // line 291
        echo "                    ";
        // line 292
        echo "                    ";
        // line 293
        echo "                        ";
        // line 294
        echo "                            ";
        // line 295
        echo "                                ";
        // line 296
        echo "                                    ";
        // line 297
        echo "                                ";
        // line 298
        echo "                            ";
        // line 299
        echo "                            ";
        // line 300
        echo "                            ";
        // line 301
        echo "                                ";
        // line 302
        echo "
                                    ";
        // line 304
        echo "                                        ";
        // line 305
        echo "                                            ";
        // line 306
        echo "                                        ";
        // line 307
        echo "                                    ";
        // line 308
        echo "                                    ";
        // line 309
        echo "                                        ";
        // line 310
        echo "                                            ";
        // line 311
        echo "                                        ";
        // line 312
        echo "                                    ";
        // line 313
        echo "                                    ";
        // line 314
        echo "                                        ";
        // line 315
        echo "                                            ";
        // line 316
        echo "                                        ";
        // line 317
        echo "                                    ";
        // line 318
        echo "                                    ";
        // line 319
        echo "                                        ";
        // line 320
        echo "                                            ";
        // line 321
        echo "                                        ";
        // line 322
        echo "                                    ";
        // line 323
        echo "                                    ";
        // line 324
        echo "                                        ";
        // line 325
        echo "                                            ";
        // line 326
        echo "                                        ";
        // line 327
        echo "                                    ";
        // line 328
        echo "                                ";
        // line 329
        echo "                            ";
        // line 330
        echo "                        ";
        // line 331
        echo "                        ";
        // line 332
        echo "                            ";
        // line 333
        echo "                        ";
        // line 334
        echo "                        ";
        // line 335
        echo "                            ";
        // line 336
        echo "                             ";
        // line 337
        echo "                            ";
        // line 338
        echo "                        ";
        // line 339
        echo "                        ";
        // line 340
        echo "                        ";
        // line 341
        echo "                    ";
        // line 342
        echo "                ";
        // line 343
        echo "
            ";
        // line 345
        echo "            ";
        // line 346
        echo "







            <!--商品详情瀑布流图片区 start-->
            <div class=\"product-images\">
                <div style=\"width: 100%\">
                    ";
        // line 357
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "
                </div>
            </div>
            <!--商品详情瀑布流图片区 end-->

            <!--底部菜单 start-->
            <div style=\"height: 4rem\"></div>
            <nav class=\"bar bar-tab\" style=\"position: fixed;z-index: 1000\">
                <a class=\"tab-item \" href=\"#\">
                    <span class=\"icon icon-message\"></span>
                    <span class=\"tab-label\">";
        // line 367
        echo (isset($context["customer_service"]) ? $context["customer_service"] : null);
        echo "</span>
                </a>
                <a class=\"tab-item \" href=\"#router1\">
                    <span class=\"icon icon-search\"></span>
                    <span class=\"tab-label\">";
        // line 371
        echo (isset($context["check_order"]) ? $context["check_order"] : null);
        echo "</span>
                </a>
                <a class=\"tab-item\" href=\"#router3\" style=\"background-color:#FF464E;width: 2%\">
                    <span style=\"color:white;\" class=\"tab-label\">";
        // line 374
        echo (isset($context["buy_now"]) ? $context["buy_now"] : null);
        echo "</span>
                </a>
                <!--<a id=\"shadow\" class=\"tab-item open-about\" href=\"#\" style=\"background-color:#03A9F4;width: 2%\">-->
                <!--<span style=\"color:white;\" class=\"tab-label\">立即购买</span>-->
                <!--</a>-->
            </nav>
            <!--底部菜单 end-->

        </div>
    </div>
</div>
";
        // line 386
        echo "<div class=\"page\" id='router3'>
    <header class=\"bar bar-nav\" style=\"background-color:#FF464E;\">
        <a class=\"button button-link button-nav pull-left back\" href=\"\">
            <span class=\"icon icon-left\" style=\"color: white\"></span>
        </a>
        <h1 class='title' style=\"color:white;font-weight: 200\">";
        // line 391
        echo (isset($context["order_confirm"]) ? $context["order_confirm"] : null);
        echo "</h1>
    </header>
    <div class=\"content\">
        <div class=\"parameters\">


            ";
        // line 397
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 398
            echo "                <div class=\"parameter\">
                    <div class=\"parameter-title\"> ";
            // line 399
            echo $this->getAttribute($context["option"], "name", array());
            echo " </div>
                    <div id=\"combo-choose-";
            // line 400
            echo $this->getAttribute($context["option"], "product_option_id", array());
            echo "\">


                        ";
            // line 403
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option_sub"]) {
                // line 404
                echo "

                            ";
                // line 406
                if (($this->getAttribute($context["option_sub"], "key", array()) == "0")) {
                    // line 407
                    echo "                                <div class=\"parameter-style choosed\">
                                    ";
                    // line 408
                    echo $this->getAttribute($context["option_sub"], "name", array());
                    echo "
                                    <input type=\"hidden\" value=\"";
                    // line 409
                    echo $this->getAttribute($context["option_sub"], "option_value_id", array());
                    echo "\">
                                </div>

                            ";
                } else {
                    // line 413
                    echo "                                <div class=\"parameter-style no-choosed\">
                                    ";
                    // line 414
                    echo $this->getAttribute($context["option_sub"], "name", array());
                    echo "
                                    <input type=\"hidden\" value=\"";
                    // line 415
                    echo $this->getAttribute($context["option_sub"], "option_value_id", array());
                    echo "\">
                                </div>
                            ";
                }
                // line 418
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 419
            echo "

                    </div>
                    <div style=\"clear: both\"></div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 425
        echo "

        </div>
        <div class=\"space\"></div>
        <div id=\"info\" class=\"list-block\" style=\"margin: 0rem\">
            <ul>
                <!-- Text inputs -->
                <li>
                    <div class=\"item-content\" style=\"padding-left:0;margin-left: 0\">
                        <div class=\"item-media\"><i class=\"icon icon-form-name\"></i></div>
                        <div class=\"item-inner\" style=\"margin-left: 0.4rem\">
                            <div class=\"item-title label\">";
        // line 436
        echo (isset($context["user_name"]) ? $context["user_name"] : null);
        echo "</div>
                            <div class=\"item-input\">
                                <input id=\"user_name\" type=\"text\" placeholder=\"Your name\">
                                <input id=\"product_id\" type=\"hidden\" value=\"";
        // line 439
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"item-content\" style=\"padding-left:0;margin-left: 0\">
                        <div class=\"item-media\"><i class=\"icon icon-form-email\"></i></div>
                        <div class=\"item-inner\" style=\"margin-left: 0.4rem\">
                            <div class=\"item-title label\">";
        // line 448
        echo (isset($context["user_email"]) ? $context["user_email"] : null);
        echo "</div>
                            <div class=\"item-input\">
                                <input id=\"user_email\" type=\"email\" placeholder=\"E-mail\">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"item-content\" style=\"padding-left:0;margin-left: 0\">
                        <div class=\"item-media\"><i class=\"icon icon-form-telephone\"></i></div>
                        <div class=\"item-inner\" style=\"margin-left: 0.4rem\">
                            <div class=\"item-title label\">";
        // line 459
        echo (isset($context["user_telephone"]) ? $context["user_telephone"] : null);
        echo "</div>
                            <div class=\"item-input\">
                                <input id=\"user_phone\" type=\"text\" placeholder=\"Telephone\" class=\"\">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"item-content\" style=\"padding-left:0;margin-left: 0\">
                        <div class=\"item-media\"><i class=\"icon icon-form-code\"></i></div>
                        <div class=\"item-inner\" style=\"margin-left: 0.4rem\">
                            <div class=\"item-title label\">";
        // line 470
        echo (isset($context["user_code"]) ? $context["user_code"] : null);
        echo "</div>
                            <div class=\"item-input\">
                                <input id=\"user_code\" type=\"text\" placeholder=\"Code\" class=\"\">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"item-content\" style=\"padding-left:0;margin-left: 0\">
                        <div class=\"item-media\"><i class=\"icon icon-form-addrase\"></i></div>
                        <div class=\"item-inner\" style=\"margin-left: 0.4rem\">
                            <div class=\"item-title label\">";
        // line 481
        echo (isset($context["user_address"]) ? $context["user_address"] : null);
        echo "</div>
                            <div class=\"item-input\">
                                <input id=\"user_address\" type=\"text\" placeholder=\"Address\" class=\"\">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                </li>
            </ul>
        </div>
        <div class=\"space\"></div>
        <div class=\"order-product-info\">
            <div class=\"order-product-info-title\" style=\"zoom: 1\">
                <div class=\"order-product-info-title-image\">
                    <img class=\"image\" src=\"";
        // line 496
        echo (isset($context["popup"]) ? $context["popup"] : null);
        echo "\">
                </div>

                <div class=\"order-product-info-title-image-side\">
                    <div class=\"order-product-info-title-image-side-name\">
                        ";
        // line 501
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "
                    </div>
                    ";
        // line 504
        echo "                    ";
        // line 505
        echo "                    ";
        // line 506
        echo "                    <div class=\"order-product-info-title-image-side-price\">
                        <div class=\"order-product-info-title-image-side-total-price\">
                            <span id=\"title-price\">";
        // line 508
        echo (isset($context["price_num"]) ? $context["price_num"] : null);
        echo "</span>
                        </div>
                        <div class=\"order-product-info-title-image-side-number\">
                            x<span id=\"ssl\">1</span>
                        </div>
                    </div>
                </div>
                <div style=\"clear: both\"></div>
            </div>
            <div class=\"list-block\" style=\"margin: 0rem\">
                <ul>
                    <li>
                        <div class=\"item-content\" style=\"padding-left:0;margin-left: 0\">
                            <div class=\"item-media\"><i class=\"icon icon-form-password\"></i></div>
                            <div class=\"item-inner\" style=\"margin-left: 0\">
                                <div class=\"item-title label\">";
        // line 523
        echo (isset($context["quantity"]) ? $context["quantity"] : null);
        echo "</div>
                                <div class=\"item-input\">
                                    <div class=\"quantity\">
                                        <div class=\"down\">
                                            <img class=\"down1\" id=\"down1\" src=\"/catalog/view/javascript/my/image/reduce_operating_button.png\">
                                            <img class=\"down2\" id=\"down2\" src=\"/catalog/view/javascript/my/image/reduce_forbid_button.png\">
                                        </div>
                                        <!--<div class=\"number\">-->
                                        <!--1-->
                                        <!--</div>-->
                                        <input id=\"sl\" class=\"quantity-input\" style=\"\" value=\"1\">
                                        <div class=\"up\">
                                            <img class=\"up1\" src=\"/catalog/view/javascript/my/image/plus_button.png\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class=\"item-content\" style=\"padding-left:0;margin-left: 0\">
                            <div class=\"item-media\"><i class=\"icon icon-form-password\"></i></div>
                            <div class=\"item-inner\" style=\"margin-left: 0\">
                                <div class=\"item-title label\">";
        // line 546
        echo (isset($context["the_freight"]) ? $context["the_freight"] : null);
        echo "</div>
                                <div class=\"item-input\">
                                    <input style=\"text-align: right\" type=\"text\" value=\"00.00\" disabled=\"disabled\"/>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class=\"item-content\" style=\"padding-left:0;margin-left: 0\">
                            <div class=\"item-media\"><i class=\"icon icon-form-password\"></i></div>
                            <div class=\"item-inner\" style=\"margin-left: 0\">
                                <div class=\"item-title label\">";
        // line 557
        echo (isset($context["total"]) ? $context["total"] : null);
        echo "</div>
                                <div class=\"item-input\">
                                    <input id=\"sum\" style=\"text-align: right\" type=\"text\" value=\"";
        // line 559
        echo (isset($context["price_num"]) ? $context["price_num"] : null);
        echo "\" disabled=\"disabled\"/>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div style=\"height: 3rem;background-color: white\"></div>
    </div>
    <!--底部菜单 start-->
    <nav class=\"bar bar-tab\" style=\"position: fixed;z-index: 100\">
        <a class=\"tab-item\" href=\"#\" style=\"text-align: left;padding-left: 0.4rem\">
            ";
        // line 572
        echo (isset($context["total"]) ? $context["total"] : null);
        echo ":<span id=\"order_price\" style=\"color:#FF464E \">";
        echo (isset($context["price_num"]) ? $context["price_num"] : null);
        echo "</span>
        </a>
        <a id=\"order-commit\" class=\"tab-item\" style=\"background-color:#FF5722;width: 2%\">
            <span style=\"color:white;\" class=\"tab-label\">";
        // line 575
        echo (isset($context["subimt_order"]) ? $context["subimt_order"] : null);
        echo "</span>
        </a>
    </nav>
    <!--底部菜单 end-->


</div>
<!--立即购买页面 end-->
<!--下单成功页 start-->
<div class=\"page\" id='router4' style=\"background-color: #F7F7F7\">
    <div class=\"content\">
        <div class=\"back-icon\">
            <a href=\"#router\">
                <img class=\"image\" src=\"/catalog/view/javascript/my/image/cross37.png\">
            </a>
        </div>
        <div class=\"\" style=\"width: 100%;text-align: center;margin-top: 1rem\">
            <span style=\"font-size: 1.3rem;font-weight: 200;color: #FF9800\">";
        // line 592
        echo (isset($context["checkout_success"]) ? $context["checkout_success"] : null);
        echo "</span>
        </div>
        <div class=\"\" style=\"width: 100%;text-align: center;margin-top: 0.5rem\">
            <span style=\"font-size: 0.7rem;font-weight: 200;color: #BFBFBF\">";
        // line 595
        echo (isset($context["text_checkout_success"]) ? $context["text_checkout_success"] : null);
        echo "</span>
        </div>
        <div class=\"\" style=\"width:100%;margin-top: 2rem\">
            <div style=\"margin: 0 auto;width: 40%\">
                <img class=\"image\" src=\"/catalog/view/javascript/my/image/decoration01.png\">
            </div>
        </div>
        <div class=\"\" style=\"margin: 0 2rem;font-size: 0.7rem; color: #656565;font-weight: 330\">
            <div class=\"row\" style=\"margin-top: 0.6rem\">
                <div class=\"col-50\">";
        // line 604
        echo (isset($context["order_amount"]) ? $context["order_amount"] : null);
        echo "</div>
                <div id=\"end-order-price\" class=\"col-50\" style=\"text-align: right\"></div>
            </div>
            <div class=\"row\" style=\"margin-top: 0.6rem\">
                <div class=\"col-50\"> ";
        // line 608
        echo (isset($context["order_number"]) ? $context["order_number"] : null);
        echo " </div>
                <div id=\"end-order-id\" class=\"col-50\" style=\"text-align: right\"></div>
            </div>
            <div class=\"row\" style=\"margin-top: 0.6rem\">
                <div class=\"col-50\">";
        // line 612
        echo (isset($context["time"]) ? $context["time"] : null);
        echo "</div>
                <div id=\"end-order-time\" class=\"col-50\" style=\"text-align: right\"></div>
            </div>
        </div>
        <div class=\"\" style=\"width: 100%;margin: 3rem 0\">
            <a href=\"#router2\">
                <div id=\"show-order\" style=\"margin: 0 auto;width: 80%;text-align: center;background-color: #FF9800;padding: 0.3rem 0;border-radius: 100px;color: white;font-weight: 200;font-size: 0.8rem\">
                    ";
        // line 619
        echo (isset($context["check_order"]) ? $context["check_order"] : null);
        echo "
                </div>
            </a>
        </div>
    </div>
</div>
<!--订单查询结果页面 start-->
<div class=\"page\" id='router2'>
    <header class=\"bar bar-nav\" style=\"background-color: #FF464E\">
        <a class=\"button button-link button-nav pull-left back\" style=\"color: white\" href=\"\">
            <span class=\"icon icon-left\"></span>
        </a>
        <h1 class='title' style=\"color: white;font-weight: 200\">";
        // line 631
        echo (isset($context["check_order"]) ? $context["check_order"] : null);
        echo "</h1>
    </header>
    <div class=\"content\">
        <div class=\"order-image\">
            <div class=\"send-font\">
                派送中...
            </div>
        </div>
        <div class=\"send-message\">
            <div class=\"row\">
                <div class=\"col-20\" style=\"width: 1rem;height: 7rem;text-align: center\">
                    <div style=\"width: 1rem;height: 1rem;margin-left:0.4rem;margin-top: 3rem\">
                        <img class=\"image\" src=\"/catalog/view/javascript/my/image/B-10.png\">
                    </div>
                </div>
                <div class=\"col-90\" style=\"border-bottom: 1px #eeeeee solid;height: 7rem;font-size: 0.8rem;font-weight: 300\">
                    <div  class=\"send-message-list\"> <span style=\"font-size: 1rem\" id=\"show-order-name\"> </span></div>
                    <div  class=\"send-message-list\"> <span id=\"show-order-address\"> </span></div>
                    <div  class=\"send-message-list\"><span id=\"show-order-code\"> </span></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-20\" style=\"width: 1rem;height: 3rem;text-align: center\">
                    <div style=\"width: 1rem;height: 1rem;margin-left:0.4rem;margin-top: 0.7rem\">
                        <img class=\"image\" src=\"/catalog/view/javascript/my/image/B-11.png\">
                    </div>
                </div>
                <div class=\"col-90\" style=\"border-bottom: 1px #eeeeee solid;height: 3rem;font-size: 0.8rem;font-weight: 300\">
                    <div  class=\"send-message-list\"><span id=\"show-order-meail\"></span></div>
                </div>
            </div>
            <div class=\"space\"></div>
            <div class=\"order-product-info\">
                <div class=\"order-product-info-title\" style=\"zoom: 1\">
                    <div class=\"order-product-info-title-image\">
                        <img class=\"image\" src=\"";
        // line 666
        echo (isset($context["popup"]) ? $context["popup"] : null);
        echo "\">
                    </div>

                    <div class=\"order-product-info-title-image-side\">
                        <div id=\"show-order-prouctname\" class=\"order-product-info-title-image-side-name\">
                            ";
        // line 671
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "
                        </div>
                        <div class=\"order-product-info-title-image-side-parameter\">
                            <font id=\"show-order-options\"></font>
                        </div>
                        <div class=\"order-product-info-title-image-side-price\">
                            <div id=\"show-order-price\" class=\"order-product-info-title-image-side-total-price\">
                            </div>
                            <div class=\"order-product-info-title-image-side-number\">
                                x<font id=\"show-order-quantity\">  </font>
                            </div>
                        </div>
                    </div>
                    <div style=\"clear: both\"></div>
                </div>
                <div class=\"list-block\" style=\"margin: 0rem\">
                    <ul>
                        <li>
                            <div class=\"item-content\" style=\"padding-left:0;margin-left: 0\">
                                <div class=\"item-media\"><i class=\"icon icon-form-password\"></i></div>
                                <div class=\"item-inner\" style=\"margin-left: 0\">
                                    <div class=\"item-title label\">";
        // line 692
        echo (isset($context["the_freight"]) ? $context["the_freight"] : null);
        echo "</div>
                                    <div class=\"item-input\">
                                        <input style=\"text-align: right\" type=\"text\" value=\"00.00\" disabled=\"disabled\"/>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"item-content\" style=\"padding-left:0;margin-left: 0\">
                                <div class=\"item-media\"><i class=\"icon icon-form-password\"></i></div>
                                <div class=\"item-inner\" style=\"margin-left: 0\">
                                    <div class=\"item-title label\">";
        // line 703
        echo (isset($context["total"]) ? $context["total"] : null);
        echo "</div>
                                    <div class=\"item-input\">
                                        <input id=\"show-order-total\" style=\"text-align: right\" type=\"text\" value=\"\$177.76\" disabled=\"disabled\"/>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"space\"></div>
            <div class=\"end-font\">
                <div>
                    ";
        // line 716
        echo (isset($context["order_number"]) ? $context["order_number"] : null);
        echo ": <font id=\"show-order-id\"></font>
                </div>
                <div>
                    ";
        // line 719
        echo (isset($context["time"]) ? $context["time"] : null);
        echo ": <font id=\"show-order-time\"></font>
                </div>
            </div>
        </div>
    </div>
</div>


<!--下单成功页 end-->
<!--订单查询页 start-->
<div class=\"page\" id='router1'>
    <header class=\"bar bar-nav\" style=\"background-color:#FF464E;\">
        <a class=\"button button-link button-nav pull-left back\" href=\"\">
            <span class=\"icon icon-left\" style=\"color: white\"></span>
        </a>
        <h1 class='title' style=\"color:white;font-weight: 200\">";
        // line 734
        echo (isset($context["check_order"]) ? $context["check_order"] : null);
        echo "</h1>
    </header>

    <div class=\"content\">
        <div class=\"\" style=\"padding: 1rem 0.4rem 0 0.4rem;background-color: white\">
            <div class=\"searchbar\" style=\"background-color: white\">
                <a class=\"searchbar-cancel\">Cancel</a>
                <div class=\"search-input\">
                    <label class=\"icon icon-search\" for=\"search\"></label>
                    <input id=\"search_email\" style=\"border: 1px solid #BFBFBF\" type=\"search\" id='search' placeholder='Email...'/>
                </div>
            </div>
        </div>
        <div id=\"search_order\" class=\"\" style=\"width: 100%;padding: 0.5rem 0;background-color: white\">
            <div style=\"margin: 0 auto;width: 80%;text-align: center;background-color: #FF464E;padding: 0.3rem 0;border-radius: 100px;color: white;font-weight: 200;font-size: 0.8rem\">
                ";
        // line 749
        echo (isset($context["check_order"]) ? $context["check_order"] : null);
        echo "
            </div>
        </div>
        <div id=\"search_order_content\">

        </div>
    </div>
</div>
<!--订单查询页 end -->
<script type='text/javascript' src='";
        // line 758
        echo (isset($context["zeptojs"]) ? $context["zeptojs"] : null);
        echo "' charset='utf-8'></script>
<script type='text/javascript' src='";
        // line 759
        echo (isset($context["smjs"]) ? $context["smjs"] : null);
        echo "' charset='utf-8'></script>
<script type='text/javascript' src='";
        // line 760
        echo (isset($context["sm_extendjs"]) ? $context["sm_extendjs"] : null);
        echo "' charset='utf-8'></script>
<!--<script type=\"text/javascript\" src=\"//g.alicdn.com/msui/sm/0.6.2/js/sm-city-picker.min.js\" charset=\"utf-8\"></script>-->
<!--<script>
    \$(\"#city-picker\").cityPicker({
        toolbarTemplate: '<header class=\"bar bar-nav\">\\
    <button class=\"button button-link pull-right close-picker\"> OK </button>\\
    <h1 class=\"title\">Choose  address</h1>\\
    </header>'
    });
</script>-->
<script>
    \$(function () {
        var config;
        config = {};
        \$(\".swiper-container\").swiper(config);
    });

    ";
        // line 777
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 778
            echo "    (function () {
        var radioWrap = document.getElementById(\"combo-choose-";
            // line 779
            echo $this->getAttribute($context["option"], "product_option_id", array());
            echo "\"),
                li = radioWrap.getElementsByTagName(\"div\");
        for (var i = 0; i < li.length; i++) {
            li[i].onclick = function () {
                for (var i = 0; i < li.length; i++) {
                    li[i].className = \"parameter-style no-choosed\";
                }
                this.className = \"parameter-style choosed\";
            }
        }
    })();
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 791
        echo "
    \$(document).ready(function () {
//加的效果
        \$(\".up\").click(function () {
            var n = \$(this).prev().val();
            var num = parseInt(n) + 1;
            \$(\"#down1\").show();
            \$(\"#down2\").hide();
            if (num == 0) {
                return;
            }
            \$(this).prev().val(num);
            \$(\"#ssl\").text(num);
            \$(\"#title-price\").text(num *";
        // line 804
        echo (isset($context["price_num"]) ? $context["price_num"] : null);
        echo ");
            \$(\"#sum\").val(num *";
        // line 805
        echo (isset($context["price_num"]) ? $context["price_num"] : null);
        echo ");
            \$(\"#order_price\").text(num *";
        // line 806
        echo (isset($context["price_num"]) ? $context["price_num"] : null);
        echo ");
        });
//减的效果
        \$(\".down\").click(function () {
            var n = \$(this).next().val();
            var num = parseInt(n) - 1;
            if (num == 1) {
                \$(\"#down1\").hide();
                \$(\"#down2\").show();
            }
            if (num == 0) {
                return
            }
            \$(this).next().val(num);
            \$(\"#ssl\").text(num);
            \$(\"#title-price\").text(num *";
        // line 821
        echo (isset($context["price_num"]) ? $context["price_num"] : null);
        echo ");
            \$(\"#sum\").val(num *";
        // line 822
        echo (isset($context["price_num"]) ? $context["price_num"] : null);
        echo ");
            \$(\"#order_price\").text(num *";
        // line 823
        echo (isset($context["price_num"]) ? $context["price_num"] : null);
        echo ");
        });
    })
</script>
<script>
    \$(document).ready(function () {
        \$(\"#order-commit\").click(function () {
            var options = new Array;
            var info = new Array;
            var to_4 = true;
            var price;
            var number;
            var user_name = \$(\"#user_name\").val();
            var user_email = \$(\"#user_email\").val();
            var user_phone = \$(\"#user_phone\").val();
            var user_code = \$(\"#user_code\").val();
            var user_address = \$(\"#user_address\").val();
            //var user_zone = \$(\"#city-picker\").val();
            var product_id = \$(\"#product_id\").val();

            price = \$(\"#order_price\").text();
            number = \$(\"#sl\").val();


            \$(\".choosed input[type='hidden']\").each(function () {
                options.push(\$(this).val());
            });

            \$(\"#info input\").each(function () {
                if (\$(this).val() == '') {
                    to_4 = false;
                }
//                info.push(\$(this).val());
            });

            if (to_4 == true) {
                \$.showPreloader();
                \$.post(\"";
        // line 860
        echo (isset($context["order_url"]) ? $context["order_url"] : null);
        echo "\", {
                            product_id: product_id,
                            options: options,
                            price: price,
                            number: number,
                            user_name: user_name,
                            user_email: user_email,
                            user_phone: user_phone,
                            user_code: user_code,
                            user_address: user_address,
             //               user_zone: user_zone,
                        },
                        function (date) {
                            date = \$.parseJSON(date);
                            if (date.status == 'success') {
                                \$(\"#end-order-id\").text(date.order_id);
                                \$(\"#end-order-price\").text(date.price);
                                \$(\"#end-order-time\").text(date.time);

                                //show-order
                                \$(\"#show-order-id\").text(date.order_id);
                                \$(\"#show-order-name\").text(user_name + \" \" + user_phone);
                                \$(\"#show-order-price\").text(\"";
        // line 882
        echo (isset($context["price"]) ? $context["price"] : null);
        echo "\");
                                \$(\"#show-order-address\").text( user_address);
                                \$(\"#show-order-code\").text(user_code);
                                \$(\"#show-order-meail\").text(user_email);
                                \$(\"#show-order-time\").text(\$(\"#end-order-time\").text());
                                \$(\"#show-order-total\").val(price);
                                ";
        // line 889
        echo "                                \$(\"#show-order-quantity\").text(number);
                                \$(\"#show-order-options\").text(date.option_str);
                                console.log(date);

                                \$.hidePreloader();
                                \$.router.load(\"#router4\");
                            } else {
                                \$.toast(\"Your order failed, please order again\");
                            }
                        });
            } else {
//                \$.toast(\"填写完整的订单信息\");
                \$.toast(\"Fill in the complete order information\");
            }

        });
    });


</script>
<script>
    \$(document).ready(function () {
        \$(\"#search_order\").click(function () {

            var search_email = \$(\"#search_email\").val();
            var reg = /\\w+[@]{1}\\w+[.]\\w+/;

            if (reg.test(search_email)) {
                \$.showPreloader();
                \$.post(\"";
        // line 918
        echo (isset($context["search_order_url"]) ? $context["search_order_url"] : null);
        echo "\", {
                            search_email: search_email,
                        },
                        function (date) {
                            console.log(date);
                            date = \$.parseJSON(date);
                            if (date.status == 'success') {
                                \$.hidePreloader();
                                \$(search_order_content).html(date.content)

                            } else {
                                \$.toast(\"False\");
                                \$.hidePreloader();

                            }
                        });
            } else {
//                \$.toast(\"请填写正确的邮箱地址\");
                \$.toast(\"Please fill in the correct email address\");
            }
        });
    });


</script>

<script>

</script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "default/template/product/myproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1446 => 918,  1415 => 889,  1406 => 882,  1381 => 860,  1341 => 823,  1337 => 822,  1333 => 821,  1315 => 806,  1311 => 805,  1307 => 804,  1292 => 791,  1274 => 779,  1271 => 778,  1267 => 777,  1247 => 760,  1243 => 759,  1239 => 758,  1227 => 749,  1209 => 734,  1191 => 719,  1185 => 716,  1169 => 703,  1155 => 692,  1131 => 671,  1123 => 666,  1085 => 631,  1070 => 619,  1060 => 612,  1053 => 608,  1046 => 604,  1034 => 595,  1028 => 592,  1008 => 575,  1000 => 572,  984 => 559,  979 => 557,  965 => 546,  939 => 523,  921 => 508,  917 => 506,  915 => 505,  913 => 504,  908 => 501,  900 => 496,  882 => 481,  868 => 470,  854 => 459,  840 => 448,  828 => 439,  822 => 436,  809 => 425,  798 => 419,  792 => 418,  786 => 415,  782 => 414,  779 => 413,  772 => 409,  768 => 408,  765 => 407,  763 => 406,  759 => 404,  755 => 403,  749 => 400,  745 => 399,  742 => 398,  738 => 397,  729 => 391,  722 => 386,  708 => 374,  702 => 371,  695 => 367,  682 => 357,  669 => 346,  667 => 345,  664 => 343,  662 => 342,  660 => 341,  658 => 340,  656 => 339,  654 => 338,  652 => 337,  650 => 336,  648 => 335,  646 => 334,  644 => 333,  642 => 332,  640 => 331,  638 => 330,  636 => 329,  634 => 328,  632 => 327,  630 => 326,  628 => 325,  626 => 324,  624 => 323,  622 => 322,  620 => 321,  618 => 320,  616 => 319,  614 => 318,  612 => 317,  610 => 316,  608 => 315,  606 => 314,  604 => 313,  602 => 312,  600 => 311,  598 => 310,  596 => 309,  594 => 308,  592 => 307,  590 => 306,  588 => 305,  586 => 304,  583 => 302,  581 => 301,  579 => 300,  577 => 299,  575 => 298,  573 => 297,  571 => 296,  569 => 295,  567 => 294,  565 => 293,  563 => 292,  561 => 291,  559 => 290,  557 => 289,  555 => 288,  553 => 287,  551 => 286,  549 => 285,  547 => 284,  545 => 283,  543 => 282,  541 => 281,  539 => 280,  537 => 279,  535 => 278,  533 => 277,  531 => 276,  529 => 275,  527 => 274,  525 => 273,  523 => 272,  521 => 271,  519 => 270,  517 => 269,  515 => 268,  513 => 267,  511 => 266,  509 => 265,  507 => 264,  505 => 263,  503 => 262,  501 => 261,  499 => 260,  497 => 259,  495 => 258,  493 => 257,  491 => 256,  489 => 255,  487 => 254,  485 => 253,  483 => 252,  481 => 251,  479 => 250,  477 => 249,  475 => 248,  473 => 247,  471 => 246,  469 => 245,  467 => 244,  465 => 243,  463 => 242,  461 => 241,  459 => 240,  457 => 239,  455 => 238,  453 => 237,  451 => 236,  449 => 235,  447 => 234,  445 => 233,  443 => 232,  440 => 230,  438 => 229,  436 => 228,  434 => 227,  432 => 226,  430 => 225,  428 => 224,  426 => 223,  424 => 222,  422 => 221,  420 => 220,  418 => 219,  416 => 218,  414 => 217,  412 => 216,  410 => 215,  408 => 214,  406 => 213,  404 => 212,  402 => 211,  400 => 210,  398 => 209,  396 => 208,  394 => 207,  392 => 206,  390 => 205,  388 => 204,  386 => 203,  384 => 202,  382 => 201,  380 => 200,  378 => 199,  376 => 198,  374 => 197,  372 => 196,  370 => 195,  368 => 194,  366 => 193,  364 => 192,  362 => 191,  360 => 190,  358 => 189,  356 => 188,  354 => 187,  352 => 186,  350 => 185,  348 => 184,  346 => 183,  344 => 182,  342 => 181,  340 => 180,  337 => 178,  335 => 177,  333 => 176,  331 => 175,  329 => 174,  327 => 173,  325 => 172,  323 => 171,  321 => 170,  319 => 169,  317 => 168,  315 => 167,  313 => 166,  311 => 165,  309 => 164,  307 => 163,  305 => 162,  303 => 161,  301 => 160,  299 => 159,  297 => 158,  295 => 157,  293 => 156,  291 => 155,  289 => 154,  287 => 153,  285 => 152,  283 => 151,  281 => 150,  279 => 149,  277 => 148,  275 => 147,  273 => 146,  271 => 145,  269 => 144,  267 => 143,  265 => 142,  263 => 141,  261 => 140,  259 => 139,  257 => 138,  255 => 137,  253 => 136,  251 => 135,  249 => 134,  247 => 133,  245 => 132,  243 => 131,  241 => 130,  239 => 129,  237 => 128,  235 => 127,  233 => 126,  231 => 125,  229 => 124,  227 => 123,  225 => 122,  223 => 121,  221 => 120,  219 => 119,  217 => 118,  215 => 117,  213 => 116,  211 => 115,  209 => 114,  207 => 113,  205 => 112,  203 => 111,  201 => 110,  199 => 109,  197 => 108,  194 => 106,  192 => 105,  190 => 104,  188 => 103,  186 => 102,  184 => 101,  182 => 100,  180 => 99,  178 => 98,  176 => 97,  174 => 96,  171 => 94,  169 => 93,  167 => 92,  164 => 90,  162 => 89,  149 => 77,  147 => 76,  145 => 75,  143 => 74,  138 => 71,  131 => 67,  121 => 60,  116 => 58,  100 => 45,  96 => 44,  92 => 43,  84 => 38,  75 => 31,  66 => 29,  62 => 28,  47 => 16,  43 => 15,  38 => 14,  36 => 13,  34 => 12,  26 => 6,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>{{ title }}</title>*/
/*     <meta name="viewport" content="initial-scale=1, maximum-scale=1">*/
/*     <link rel="shortcut icon" href="/favicon.ico">*/
/*     <meta name="apple-mobile-web-app-capable" content="yes">*/
/*     <meta name="apple-mobile-web-app-status-bar-style" content="black">*/
/*     {#<link rel="stylesheet" href=DIR_TEMPLATE . "/template/E/css/sm.css">#}*/
/*     {#<link rel="stylesheet" href="/template/E/css/sm-extend.css">#}*/
/*     {#<link rel="stylesheet" href="/template/E/css/my.css">#}*/
/*     <link rel="stylesheet" href="{{ mycss }}">*/
/*     <link rel="stylesheet" href="{{ sm_extendcss }}">*/
/*     <link rel="stylesheet" href="{{ smcss }}">*/
/* </head>*/
/* <body style="max-width: 640px;margin: 0 auto">*/
/* */
/* */
/* <div class="page-group">*/
/*     <div class="page page-current" id="router">*/
/*         <!--图片轮播 start-->*/
/*         <div class="content">*/
/*             <!-- Slider -->*/
/*             <div style="padding-bottom: 0" class="swiper-container" data-space-between='10'>*/
/*                 <div class="swiper-wrapper">*/
/*                     {% for image in images %}*/
/*                         <div class="swiper-slide"><img class="image" src="{{ image.popup }}" alt=""></div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*                 <div class="swiper-pagination"></div>*/
/*             </div>*/
/*             <!--图片轮播 end-->*/
/*             <!--商品信息 start-->*/
/*             <div class="product_info">*/
/*                 <div class="product_title">*/
/*                     {{ name }}*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-80">*/
/*                         <div class="row">*/
/*                             <div class="col-40 product_info_price">{{ price }}</div>*/
/*                             <div class="col-25 product_info_original_price"><s>{{ origin_price }}</s></div>*/
/*                             <div class="col-35 product_info_tag">{{ text_limitedtime_sales }}</div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*             <div class="space"></div>*/
/*             <!--商品信息 end-->*/
/*             <!--活动描述   标识 start-->*/
/*             <div class="middle_message">*/
/*                 <div class="middle_message_one">*/
/*                     <div class="row">*/
/*                         <div class="col-35 active" style="margin-top: 0.8rem">{{ text_sales_promotion }}</div>*/
/* */
/*                         <div class="col-60 middle_message_font">{{ text_sales_promotion_content }}</div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="middle_message_two" style="">*/
/*                     <div class="row">*/
/*                         <div class="col-50 middle_message_two_font">*/
/*                             <div class="middle_message_two_tag"><img class="image" src="/catalog/view/javascript/my/image/qietu-02-1.png"></div>*/
/*                             {{ small_title_1 }}*/
/*                         </div>*/
/*                         <div class="col-50 middle_message_two_font">*/
/*                             <div class="middle_message_two_tag"><img class="image" src="/catalog/view/javascript/my/image/qietu-02-1.png"></div>*/
/*                             {{ small_title_2 }}*/
/*                         </div>*/
/*                         {#<div class="col-33 middle_message_two_font">#}*/
/*                             {#<div class="middle_message_two_tag"><img class="image" src="/catalog/view/javascript/my/image/qietu-02-1.png"></div>#}*/
/*                             {#{{ small_title_3 }}#}*/
/*                         {#</div>#}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="space"></div>*/
/*             <!--活动描述   标识 end-->*/
/* */
/* */
/* */
/* */
/* */
/*             {#<!--评论模块 start-->#}*/
/*             {#<div class="comment">#}*/
/* */
/*                 {#<div class="comment-title">#}*/
/*                     {#全部评论(<font style="color: #BFBFBF">1662</font>)#}*/
/*                 {#</div>#}*/
/* */
/*                 {#<div class="comment-contents">#}*/
/*                     {#<div class="comment-content">#}*/
/*                         {#<div class="row no-gutter comment-content-author">#}*/
/*                             {#<div class="col-15">#}*/
/*                                 {#<div class="author-image">#}*/
/*                                     {#<img style="border-radius: 100%" class="image" src="/template/E/image/me.jpeg">#}*/
/*                                 {#</div>#}*/
/*                             {#</div>#}*/
/*                             {#<div class="col-60" style="line-height: 2rem">小淘气鞋店</div>#}*/
/*                             {#<div class="col-25" style="margin-top: 0.5rem">#}*/
/*                                 {#<div class="row">#}*/
/* */
/*                                     {#<div class="col-20 ">#}*/
/*                                         {#<div class="star">#}*/
/*                                             {#<img class="image" src="/template/E/image/xin_icon.png">#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                     {#<div class="col-20 ">#}*/
/*                                         {#<div class="star">#}*/
/*                                             {#<img class="image" src="/template/E/image/xin_icon.png">#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                     {#<div class="col-20 ">#}*/
/*                                         {#<div class="star">#}*/
/*                                             {#<img class="image" src="/template/E/image/xin_icon.png">#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                     {#<div class="col-20 ">#}*/
/*                                         {#<div class="star">#}*/
/*                                             {#<img class="image" src="/template/E/image/xin_icon.png">#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                     {#<div class="col-20 ">#}*/
/*                                         {#<div class="star">#}*/
/*                                             {#<img class="image" src="/template/E/image/xin_icon.png">#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                 {#</div>#}*/
/*                             {#</div>#}*/
/*                         {#</div>#}*/
/*                         {#<div class="comment-product-info">#}*/
/*                             {#颜色: 白色 尺寸: 中等#}*/
/*                         {#</div>#}*/
/*                         {#<div class="comment-content-message">#}*/
/*                          {#<span>#}*/
/*                              {#北京12月1日电（记者崔文毅、许可）中共中央总书记、国家主席习近平1日在人民大会堂出席中国共产党与世界政党高层对话会开幕式#}*/
/*                          {#</span>#}*/
/*                         {#</div>#}*/
/*                         {#<div class="comment-content-images">#}*/
/*                             {#<div class="row">#}*/
/*                                 {#<div class="col-25">#}*/
/*                                     {#<div class="comment-content-images-style">#}*/
/*                                         {#<img class="image" src="/template/E/image/me.jpeg">#}*/
/*                                     {#</div>#}*/
/*                                 {#</div>#}*/
/*                                 {#<div class="col-25">#}*/
/*                                     {#<div class="comment-content-images-style">#}*/
/*                                         {#<img class="image" src="/template/E/image/me.jpeg">#}*/
/*                                     {#</div>#}*/
/*                                 {#</div>#}*/
/*                                 {#<div class="col-25">#}*/
/*                                     {#<div class="comment-content-images-style">#}*/
/*                                         {#<img class="image" src="/template/E/image/me.jpeg">#}*/
/*                                     {#</div>#}*/
/*                                 {#</div>#}*/
/*                                 {#<div class="col-25">#}*/
/*                                     {#<div class="comment-content-images-style">#}*/
/*                                         {#<img class="image" src="/template/E/image/me.jpeg">#}*/
/*                                     {#</div>#}*/
/*                                 {#</div>#}*/
/*                             {#</div>#}*/
/*                         {#</div>#}*/
/*                     {#</div>#}*/
/*                     {#<div class="comment-content">#}*/
/*                         {#<div class="row no-gutter comment-content-author">#}*/
/*                             {#<div class="col-15">#}*/
/*                                 {#<div class="author-image">#}*/
/*                                     {#<img style="border-radius: 100%" class="image" src="/template/E/image/me.jpeg">#}*/
/*                                 {#</div>#}*/
/*                             {#</div>#}*/
/*                             {#<div class="col-60" style="line-height: 2rem">小淘气鞋店</div>#}*/
/*                             {#<div class="col-25" style="margin-top: 0.5rem">#}*/
/*                                 {#<div class="row">#}*/
/* */
/*                                     {#<div class="col-20 ">#}*/
/*                                         {#<div class="star">#}*/
/*                                             {#<img class="image" src="/template/E/image/xin_icon.png">#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                     {#<div class="col-20 ">#}*/
/*                                         {#<div class="star">#}*/
/*                                             {#<img class="image" src="/template/E/image/xin_icon.png">#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                     {#<div class="col-20 ">#}*/
/*                                         {#<div class="star">#}*/
/*                                             {#<img class="image" src="/template/E/image/xin_icon.png">#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                     {#<div class="col-20 ">#}*/
/*                                         {#<div class="star">#}*/
/*                                             {#<img class="image" src="/template/E/image/xin_icon.png">#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                     {#<div class="col-20 ">#}*/
/*                                         {#<div class="star">#}*/
/*                                             {#<img class="image" src="/template/E/image/xin_icon.png">#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                 {#</div>#}*/
/*                             {#</div>#}*/
/*                         {#</div>#}*/
/*                         {#<div class="comment-product-info">#}*/
/*                             {#颜色: 白色 尺寸: 中等#}*/
/*                         {#</div>#}*/
/*                         {#<div class="comment-content-message">#}*/
/*                  {#<span>#}*/
/*                              {#北京12月1日电（记者崔文毅、许可）中共中央总书记、国家主席习近平1日在人民大会堂出席中国共产党与世界政党高层对话会开幕式#}*/
/*                          {#</span>#}*/
/*                         {#</div>#}*/
/*                         {#<div class="comment-content-images">#}*/
/*                             {#<div class="row">#}*/
/*                             {#</div>#}*/
/*                         {#</div>#}*/
/*                     {#</div>#}*/
/*                     {#<div class="comment-content">#}*/
/*                         {#<div class="row no-gutter comment-content-author">#}*/
/*                             {#<div class="col-15">#}*/
/*                                 {#<div class="author-image">#}*/
/*                                     {#<img style="border-radius: 100%" class="image" src="/template/E/image/me.jpeg">#}*/
/*                                 {#</div>#}*/
/*                             {#</div>#}*/
/*                             {#<div class="col-60" style="line-height: 2rem">小淘气鞋店</div>#}*/
/*                             {#<div class="col-25" style="margin-top: 0.5rem">#}*/
/*                                 {#<div class="row">#}*/
/* */
/*                                     {#<div class="col-20 ">#}*/
/*                                         {#<div class="star">#}*/
/*                                             {#<img class="image" src="/template/E/image/xin_icon.png">#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                     {#<div class="col-20 ">#}*/
/*                                         {#<div class="star">#}*/
/*                                             {#<img class="image" src="/template/E/image/xin_icon.png">#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                     {#<div class="col-20 ">#}*/
/*                                         {#<div class="star">#}*/
/*                                             {#<img class="image" src="/template/E/image/xin_icon.png">#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                     {#<div class="col-20 ">#}*/
/*                                         {#<div class="star">#}*/
/*                                             {#<img class="image" src="/template/E/image/xin_icon.png">#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                     {#<div class="col-20 ">#}*/
/*                                         {#<div class="star">#}*/
/*                                             {#<img class="image" src="/template/E/image/xin_icon.png">#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                 {#</div>#}*/
/*                             {#</div>#}*/
/*                         {#</div>#}*/
/*                         {#<div class="comment-product-info">#}*/
/*                             {#颜色: 白色 尺寸: 中等#}*/
/*                         {#</div>#}*/
/*                         {#<div class="comment-content-message">#}*/
/*                  {#<span>#}*/
/*                              {#北京12月1日电（记者崔文毅、许可）中共中央总书记、国家主席习近平1日在人民大会堂出席中国共产党与世界政党高层对话会开幕式#}*/
/*                          {#</span>#}*/
/*                         {#</div>#}*/
/*                         {#<div class="comment-content-images">#}*/
/*                             {#<div class="row">#}*/
/*                                 {#<div class="col-25">#}*/
/*                                     {#<div class="comment-content-images-style">#}*/
/*                                         {#<img class="image" src="/template/E/image/me.jpeg">#}*/
/*                                     {#</div>#}*/
/*                                 {#</div>#}*/
/*                                 {#<div class="col-25">#}*/
/*                                     {#<div class="comment-content-images-style">#}*/
/*                                         {#<img class="image" src="/template/E/image/me.jpeg">#}*/
/*                                     {#</div>#}*/
/*                                 {#</div>#}*/
/*                                 {#<div class="col-25">#}*/
/*                                     {#<div class="comment-content-images-style">#}*/
/*                                         {#<img class="image" src="/template/E/image/me.jpeg">#}*/
/*                                     {#</div>#}*/
/*                                 {#</div>#}*/
/*                                 {#<div class="col-25">#}*/
/*                                     {#<div class="comment-content-images-style">#}*/
/*                                         {#<img class="image" src="/template/E/image/me.jpeg">#}*/
/*                                     {#</div>#}*/
/*                                 {#</div>#}*/
/*                             {#</div>#}*/
/*                         {#</div>#}*/
/*                     {#</div>#}*/
/*                     {#<div class="comment-content">#}*/
/*                         {#<div class="row no-gutter comment-content-author">#}*/
/*                             {#<div class="col-15">#}*/
/*                                 {#<div class="author-image">#}*/
/*                                     {#<img style="border-radius: 100%" class="image" src="/template/E/image/me.jpeg">#}*/
/*                                 {#</div>#}*/
/*                             {#</div>#}*/
/*                             {#<div class="col-60" style="line-height: 2rem">小淘气鞋店</div>#}*/
/*                             {#<div class="col-25" style="margin-top: 0.5rem">#}*/
/*                                 {#<div class="row">#}*/
/* */
/*                                     {#<div class="col-20 ">#}*/
/*                                         {#<div class="star">#}*/
/*                                             {#<img class="image" src="/template/E/image/xin_icon.png">#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                     {#<div class="col-20 ">#}*/
/*                                         {#<div class="star">#}*/
/*                                             {#<img class="image" src="/template/E/image/xin_icon.png">#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                     {#<div class="col-20 ">#}*/
/*                                         {#<div class="star">#}*/
/*                                             {#<img class="image" src="/template/E/image/xin_icon.png">#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                     {#<div class="col-20 ">#}*/
/*                                         {#<div class="star">#}*/
/*                                             {#<img class="image" src="/template/E/image/xin_icon.png">#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                     {#<div class="col-20 ">#}*/
/*                                         {#<div class="star">#}*/
/*                                             {#<img class="image" src="/template/E/image/xin_icon.png">#}*/
/*                                         {#</div>#}*/
/*                                     {#</div>#}*/
/*                                 {#</div>#}*/
/*                             {#</div>#}*/
/*                         {#</div>#}*/
/*                         {#<div class="comment-product-info">#}*/
/*                             {#颜色: 白色 尺寸: 中等#}*/
/*                         {#</div>#}*/
/*                         {#<div class="comment-content-message">#}*/
/*                             {#<span>#}*/
/*                              {#北京12月1日电（记者崔文毅、许可）中共中央总书记、国家主席习近平1日在人民大会堂出席中国共产党与世界政党高层对话会开幕式#}*/
/*                             {#</span>#}*/
/*                         {#</div>#}*/
/*                         {#<div class="comment-content-images">#}*/
/*                         {#</div>#}*/
/*                     {#</div>#}*/
/*                 {#</div>#}*/
/* */
/*             {#</div>#}*/
/*             {#<!--评论模块 end-->#}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*             <!--商品详情瀑布流图片区 start-->*/
/*             <div class="product-images">*/
/*                 <div style="width: 100%">*/
/*                     {{ description }}*/
/*                 </div>*/
/*             </div>*/
/*             <!--商品详情瀑布流图片区 end-->*/
/* */
/*             <!--底部菜单 start-->*/
/*             <div style="height: 4rem"></div>*/
/*             <nav class="bar bar-tab" style="position: fixed;z-index: 1000">*/
/*                 <a class="tab-item " href="#">*/
/*                     <span class="icon icon-message"></span>*/
/*                     <span class="tab-label">{{ customer_service }}</span>*/
/*                 </a>*/
/*                 <a class="tab-item " href="#router1">*/
/*                     <span class="icon icon-search"></span>*/
/*                     <span class="tab-label">{{ check_order }}</span>*/
/*                 </a>*/
/*                 <a class="tab-item" href="#router3" style="background-color:#FF464E;width: 2%">*/
/*                     <span style="color:white;" class="tab-label">{{ buy_now }}</span>*/
/*                 </a>*/
/*                 <!--<a id="shadow" class="tab-item open-about" href="#" style="background-color:#03A9F4;width: 2%">-->*/
/*                 <!--<span style="color:white;" class="tab-label">立即购买</span>-->*/
/*                 <!--</a>-->*/
/*             </nav>*/
/*             <!--底部菜单 end-->*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {#立即购买页面 start#}*/
/* <div class="page" id='router3'>*/
/*     <header class="bar bar-nav" style="background-color:#FF464E;">*/
/*         <a class="button button-link button-nav pull-left back" href="">*/
/*             <span class="icon icon-left" style="color: white"></span>*/
/*         </a>*/
/*         <h1 class='title' style="color:white;font-weight: 200">{{ order_confirm }}</h1>*/
/*     </header>*/
/*     <div class="content">*/
/*         <div class="parameters">*/
/* */
/* */
/*             {% for option in options %}*/
/*                 <div class="parameter">*/
/*                     <div class="parameter-title"> {{ option.name }} </div>*/
/*                     <div id="combo-choose-{{ option.product_option_id }}">*/
/* */
/* */
/*                         {% for option_sub in option.product_option_value %}*/
/* */
/* */
/*                             {% if option_sub.key == '0' %}*/
/*                                 <div class="parameter-style choosed">*/
/*                                     {{ option_sub.name }}*/
/*                                     <input type="hidden" value="{{ option_sub.option_value_id }}">*/
/*                                 </div>*/
/* */
/*                             {% else %}*/
/*                                 <div class="parameter-style no-choosed">*/
/*                                     {{ option_sub.name }}*/
/*                                     <input type="hidden" value="{{ option_sub.option_value_id }}">*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/* */
/* */
/*                     </div>*/
/*                     <div style="clear: both"></div>*/
/*                 </div>*/
/*             {% endfor %}*/
/* */
/* */
/*         </div>*/
/*         <div class="space"></div>*/
/*         <div id="info" class="list-block" style="margin: 0rem">*/
/*             <ul>*/
/*                 <!-- Text inputs -->*/
/*                 <li>*/
/*                     <div class="item-content" style="padding-left:0;margin-left: 0">*/
/*                         <div class="item-media"><i class="icon icon-form-name"></i></div>*/
/*                         <div class="item-inner" style="margin-left: 0.4rem">*/
/*                             <div class="item-title label">{{ user_name }}</div>*/
/*                             <div class="item-input">*/
/*                                 <input id="user_name" type="text" placeholder="Your name">*/
/*                                 <input id="product_id" type="hidden" value="{{ product_id }}">*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li>*/
/*                     <div class="item-content" style="padding-left:0;margin-left: 0">*/
/*                         <div class="item-media"><i class="icon icon-form-email"></i></div>*/
/*                         <div class="item-inner" style="margin-left: 0.4rem">*/
/*                             <div class="item-title label">{{ user_email }}</div>*/
/*                             <div class="item-input">*/
/*                                 <input id="user_email" type="email" placeholder="E-mail">*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li>*/
/*                     <div class="item-content" style="padding-left:0;margin-left: 0">*/
/*                         <div class="item-media"><i class="icon icon-form-telephone"></i></div>*/
/*                         <div class="item-inner" style="margin-left: 0.4rem">*/
/*                             <div class="item-title label">{{ user_telephone }}</div>*/
/*                             <div class="item-input">*/
/*                                 <input id="user_phone" type="text" placeholder="Telephone" class="">*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li>*/
/*                     <div class="item-content" style="padding-left:0;margin-left: 0">*/
/*                         <div class="item-media"><i class="icon icon-form-code"></i></div>*/
/*                         <div class="item-inner" style="margin-left: 0.4rem">*/
/*                             <div class="item-title label">{{ user_code }}</div>*/
/*                             <div class="item-input">*/
/*                                 <input id="user_code" type="text" placeholder="Code" class="">*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li>*/
/*                     <div class="item-content" style="padding-left:0;margin-left: 0">*/
/*                         <div class="item-media"><i class="icon icon-form-addrase"></i></div>*/
/*                         <div class="item-inner" style="margin-left: 0.4rem">*/
/*                             <div class="item-title label">{{ user_address }}</div>*/
/*                             <div class="item-input">*/
/*                                 <input id="user_address" type="text" placeholder="Address" class="">*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="space"></div>*/
/*         <div class="order-product-info">*/
/*             <div class="order-product-info-title" style="zoom: 1">*/
/*                 <div class="order-product-info-title-image">*/
/*                     <img class="image" src="{{ popup }}">*/
/*                 </div>*/
/* */
/*                 <div class="order-product-info-title-image-side">*/
/*                     <div class="order-product-info-title-image-side-name">*/
/*                         {{ name }}*/
/*                     </div>*/
/*                     {#<div class="order-product-info-title-image-side-parameter">#}*/
/*                     {#已选: 时尚猫 1.2米床#}*/
/*                     {#</div>#}*/
/*                     <div class="order-product-info-title-image-side-price">*/
/*                         <div class="order-product-info-title-image-side-total-price">*/
/*                             <span id="title-price">{{ price_num }}</span>*/
/*                         </div>*/
/*                         <div class="order-product-info-title-image-side-number">*/
/*                             x<span id="ssl">1</span>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div style="clear: both"></div>*/
/*             </div>*/
/*             <div class="list-block" style="margin: 0rem">*/
/*                 <ul>*/
/*                     <li>*/
/*                         <div class="item-content" style="padding-left:0;margin-left: 0">*/
/*                             <div class="item-media"><i class="icon icon-form-password"></i></div>*/
/*                             <div class="item-inner" style="margin-left: 0">*/
/*                                 <div class="item-title label">{{ quantity }}</div>*/
/*                                 <div class="item-input">*/
/*                                     <div class="quantity">*/
/*                                         <div class="down">*/
/*                                             <img class="down1" id="down1" src="/catalog/view/javascript/my/image/reduce_operating_button.png">*/
/*                                             <img class="down2" id="down2" src="/catalog/view/javascript/my/image/reduce_forbid_button.png">*/
/*                                         </div>*/
/*                                         <!--<div class="number">-->*/
/*                                         <!--1-->*/
/*                                         <!--</div>-->*/
/*                                         <input id="sl" class="quantity-input" style="" value="1">*/
/*                                         <div class="up">*/
/*                                             <img class="up1" src="/catalog/view/javascript/my/image/plus_button.png">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li>*/
/*                         <div class="item-content" style="padding-left:0;margin-left: 0">*/
/*                             <div class="item-media"><i class="icon icon-form-password"></i></div>*/
/*                             <div class="item-inner" style="margin-left: 0">*/
/*                                 <div class="item-title label">{{ the_freight }}</div>*/
/*                                 <div class="item-input">*/
/*                                     <input style="text-align: right" type="text" value="00.00" disabled="disabled"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li>*/
/*                         <div class="item-content" style="padding-left:0;margin-left: 0">*/
/*                             <div class="item-media"><i class="icon icon-form-password"></i></div>*/
/*                             <div class="item-inner" style="margin-left: 0">*/
/*                                 <div class="item-title label">{{ total }}</div>*/
/*                                 <div class="item-input">*/
/*                                     <input id="sum" style="text-align: right" type="text" value="{{ price_num }}" disabled="disabled"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <div style="height: 3rem;background-color: white"></div>*/
/*     </div>*/
/*     <!--底部菜单 start-->*/
/*     <nav class="bar bar-tab" style="position: fixed;z-index: 100">*/
/*         <a class="tab-item" href="#" style="text-align: left;padding-left: 0.4rem">*/
/*             {{ total }}:<span id="order_price" style="color:#FF464E ">{{ price_num }}</span>*/
/*         </a>*/
/*         <a id="order-commit" class="tab-item" style="background-color:#FF5722;width: 2%">*/
/*             <span style="color:white;" class="tab-label">{{ subimt_order }}</span>*/
/*         </a>*/
/*     </nav>*/
/*     <!--底部菜单 end-->*/
/* */
/* */
/* </div>*/
/* <!--立即购买页面 end-->*/
/* <!--下单成功页 start-->*/
/* <div class="page" id='router4' style="background-color: #F7F7F7">*/
/*     <div class="content">*/
/*         <div class="back-icon">*/
/*             <a href="#router">*/
/*                 <img class="image" src="/catalog/view/javascript/my/image/cross37.png">*/
/*             </a>*/
/*         </div>*/
/*         <div class="" style="width: 100%;text-align: center;margin-top: 1rem">*/
/*             <span style="font-size: 1.3rem;font-weight: 200;color: #FF9800">{{ checkout_success }}</span>*/
/*         </div>*/
/*         <div class="" style="width: 100%;text-align: center;margin-top: 0.5rem">*/
/*             <span style="font-size: 0.7rem;font-weight: 200;color: #BFBFBF">{{ text_checkout_success }}</span>*/
/*         </div>*/
/*         <div class="" style="width:100%;margin-top: 2rem">*/
/*             <div style="margin: 0 auto;width: 40%">*/
/*                 <img class="image" src="/catalog/view/javascript/my/image/decoration01.png">*/
/*             </div>*/
/*         </div>*/
/*         <div class="" style="margin: 0 2rem;font-size: 0.7rem; color: #656565;font-weight: 330">*/
/*             <div class="row" style="margin-top: 0.6rem">*/
/*                 <div class="col-50">{{ order_amount }}</div>*/
/*                 <div id="end-order-price" class="col-50" style="text-align: right"></div>*/
/*             </div>*/
/*             <div class="row" style="margin-top: 0.6rem">*/
/*                 <div class="col-50"> {{ order_number }} </div>*/
/*                 <div id="end-order-id" class="col-50" style="text-align: right"></div>*/
/*             </div>*/
/*             <div class="row" style="margin-top: 0.6rem">*/
/*                 <div class="col-50">{{ time }}</div>*/
/*                 <div id="end-order-time" class="col-50" style="text-align: right"></div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="" style="width: 100%;margin: 3rem 0">*/
/*             <a href="#router2">*/
/*                 <div id="show-order" style="margin: 0 auto;width: 80%;text-align: center;background-color: #FF9800;padding: 0.3rem 0;border-radius: 100px;color: white;font-weight: 200;font-size: 0.8rem">*/
/*                     {{ check_order }}*/
/*                 </div>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!--订单查询结果页面 start-->*/
/* <div class="page" id='router2'>*/
/*     <header class="bar bar-nav" style="background-color: #FF464E">*/
/*         <a class="button button-link button-nav pull-left back" style="color: white" href="">*/
/*             <span class="icon icon-left"></span>*/
/*         </a>*/
/*         <h1 class='title' style="color: white;font-weight: 200">{{ check_order }}</h1>*/
/*     </header>*/
/*     <div class="content">*/
/*         <div class="order-image">*/
/*             <div class="send-font">*/
/*                 派送中...*/
/*             </div>*/
/*         </div>*/
/*         <div class="send-message">*/
/*             <div class="row">*/
/*                 <div class="col-20" style="width: 1rem;height: 7rem;text-align: center">*/
/*                     <div style="width: 1rem;height: 1rem;margin-left:0.4rem;margin-top: 3rem">*/
/*                         <img class="image" src="/catalog/view/javascript/my/image/B-10.png">*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-90" style="border-bottom: 1px #eeeeee solid;height: 7rem;font-size: 0.8rem;font-weight: 300">*/
/*                     <div  class="send-message-list"> <span style="font-size: 1rem" id="show-order-name"> </span></div>*/
/*                     <div  class="send-message-list"> <span id="show-order-address"> </span></div>*/
/*                     <div  class="send-message-list"><span id="show-order-code"> </span></div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-20" style="width: 1rem;height: 3rem;text-align: center">*/
/*                     <div style="width: 1rem;height: 1rem;margin-left:0.4rem;margin-top: 0.7rem">*/
/*                         <img class="image" src="/catalog/view/javascript/my/image/B-11.png">*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-90" style="border-bottom: 1px #eeeeee solid;height: 3rem;font-size: 0.8rem;font-weight: 300">*/
/*                     <div  class="send-message-list"><span id="show-order-meail"></span></div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="space"></div>*/
/*             <div class="order-product-info">*/
/*                 <div class="order-product-info-title" style="zoom: 1">*/
/*                     <div class="order-product-info-title-image">*/
/*                         <img class="image" src="{{ popup }}">*/
/*                     </div>*/
/* */
/*                     <div class="order-product-info-title-image-side">*/
/*                         <div id="show-order-prouctname" class="order-product-info-title-image-side-name">*/
/*                             {{ name }}*/
/*                         </div>*/
/*                         <div class="order-product-info-title-image-side-parameter">*/
/*                             <font id="show-order-options"></font>*/
/*                         </div>*/
/*                         <div class="order-product-info-title-image-side-price">*/
/*                             <div id="show-order-price" class="order-product-info-title-image-side-total-price">*/
/*                             </div>*/
/*                             <div class="order-product-info-title-image-side-number">*/
/*                                 x<font id="show-order-quantity">  </font>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div style="clear: both"></div>*/
/*                 </div>*/
/*                 <div class="list-block" style="margin: 0rem">*/
/*                     <ul>*/
/*                         <li>*/
/*                             <div class="item-content" style="padding-left:0;margin-left: 0">*/
/*                                 <div class="item-media"><i class="icon icon-form-password"></i></div>*/
/*                                 <div class="item-inner" style="margin-left: 0">*/
/*                                     <div class="item-title label">{{ the_freight }}</div>*/
/*                                     <div class="item-input">*/
/*                                         <input style="text-align: right" type="text" value="00.00" disabled="disabled"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="item-content" style="padding-left:0;margin-left: 0">*/
/*                                 <div class="item-media"><i class="icon icon-form-password"></i></div>*/
/*                                 <div class="item-inner" style="margin-left: 0">*/
/*                                     <div class="item-title label">{{ total }}</div>*/
/*                                     <div class="item-input">*/
/*                                         <input id="show-order-total" style="text-align: right" type="text" value="$177.76" disabled="disabled"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="space"></div>*/
/*             <div class="end-font">*/
/*                 <div>*/
/*                     {{ order_number }}: <font id="show-order-id"></font>*/
/*                 </div>*/
/*                 <div>*/
/*                     {{ time }}: <font id="show-order-time"></font>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* <!--下单成功页 end-->*/
/* <!--订单查询页 start-->*/
/* <div class="page" id='router1'>*/
/*     <header class="bar bar-nav" style="background-color:#FF464E;">*/
/*         <a class="button button-link button-nav pull-left back" href="">*/
/*             <span class="icon icon-left" style="color: white"></span>*/
/*         </a>*/
/*         <h1 class='title' style="color:white;font-weight: 200">{{ check_order }}</h1>*/
/*     </header>*/
/* */
/*     <div class="content">*/
/*         <div class="" style="padding: 1rem 0.4rem 0 0.4rem;background-color: white">*/
/*             <div class="searchbar" style="background-color: white">*/
/*                 <a class="searchbar-cancel">Cancel</a>*/
/*                 <div class="search-input">*/
/*                     <label class="icon icon-search" for="search"></label>*/
/*                     <input id="search_email" style="border: 1px solid #BFBFBF" type="search" id='search' placeholder='Email...'/>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div id="search_order" class="" style="width: 100%;padding: 0.5rem 0;background-color: white">*/
/*             <div style="margin: 0 auto;width: 80%;text-align: center;background-color: #FF464E;padding: 0.3rem 0;border-radius: 100px;color: white;font-weight: 200;font-size: 0.8rem">*/
/*                 {{ check_order }}*/
/*             </div>*/
/*         </div>*/
/*         <div id="search_order_content">*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!--订单查询页 end -->*/
/* <script type='text/javascript' src='{{ zeptojs }}' charset='utf-8'></script>*/
/* <script type='text/javascript' src='{{ smjs }}' charset='utf-8'></script>*/
/* <script type='text/javascript' src='{{ sm_extendjs }}' charset='utf-8'></script>*/
/* <!--<script type="text/javascript" src="//g.alicdn.com/msui/sm/0.6.2/js/sm-city-picker.min.js" charset="utf-8"></script>-->*/
/* <!--<script>*/
/*     $("#city-picker").cityPicker({*/
/*         toolbarTemplate: '<header class="bar bar-nav">\*/
/*     <button class="button button-link pull-right close-picker"> OK </button>\*/
/*     <h1 class="title">Choose  address</h1>\*/
/*     </header>'*/
/*     });*/
/* </script>-->*/
/* <script>*/
/*     $(function () {*/
/*         var config;*/
/*         config = {};*/
/*         $(".swiper-container").swiper(config);*/
/*     });*/
/* */
/*     {% for option in options %}*/
/*     (function () {*/
/*         var radioWrap = document.getElementById("combo-choose-{{ option.product_option_id }}"),*/
/*                 li = radioWrap.getElementsByTagName("div");*/
/*         for (var i = 0; i < li.length; i++) {*/
/*             li[i].onclick = function () {*/
/*                 for (var i = 0; i < li.length; i++) {*/
/*                     li[i].className = "parameter-style no-choosed";*/
/*                 }*/
/*                 this.className = "parameter-style choosed";*/
/*             }*/
/*         }*/
/*     })();*/
/*     {% endfor %}*/
/* */
/*     $(document).ready(function () {*/
/* //加的效果*/
/*         $(".up").click(function () {*/
/*             var n = $(this).prev().val();*/
/*             var num = parseInt(n) + 1;*/
/*             $("#down1").show();*/
/*             $("#down2").hide();*/
/*             if (num == 0) {*/
/*                 return;*/
/*             }*/
/*             $(this).prev().val(num);*/
/*             $("#ssl").text(num);*/
/*             $("#title-price").text(num *{{ price_num }});*/
/*             $("#sum").val(num *{{ price_num }});*/
/*             $("#order_price").text(num *{{ price_num }});*/
/*         });*/
/* //减的效果*/
/*         $(".down").click(function () {*/
/*             var n = $(this).next().val();*/
/*             var num = parseInt(n) - 1;*/
/*             if (num == 1) {*/
/*                 $("#down1").hide();*/
/*                 $("#down2").show();*/
/*             }*/
/*             if (num == 0) {*/
/*                 return*/
/*             }*/
/*             $(this).next().val(num);*/
/*             $("#ssl").text(num);*/
/*             $("#title-price").text(num *{{ price_num }});*/
/*             $("#sum").val(num *{{ price_num }});*/
/*             $("#order_price").text(num *{{ price_num }});*/
/*         });*/
/*     })*/
/* </script>*/
/* <script>*/
/*     $(document).ready(function () {*/
/*         $("#order-commit").click(function () {*/
/*             var options = new Array;*/
/*             var info = new Array;*/
/*             var to_4 = true;*/
/*             var price;*/
/*             var number;*/
/*             var user_name = $("#user_name").val();*/
/*             var user_email = $("#user_email").val();*/
/*             var user_phone = $("#user_phone").val();*/
/*             var user_code = $("#user_code").val();*/
/*             var user_address = $("#user_address").val();*/
/*             //var user_zone = $("#city-picker").val();*/
/*             var product_id = $("#product_id").val();*/
/* */
/*             price = $("#order_price").text();*/
/*             number = $("#sl").val();*/
/* */
/* */
/*             $(".choosed input[type='hidden']").each(function () {*/
/*                 options.push($(this).val());*/
/*             });*/
/* */
/*             $("#info input").each(function () {*/
/*                 if ($(this).val() == '') {*/
/*                     to_4 = false;*/
/*                 }*/
/* //                info.push($(this).val());*/
/*             });*/
/* */
/*             if (to_4 == true) {*/
/*                 $.showPreloader();*/
/*                 $.post("{{ order_url }}", {*/
/*                             product_id: product_id,*/
/*                             options: options,*/
/*                             price: price,*/
/*                             number: number,*/
/*                             user_name: user_name,*/
/*                             user_email: user_email,*/
/*                             user_phone: user_phone,*/
/*                             user_code: user_code,*/
/*                             user_address: user_address,*/
/*              //               user_zone: user_zone,*/
/*                         },*/
/*                         function (date) {*/
/*                             date = $.parseJSON(date);*/
/*                             if (date.status == 'success') {*/
/*                                 $("#end-order-id").text(date.order_id);*/
/*                                 $("#end-order-price").text(date.price);*/
/*                                 $("#end-order-time").text(date.time);*/
/* */
/*                                 //show-order*/
/*                                 $("#show-order-id").text(date.order_id);*/
/*                                 $("#show-order-name").text(user_name + " " + user_phone);*/
/*                                 $("#show-order-price").text("{{ price }}");*/
/*                                 $("#show-order-address").text( user_address);*/
/*                                 $("#show-order-code").text(user_code);*/
/*                                 $("#show-order-meail").text(user_email);*/
/*                                 $("#show-order-time").text($("#end-order-time").text());*/
/*                                 $("#show-order-total").val(price);*/
/*                                 {#$("#show-order-prouctname").text({{ name }});#}*/
/*                                 $("#show-order-quantity").text(number);*/
/*                                 $("#show-order-options").text(date.option_str);*/
/*                                 console.log(date);*/
/* */
/*                                 $.hidePreloader();*/
/*                                 $.router.load("#router4");*/
/*                             } else {*/
/*                                 $.toast("Your order failed, please order again");*/
/*                             }*/
/*                         });*/
/*             } else {*/
/* //                $.toast("填写完整的订单信息");*/
/*                 $.toast("Fill in the complete order information");*/
/*             }*/
/* */
/*         });*/
/*     });*/
/* */
/* */
/* </script>*/
/* <script>*/
/*     $(document).ready(function () {*/
/*         $("#search_order").click(function () {*/
/* */
/*             var search_email = $("#search_email").val();*/
/*             var reg = /\w+[@]{1}\w+[.]\w+/;*/
/* */
/*             if (reg.test(search_email)) {*/
/*                 $.showPreloader();*/
/*                 $.post("{{ search_order_url }}", {*/
/*                             search_email: search_email,*/
/*                         },*/
/*                         function (date) {*/
/*                             console.log(date);*/
/*                             date = $.parseJSON(date);*/
/*                             if (date.status == 'success') {*/
/*                                 $.hidePreloader();*/
/*                                 $(search_order_content).html(date.content)*/
/* */
/*                             } else {*/
/*                                 $.toast("False");*/
/*                                 $.hidePreloader();*/
/* */
/*                             }*/
/*                         });*/
/*             } else {*/
/* //                $.toast("请填写正确的邮箱地址");*/
/*                 $.toast("Please fill in the correct email address");*/
/*             }*/
/*         });*/
/*     });*/
/* */
/* */
/* </script>*/
/* */
/* <script>*/
/* */
/* </script>*/
/* */
/* </body>*/
/* </html>*/
/* */
