<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

// Helpers from Light Saber

if(!function_exists('get_assets_js')){
    function get_assets_js(array $itens = array()) {
        
        if (count($itens) == 0) {
            return '';
        }
        
        // properties for asset
        $add_properties = array(
            'dcjqaccordion' => 'class="include"'
        );
        
        $str = '';
        $ci = &get_instance();
        $header_js  = $ci->config->item('header_js');
  
        foreach($itens AS $item) {
            if (isset($header_js[$item])) {
                $asset = $header_js[$item];
                $src = substr($item, 0, 9) == 'external_' ? $asset : base_url($asset).'?vs='.LS_JS_VERSION;
                $properties = isset($add_properties[$item]) ? $add_properties[$item] : '';
                $str .= '<script src="'.$src.'" type="text/javascript" '.$properties.'></script>'."\n";
            }
        }
 
        return $str;
    }
}

if(!function_exists('get_assets_css')){
    function get_assets_css(array $itens = array()) {
        
        if (count($itens) == 0) {
            return '';
        }
        
        $str = '';
        $ci = &get_instance();
        $header_css = $ci->config->item('header_css');
 
        foreach($itens AS $item) {
            if (isset($header_css[$item])) {
                $asset = $header_css[$item];
                $href = substr($item, 0, 9) == 'external_' ? $asset : base_url($asset).'?vs='.LS_CSS_VERSION; 
                $str .= '<link href="'.$href.'" rel="stylesheet" type="text/css" />'."\n";
            }
        }
 
        return $str;
    }
}