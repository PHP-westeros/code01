<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

// Helpers from Light Saber

if(!function_exists('get_assets_js')){
    function get_assets_js(array $itens = array())
    {
        $str = '';
        $ci = &get_instance();
        $header_js  = $ci->config->item('header_js');
  
        foreach($header_js AS $item){
            $str .= '<script type="text/javascript" src="'.base_url().'js/'.$item.'"></script>'."\n";
        }
 
        return $str;
    }
}

if(!function_exists('get_assets_css')){
    function get_assets_css(array $itens = array())
    {
        $str = '';
        $ci = &get_instance();
        $header_css = $ci->config->item('header_css');
 
        foreach($itens AS $item) {
            if (isset($header_css[$item])) {
                $asset = $header_css[$item];
                $str .= '<link rel="stylesheet" href="'.base_url($asset).'" type="text/css" check-ls="ok" />'."\n";
            }
        }
 
        return $str;
    }
}