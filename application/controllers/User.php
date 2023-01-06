<?php 

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model(array(
           
            'User_m'
           
            ));
	}
	
    public function index(){
        redirect('login');
    }
    
    public function login(){
		$this->load->view('login');
	}
    
    public function do_login(){
        $username      = $this->input->post('username');
        $password   = $this->input->post('password');
        
        $enc = md5($password);
        //echo $enc;
        $sql = $this->db->query("SELECT
                   *
                FROM
                    tb_user 
                WHERE
                username = '$username'
                AND password = '$enc'
                AND status = '0'
                LIMIT 1");
        if($sql->num_rows() == 1){
                

            $row = $sql->row();
           
            $data = array (
                'isLogin' => 'yes',
                'user_id' => $row->user_id,
                'username' => $row->username,
                'nama' => $row->nama
               
            );
            $this->session->set_userdata($data);
			//$this->session->set_flashdata('Anda Berhasil Login');
            redirect('home');
        } else {
            $this->session->set_flashdata('error', '<p class="errors notification">User ID atau Password Salah!!</p>');
            redirect('user/login');
            
        }
    }
    
    public function do_logout()
    {
        

        // if($query > 0 ){
           $data_session = array(
            'isLogin'       => $this->session->userdata('isLogin'),
            'user_id'       => $this->session->userdata('user_id'),         
            'username'      => $this->session->userdata('username'),          
            'nama'     => $this->session->userdata('nama')    
        );

        $this->session->unset_userdata($data_session);
        $this->session->sess_destroy($data_session);
        
        // }
        
        redirect('user/login');   
    }
   
}