<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
	        parent::__construct();
	        // $this->load->library(['datatables','Datatables_custom']);
	        // if(!$this->session->userdata('isLogin')) redirect ('user/login');
	        // $this->load->model(array(
	            // 'Event_m'
	        // ));
	    }
	
	public function index(){

		$this->data['title_atas'] 	= "Buku Tamu";
		$this->data['breadcrumb_atas'] 	= "Welcome";
		$this->data['breadcrumb'] 	= "home";
		$this->data['content'] 		= $this->load->view('home/dashboard',$this->data,TRUE);
		$this->load->view('layout/main',$this->data);
		
	}
}
