<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function load_view_wrapper($view = '', $data = '') {
		$this->load->view('templates/header', $data);

		if($view) {
			$this->load->view('home_view', $data);
		}
		
		$this->load->view('templates/footer', $data);
	}

	public function index() {
		$data['title'] = 'Home';

		$this->load_view_wrapper('home_view', $data);
	}
}