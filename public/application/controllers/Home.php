<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

//    public function __construct() {
//        parent::__construct(); // obrigatório

//        $this->load->library('session');
//        $this->load->helper('url');
//        $this->load->helper('html');
//        $this->load->helper('LS_assets');
//    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $data = array();
        
        // ---------- dynamically assets ---------------------------------------
        $arr_css_header = array(
            'bootstrap',
            'font_awesome',
            'zabuto_calendar',
            'jquery_gritter',
            'lineicons_style',
            'custom_style',
            'style_responsive',
        );        
        $data['css_header'] = get_assets_css($arr_css_header);
        
        $arr_js_header = array(
            'chart_master',
        );        
        $data['js_header'] = get_assets_js($arr_js_header);
        
        $arr_js_if_lt_IE_9 = array(
            'external_html5shiv',
            'external_respond_min',
        );        
        $data['js_if_lt_IE_9'] = get_assets_js($arr_js_if_lt_IE_9);
        
        $arr_js_footer = array(
            'jquery_default',
            'jquery_min',
            'bootstrap_min',
            'dcjqaccordion',
            'scrollto_min',
            'nicescroll',
            'sparkline',
            'common_scripts',
            'jquery_gritter',
            'gritter_conf',
            'sparkline_chart',
            'zabuto_calendar', 
            'dg_init_gritter',
            'dg_init_zabuto_calendar',
        );        
        $data['js_footer'] = get_assets_js($arr_js_footer);
        // ---------------------------------------------------------------------
        
        

        $data['title'] = ucfirst('Light Saber'); // Capitalize the first letter
        $data['h1_content'] = ucfirst('limpar sessão '); // Capitalize the first letter
        
        $data['array_session'] = '<pre>'.print_r($this->session->userdata(), true).'</pre>';

        $this->load->view('layout/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('layout/footer', $data);
    }

    public function show() {

        $data['title'] = ucfirst('Light Saber'); // Capitalize the first letter
        $data['h1_content'] = ucfirst('mostrar tabelas '); // Capitalize the first letter
        
        $arrSession = array(
            'username'  => 'johndoe',
            'email'     => 'johndoe@some-site.com',
            'logged_in' => TRUE
        );
        
        $this->session->set_userdata($arrSession);

        $this->load->view('layout/header', $data);
        $this->load->view('home/show', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit($first = '', $second = '') {

        $data['title'] = ucfirst('editar tabela ' . $first); // Capitalize the first letter
        $data['h1_content'] = ucfirst('editar tabela ' . $first); // Capitalize the first letter

        $data['first'] = $first;
        $data['second'] = $second;
        $data['array_session'] = '<pre>'.print_r($this->session->userdata(), true).'</pre>';
        $data['isLogged'] = $this->session->userdata('logged_in') === true ? 'Logado' : 'Deslogado';
        
//        var_dump($this->session->userdata());

        $this->load->view('layout/header', $data);
        $this->load->view('home/edit', $data);
        $this->load->view('layout/footer', $data);
    }

    public function cleanSession() {
        session_destroy();
        redirect(base_url().'home');
    }

}
