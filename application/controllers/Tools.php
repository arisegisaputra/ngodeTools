<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tools extends CI_Controller {
	function __construct(){
	        parent::__construct();
	        // $this->load->library(['datatables','Datatables_custom']);
	        // if(!$this->session->userdata('isLogin')) redirect ('user/login');
	        // $this->load->model(array(
	            // 'Event_m'
	        // ));
	    }
	
	public function index(){
    redirect('404');
		
	}
	
	public function md5(){

		$this->data['title_atas'] 	= "Md5 Hash Generator";
		$this->data['title_1'] 	= "Md5 Hash Generator";
		$this->data['content'] 		= $this->load->view('tools/md5',$this->data,TRUE);
		$this->load->view('layout/main',$this->data);
		
	}
}
