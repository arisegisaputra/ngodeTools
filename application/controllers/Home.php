<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
	        parent::__construct();
	        // $this->load->library(['datatables','Datatables_custom']);
	        // if(!$this->session->userdata('isLogin')) redirect ('user/login');
	        $this->load->model(array(
	            'Tools_m'
	        ));
	    }
	
	public function index(){

		$this->data['title_atas'] 	= "Tools Ngodeid";
		// $this->data['breadcrumb_atas'] 	= "Welcome";
		$this->data['data_tools'] 	= $this->Tools_m->get_all();
		$this->data['content'] 		= $this->load->view('home/tools',$this->data,TRUE);
		$this->load->view('layout/main',$this->data);
		
	}
}
