<?php


/**
 * Plugin Name: MV Slider
 * Plugin URI: https://github.com/thfields/plugin_mvslider_wordpress
 * Description: My plugin's description
 * Version: 1.0
 * Requires at least: 5.6
 * Author: Thiago Campos
 * Author URI: https://github.com/thfields
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mv-slider
 * Domain Path: /languages
*/

/*
MV Slider is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

MV Slider is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with MV Slider. If not, see {URI to Plugin License}.
*/

if( ! defined("ABSPATH") ){
    die("Não consegue acessar o plugin direto");
    exit;
}


if( ! class_exists("MV_Slider") ){
    class MV_Slider{
        function __construct(){
            $this->define_constants();
        }

        public function define_constants(){
            define( 'MV_SLIDER_PATH' , plugin_dir_path(__FILE__)); #Const com o caminho da pasta do plugin
            define( 'MV_SLIDER_URL' , plugin_dir_url(__FILE__)); #Const com a url do plugin
            define( 'MV_SLIDER_VERSION', '1.0.0'); #Const para definir a versão do plugin
        }
    }
}

if( class_exists("") ){
    $mv_slider = new MV_Slider();
}