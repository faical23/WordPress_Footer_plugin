<?php

/**
 * Plugin Name: My footer plugin
 * Plugin URI: https://localhost.com/
 * Description: this is my footer plugin
 * Version: 0.1
 * Author: Automattic
 * Author URI: https://localhost.com
 * Text Domain: localhost
 * Domain Path: /i18n/languages/
 * Requires at least: 5.5
 * Requires PHP: 8.0
 * @package WooCommerce
 */

/*
    MIT License

    Copyright (c) 2021 Faical Bahsis

    Permission is hereby granted, free of charge, to any person obtaining a copy
    of this software and associated documentation files (the "Software"), to deal
    in the Software without restriction, including without limitation the rights
    to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
    copies of the Software, and to permit persons to whom the Software is
    furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included in all
    copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
    IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
    FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
    AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
    LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
    OUT OF OR IN C
 */

defined('ABSPATH') or die('hey, you cant access this file ');  //// if connexion not definded to wordpress die the plugin



function Fill_js()
{
    wp_enqueue_script('ava-test-js', plugins_url('main.js', __FILE__)); //// get js file
}
function Fill_styles()
{
    wp_enqueue_style('custom-login-style', plugins_url('style.css', __FILE__)); /// get css file
}
function myfooter_code()
{

    $opt_BRAND = get_option('mf_opt_brand', 'lorem ipsum '); /// get this column from DataBase if not exist will be craeted  (param_1 = Name table , params_2 = value)
    $opt_ABOUT = get_option('mf_opt_about', 'lorem ipsum something.');
    $opt_FB = get_option('mf_opt_facebook', 'lorem ipsum something.');
    $opt_INS = get_option('mf_opt_instagram', 'lorem ipsum something.');
    $opt_TWT = get_option('mf_opt_twitter', 'lorem ipsum something.');
    $opt_LINK = get_option('mf_opt_linkden', 'lorem ipsum something.');


    echo "
    <section class='Myfooter'>
        <div class='Myfooter__zone'>
            <div class='Myfooter__about'>
                <h2 class='titre_footer'>$opt_BRAND</h2>
                <p>$opt_ABOUT<p>
                <a href='$opt_FB'>
                    <svg width='55' height='55' viewBox='0 0 55 55'  xmlns='http://www.w3.org/2000/svg'>
                        <g clip-path='url(#clip0)'>
                        <path d='M54.9981 27.5004C54.9987 22.0611 53.3864 16.7438 50.3649 12.221C47.3434 7.69811 43.0485 4.17285 38.0234 2.09103C32.9983 0.00920962 27.4687 -0.535662 22.1339 0.525326C16.7991 1.58631 11.8988 4.2055 8.05263 8.05165C4.20648 11.8978 1.58729 16.7981 0.526302 22.1329C-0.534686 27.4677 0.0101862 32.9973 2.09201 38.0224C4.17383 43.0475 7.69909 47.3424 12.222 50.3639C16.7448 53.3854 22.0621 54.9977 27.5014 54.9971C27.6675 54.9971 27.8237 54.9971 27.9849 54.9871V33.5916H22.0765V26.7062H27.9849V21.6352C27.9849 15.7584 31.5721 12.5583 36.8143 12.5583C38.583 12.5503 40.3508 12.6402 42.1096 12.8274V18.9751H38.5024C35.6562 18.9751 35.0979 20.3292 35.0979 22.3164V26.6995H41.9185L41.0263 33.5849H35.0963V53.937C40.8327 52.2865 45.8766 48.8147 49.4667 44.0458C53.0568 39.2769 54.9983 33.4696 54.9981 27.5004Z' />
                        </g>
                        <defs>
                        <clipPath id='clip0'>
                        <rect width='55' height='55' fill='white'/>
                        </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href='$opt_INS'>
                    <svg width='55' height='55' viewBox='0 0 55 55'  xmlns='http://www.w3.org/2000/svg'>
                        <g clip-path='url(#clip0)'>
                        <path d='M27.5004 2.0087e-07C22.0613 -0.000657056 16.7441 1.61163 12.2213 4.63297C7.69853 7.65431 4.17327 11.949 2.09135 16.9739C0.00943007 21.9988 -0.535636 27.5282 0.525082 32.8629C1.5858 38.1976 4.20466 43.098 8.05047 46.9443C11.8963 50.7905 16.7963 53.41 22.1309 54.4714C27.4654 55.5327 32.9949 54.9883 38.0201 52.907C43.0453 50.8257 47.3404 47.3009 50.3623 42.7785C53.3841 38.2561 54.9971 32.9391 54.9971 27.5C54.9962 20.2074 52.0991 13.2137 46.9427 8.05671C41.7864 2.89975 34.793 0.00176239 27.5004 2.0087e-07ZM40.0566 21.4337C40.0688 21.704 40.0749 21.976 40.0749 22.2496C40.0912 24.6126 39.6378 26.9553 38.7411 29.1417C37.8443 31.328 36.5221 33.3143 34.8511 34.9853C33.1801 36.6562 31.1938 37.9785 29.0075 38.8753C26.8211 39.772 24.4784 40.2254 22.1154 40.209C18.6861 40.2155 15.3274 39.235 12.4403 37.3844C12.9399 37.4433 13.4426 37.4727 13.9456 37.4725C16.7878 37.477 19.5488 36.5254 21.7847 34.7709C20.4672 34.7468 19.1902 34.311 18.1327 33.5247C17.0753 32.7384 16.2904 31.6409 15.888 30.3861C16.8341 30.5689 17.8096 30.532 18.7392 30.2781C17.3112 29.9894 16.027 29.2157 15.1042 28.0883C14.1815 26.9609 13.6771 25.5491 13.6765 24.0922V24.0124C14.5528 24.5005 15.5334 24.7711 16.536 24.8017C15.1974 23.9096 14.2498 22.5402 13.8866 20.9731C13.5235 19.406 13.7722 17.7593 14.582 16.3694C16.1672 18.3195 18.1448 19.9143 20.3864 21.0505C22.628 22.1866 25.0835 22.8385 27.5935 22.964C27.2761 21.61 27.4146 20.1891 27.9876 18.922C28.5605 17.6548 29.5358 16.6122 30.762 15.9561C31.9881 15.3001 33.3966 15.0672 34.7688 15.2936C36.1409 15.5201 37.3998 16.1932 38.3502 17.2085C39.7635 16.9295 41.1188 16.4115 42.3578 15.6765C41.8856 17.1376 40.899 18.3774 39.5814 19.1658C40.833 19.0168 42.0551 18.6808 43.2069 18.1688C42.3591 19.4357 41.2923 20.5413 40.0566 21.4337Z' />
                        </g>
                        <defs>
                        <clipPath id='clip0'>
                        <rect width='55' height='55' fill='white'/>
                        </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href='$opt_TWT'>
                    <svg width='55' height='55' viewBox='0 0 55 55'  xmlns='http://www.w3.org/2000/svg'>
                        <path d='M27.4976 0C22.0588 0.00032036 16.7423 1.61339 12.2203 4.63524C7.69829 7.65708 4.1739 11.952 2.0928 16.9768C0.0116984 22.0017 -0.532646 27.5308 0.528599 32.865C1.58984 38.1992 4.20902 43.099 8.05491 46.9446C11.9008 50.7903 16.8007 53.4092 22.135 54.4701C27.4692 55.531 32.9983 54.9864 38.0231 52.905C43.0478 50.8236 47.3425 47.2989 50.3641 42.7767C53.3856 38.2546 54.9984 32.9379 54.9984 27.4992C54.9975 20.2059 52.0998 13.2117 46.9425 8.0547C41.7853 2.89774 34.7908 0.000429495 27.4976 0V0ZM19.5072 41.5719H12.8093V21.4234H19.5072V41.5719ZM16.159 18.6713H16.1153C15.6362 18.7011 15.156 18.6318 14.7049 18.4676C14.2538 18.3034 13.8414 18.0479 13.4935 17.7172C13.1456 17.3864 12.8696 16.9874 12.6829 16.5451C12.4962 16.1029 12.4027 15.6268 12.4083 15.1468C12.4139 14.6668 12.5184 14.1931 12.7154 13.7553C12.9123 13.3175 13.1975 12.925 13.553 12.6024C13.9085 12.2798 14.3267 12.034 14.7816 11.8804C15.2364 11.7267 15.718 11.6685 16.1963 11.7095C16.6757 11.6768 17.1566 11.7434 17.6091 11.905C18.0615 12.0667 18.4757 12.32 18.8258 12.6491C19.1759 12.9782 19.4543 13.376 19.6436 13.8176C19.8329 14.2592 19.9291 14.7351 19.9261 15.2156C19.923 15.696 19.8209 16.1707 19.6261 16.6099C19.4312 17.0491 19.1478 17.4433 18.7937 17.768C18.4395 18.0927 18.0221 18.3408 17.5677 18.4967C17.1132 18.6527 16.6315 18.7133 16.1526 18.6746L16.159 18.6713ZM43.6566 41.5719H36.9604V30.7922C36.9604 28.0839 35.9885 26.2358 33.5669 26.2358C32.8109 26.2393 32.0745 26.4766 31.4586 26.9151C30.8427 27.3535 30.3774 27.9717 30.1265 28.6849C29.9549 29.2119 29.8803 29.7656 29.9062 30.3192V41.5719H23.2132C23.2132 41.5719 23.3007 23.312 23.2132 21.4217H29.9111V24.2742C30.5166 23.2208 31.3995 22.3538 32.4637 21.7675C33.5278 21.1811 34.7325 20.8979 35.9464 20.9488C40.3522 20.9488 43.6566 23.8287 43.6566 30.0196V41.5719Z' />
                    </svg>
                </a>
                <a href='$opt_LINK'>
                    <svg width='56' height='55' viewBox='0 0 56 55'  xmlns='http://www.w3.org/2000/svg'>
                        <g clip-path='url(#clip0)'>
                        <path d='M25.0732 32.6513L34.0182 27.4929L25.0732 22.3345V32.6513Z' />
                        <path d='M28.4989 0C23.0597 0 17.7427 1.61289 13.2202 4.63472C8.69775 7.65655 5.1729 11.9516 3.09143 16.9767C1.00996 22.0018 0.465355 27.5313 1.52648 32.8659C2.5876 38.2006 5.2068 43.1008 9.05286 46.9468C12.8989 50.7929 17.7991 53.4121 23.1337 54.4732C28.4684 55.5343 33.9979 54.9897 39.023 52.9082C44.0481 50.8268 48.3431 47.3019 51.365 42.7794C54.3868 38.257 55.9997 32.94 55.9997 27.5008C55.9992 20.2073 53.1017 13.2126 47.9444 8.05527C42.7871 2.89796 35.7924 0.000427485 28.4989 0V0ZM45.6828 27.5282C45.6998 30.2995 45.4629 33.0665 44.9752 35.7946C44.7782 36.5203 44.3947 37.1817 43.8627 37.7131C43.3308 38.2445 42.6689 38.6274 41.943 38.8235C39.2542 39.5312 28.4956 39.5312 28.4956 39.5312C28.4956 39.5312 17.7661 39.5312 15.0483 38.7945C14.3231 38.5977 13.6619 38.2146 13.1306 37.6833C12.5992 37.1519 12.2161 36.4908 12.0193 35.7656C11.5316 33.0381 11.2958 30.2715 11.3149 27.5008C11.2978 24.7295 11.5346 21.9625 12.0226 19.2344C12.2221 18.5069 12.6055 17.8429 13.136 17.3064C13.6665 16.77 14.3262 16.3792 15.0515 16.1716C17.7403 15.4752 28.4989 15.4752 28.4989 15.4752C28.4989 15.4752 39.2558 15.4752 41.9462 16.2119C42.6714 16.4087 43.3326 16.7918 43.8639 17.3232C44.3953 17.8545 44.7784 18.5157 44.9752 19.2409C45.4783 21.9762 45.7153 24.7537 45.6828 27.5347V27.5282Z' />
                        </g>
                        <defs>
                        <clipPath id='clip0'>
                        <rect width='55' height='55' fill='white' transform='translate(0.998047)'/>
                        </clipPath>
                        </defs>
                    </svg>
                </a>
                <div>
                    <form>
                        <input name='input' placeholder='Email' class='Email'>
                        <button class='Myfooter__button' onclik='get_email()'>Subscribe</button>
                    </form>
                </div>
            </div>
            <div>
                <ul>
                    <li class='titre_footer'>Links</li>
                    <li><a href='#'>Home</a></li>
                    <li><a href='#'>All products</a></li>
                    <li><a href='#'>About</a></li>
                    <li><a href='#'>Contact</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li class='titre_footer'>Who we are</li>
                    <li><a href='#'>Why us</a></li>
                    <li><a href='#'>About us</a></li>
                    <li><a href='#'>Carrers</a></li>
                    <li><a href='#'>Faq</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li class='titre_footer'>Langage</li>
                    <li><a href='#'>Arabic<a></li>
                    <li><a href='#'>Frensh<a></li>
                    <li><a href='#'>English<a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li class='titre_footer'>Support</li>
                    <li><a href='#'>Contact</a></li>
                    <li><a href='#'>Reclamation</a></li>
                    <li><a href='#'>Privacy policy</a></li>
                </ul>
                </div>
            </div>
        </div>
    </section>
    <section class='Mycopyright'>
        <p>COPYRIGHT YASSIN SHOP 2020 - TERMS &amp; CONDITIONS  PRIVACY POLICY<p>
    </section>";
}

function settings()
{
    echo "<h2>" . __('My Footer Settings') . "</h2>";
    include_once('Myfooter_setting.php');
}
function plugin_page()
{
    $page_title = "Myfooter Config"; /// titre for page plugin
    $menu_title = "Myfooter"; /// titre in the menu
    $capatibily = "manage_options"; /// get access user for manage this plugin
    $slug = "Wf_config"; /// i dnt know
    $callback = "settings"; // i dnt know
    $icon = "dashicons-pets"; // icons get from wordpress icons 

    add_menu_page($page_title, $menu_title, $capatibily, $slug, $callback, $icon); //// add plugin to menu wordpress page
}


add_action('wp_footer', 'myfooter_code');
add_action('wp_footer', 'Fill_js');
add_action('wp_footer', 'Fill_styles');
add_action('admin_menu', 'plugin_page'); /// add plugin to menu wordpress page
