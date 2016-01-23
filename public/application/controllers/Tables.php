<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends CI_Controller {

    public function __construct() {
        parent::__construct(); // obrigatório

        $this->load->library('session');
        $this->load->helper('url');
    }

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

        $data['title'] = ucfirst('Terra Page'); // Capitalize the first letter
        $data['h1_content'] = ucfirst('limpar sessão '); // Capitalize the first letter
        
        $data['array_session'] = '<pre>'.print_r($this->session->userdata(), true).'</pre>';

        $this->load->view('templates/header', $data);
        $this->load->view('tables/message', $data);
        $this->load->view('templates/footer', $data);
    }

    public function show() {

        $data['title'] = ucfirst('show tabelas '); // Capitalize the first letter
        $data['h1_content'] = ucfirst('mostrar tabelas '); // Capitalize the first letter
        
        $arrSession = array(
            'username'  => 'johndoe',
            'email'     => 'johndoe@some-site.com',
            'logged_in' => TRUE
        );
        
        $this->session->set_userdata($arrSession);

        $this->load->view('templates/header', $data);
        $this->load->view('tables/show', $data);
        $this->load->view('templates/footer', $data);
    }

    public function edit($first = '', $second = '') {

        $data['title'] = ucfirst('editar tabela ' . $first); // Capitalize the first letter
        $data['h1_content'] = ucfirst('editar tabela ' . $first); // Capitalize the first letter

        $data['first'] = $first;
        $data['second'] = $second;
        $data['array_session'] = '<pre>'.print_r($this->session->userdata(), true).'</pre>';
        $data['isLogged'] = $this->session->userdata('logged_in') === true ? 'Logado' : 'Deslogado';
        
//        var_dump($this->session->userdata());

        $this->load->view('templates/header', $data);
        $this->load->view('tables/edit', $data);
        $this->load->view('templates/footer', $data);
    }

    public function cleanSession() {
        session_destroy();
        redirect(base_url().'tables');
    }

}
