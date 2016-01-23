<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terra extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {

            $data['title'] = ucfirst('Terra Page'); // Capitalize the first letter


            $this->load->view('templates/header', $data);
            $this->load->view('terra/message', $data);
            $this->load->view('templates/footer', $data);
	}
        
	public function show($first = '', $second = '') {

            $data['title'] = ucfirst('Terra Page '.$first); // Capitalize the first letter

            $data['first'] = $first;
            $data['second'] = $second;

            $this->load->view('templates/header', $data);
            $this->load->view('terra/message', $data);
            $this->load->view('templates/footer', $data);
	}
}
