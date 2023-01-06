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

  public function show_list_data_md5(){
    $value = $this->input->post('val');
    $jumlah_data = count($value);

    $error = array();
    $return = '';

    $no = 1;
            $return .= '
                <table class="table table-striped" >
                    <thead >
                        <tr style="padding:10px">
                          <th style="background-color:#749F82; font-weight:bolder">No</th>
                          <th style="background-color:#749F82; font-weight:bolder">Your String</th>
                          <th style="background-color:#749F82; font-weight:bolder">MD5 Hash</th>
                          
                        </tr>
                    </thead>';
            // echo "<pre>";
            $return .= '<tbody>';
            for ($i = 0; $i < $jumlah_data; $i++) {
              $return .= '<tr >
                          <td style="padding:10px; background-color:white">' . $no++ . '</td>
                          <td style="padding:10px; background-color:white">' . $value[$i] . ' </td>
                          <td style="padding:10px; background-color:white">
                          <div class="input-group mb-3">
                          <input type="text" class="form-control"  aria-describedby="button-addon2" value="' . md5($value[$i]) . '" id="'.$i.'">
                          <button class="btn btn-sm btn-primary" type="button" onclick="myFunction(\''.$i.'\')" id="button-addon2">Copy</button>
                          </div>
                          
                          </td>
                          
                      </tr>';
                    }
                    
            $return .= '</tbody></table>';
            echo $return;

  }
}
