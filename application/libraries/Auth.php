<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Auth {
	
	function __construct(){
		$this->ci =& get_instance();
		$this->ci->load->library('session');
		$this->ci->load->database();
	}

	public function get_permission($module_line_id = ''){
		$roles_id = $this->ci->session->userdata('roles_id');
		$query = "SELECT a.*, b.roles_id, b.roles_permission_id, b.permission from module_line as a
			LEFT JOIN (SELECT * from roles_permission WHERE roles_id = '$roles_id') as b on a.module_line_id = b.module_line_id
			WHERE a.module_line_id = '$module_line_id'";
	    return $this->ci->db->query($query)->row();
	}

	public function get_the_current_url() {
	    $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
	    $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
	    $complete_url =   $base_url . $_SERVER["REQUEST_URI"];
	    
	    return $complete_url;
     
	}

}