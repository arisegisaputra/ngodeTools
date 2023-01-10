<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tools extends CI_Controller {
	function __construct(){
	        parent::__construct();
	        // $this->load->library(['datatables','Datatables_custom']);
	        // if(!$this->session->userdata('isLogin')) redirect ('user/login');
	        $this->load->model(array(
	            'Tools_m'
	        ));
	    }
	
	public function index(){
    redirect('404');
		
	}

  public function ceking_status_tools($slug=''){
    if($slug == ''){
      redirect('404');
      return false;
    }

    $ceking_tools = $this->Tools_m->get_where_by_slug($slug);

    if($ceking_tools == false){
      redirect('404');
      return false;
    }

    return true;
   
  }
	
	public function md5(){
    
    $cek = $this->ceking_status_tools('md5');
    if($cek){
      $this->data['title_atas']         = "Md5 Hash Generator";
      $this->data['title_1']            = "Md5 Hash Generator";
      $this->data['data_tools']         = $this->Tools_m->get_related('md5');
      $this->data['feature_tools']      = $this->load->view('home/feature',$this->data,TRUE);
      $this->data['content']            = $this->load->view('tools/md5',$this->data,TRUE);
      $this->load->view('layout/main',$this->data);
    }
		
		
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
  public function show_base64ToImage(){
    $value = $this->input->post('val')[0];
    $data_explode = explode('base64,', $value);
    $jumlah_data_explode = count($data_explode);
    // print_r($data_explode);
    // exit;
    $return = '';
    if($jumlah_data_explode > 1){
      $return .='
            <img src="'.$value.'" class="img-thumbnail rounded">
       ';
    }else{
      $return .='
            <img src="data:image/png;base64,'.$data_explode[0].'" class="img-thumbnail rounded">
       ';
    }

    echo $return;

  }

  //base64tools
  public function imageBase64(){
    $cek = $this->ceking_status_tools('imageBase64');
    if($cek){
  		$this->data['title_atas'] 	= "Image To base64";
  		$this->data['title_1'] 	= "Image To base64";
      $this->data['data_tools'] 	= $this->Tools_m->get_related('imageBase64');
      $this->data['feature_tools'] 	= $this->load->view('home/feature',$this->data,TRUE);
  		$this->data['content'] 		= $this->load->view('tools/base64',$this->data,TRUE);
  		$this->load->view('layout/main',$this->data);
    }
		
	}
  public function fileUpload(){

    if(!empty($_FILES['file']['name'])){
 
      // Set preference
      $config['upload_path'] = 'uploads/'; 
      $config['allowed_types'] = 'jpg|jpeg|png|gif';
      $config['max_size'] = '5024'; // max_size in kb
      $config['file_name'] = $_FILES['file']['name'];
      
      //Load upload library
      $this->load->library('upload',$config); 
 
      // File upload
      if($this->upload->do_upload('file')){
        // Get data about the file
        $uploadData = $this->upload->data();
        $path = $uploadData['full_path'];
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        // $return = '';
        // $return .= '<img src="'.$base64.'" class="img">';
        if($uploadData){
          unlink(''.$uploadData['full_path'].'');
          echo $base64;
        }
      }else{
        echo "Error";
      }
    }
 
  }

  //code playground
  public function code(){
    $cek = $this->ceking_status_tools('code');
    if($cek){
    	$this->data['title_atas'] 	= "Code Playground Ngodeapp";
    	$this->data['title_1'] 	= "Code Playground";
      $this->data['data_tools'] 	= $this->Tools_m->get_related('code');
      $this->data['feature_tools'] 	= $this->load->view('home/feature',$this->data,TRUE);
    	$this->data['content'] 		= $this->load->view('tools/code',$this->data,TRUE);
    	$this->load->view('layout/main',$this->data);
    }
		
	}

  public function base64Image(){
    $cek = $this->ceking_status_tools('base64Image');
    if($cek){
      $this->data['title_atas']   = "Base64 To Image";
      $this->data['title_1']  = "Base64 To Image";
      $this->data['data_tools']   = $this->Tools_m->get_related('base64Image');
      $this->data['feature_tools']  = $this->load->view('home/feature',$this->data,TRUE);
      $this->data['content']    = $this->load->view('tools/base64Image',$this->data,TRUE);
      $this->load->view('layout/main',$this->data);
    }
    
  }
}
