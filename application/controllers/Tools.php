<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tools extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    // $this->load->library(['datatables','Datatables_custom']);
    // if(!$this->session->userdata('isLogin')) redirect ('user/login');
    $this->load->model(array(
      'Tools_m'
    ));
  }

  public function index()
  {
    
    redirect('404');
  }
  public function rute($slug=null) {    
    $this->data['data_tools'] = $data_tools = $this->Tools_m->get_where_by_slug($slug);
    if (empty($data_tools)) {
      redirect('404');
    }else{
      $this->data['title_atas']         = strtolower(ucwords($data_tools->tools_name));
      $this->data['title_1']            = strtolower(ucwords($data_tools->tools_name));
      $this->data['tools_related']      = $this->Tools_m->get_by_category($data_tools->kategori_id,$data_tools->id);
      $this->data['feature_tools']      = $this->load->view('home/feature', $this->data, TRUE);
      $this->data['content']            = $this->load->view('tools/'.$data_tools->tools_view.'', $this->data, TRUE);
      $this->load->view('layout/main', $this->data);
    }
    
  }
  public function hitung_stock(){
    $stock_qty = $this->input->post('stock_qty');
    $stock_price = $this->input->post('stock_price');
    $return = '';
    $total_qty = 0;
    $total_price = 0;
    for ($i = 0; $i < count($stock_qty); $i++) {
        $total_qty += $stock_qty[$i];
        $total_price += $stock_qty[$i] * $stock_price[$i];
    }
    $average = $total_price / $total_qty;
    
    $return .= '
    <table class="table table-striped text-center" >
        <tbody>
            <tr>
              <td style="background-color:#749F82; font-weight:bolder; padding:5px" colspan="2">Total Qty <b style="color:orange; font-size:18px">'.$total_qty.'</b> </td>
              <td style="background-color:#749F82; font-weight:bolder; padding:5px"> Average Value <b style="color:orange; font-size:18px">'.number_format($average,1).'</b></td>
            </tr>
        </tbody>
     </table>';
    echo $return;
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
                          <input type="text" class="form-control"  aria-describedby="button-addon2" value="' . md5($value[$i]) . '" id="' . $i . '">
                          <button class="btn btn-sm btn-primary" type="button" onclick="myFunction(\'' . $i . '\')" id="button-addon2">Copy</button>
                          </div>
                          
                          
                          </td>
                          
                      </tr>';
    }

    $return .= '</tbody></table>';
    echo $return;
  }

  //base64tools
  public function imageBase64(){
    $cek = $this->ceking_status_tools('imageBase64');
    if ($cek) {
      $this->data['title_atas']   = "Image To base64";
      $this->data['title_1']   = "Image To base64";
      $this->data['data_tools']   = $this->Tools_m->get_related('imageBase64');
      $this->data['feature_tools']   = $this->load->view('home/feature', $this->data, TRUE);
      $this->data['content']     = $this->load->view('tools/base64', $this->data, TRUE);
      $this->load->view('layout/main', $this->data);
    }
  }


  function get_http_response_code($url){
    error_reporting(0);
    try {
      $headers = get_headers($url);
      $status = substr($headers[0], 9, 3);
      if ($status == 200) {
        $url =  "$url ";
        $status_return = "<span class ='badge badge-success'>online and available</span>";
      } else {
        $url =  "$url ";
        $status_return = "<span class ='badge badge-danger'>offline or unavailable</span>";
      }
    } catch (Exception $e) {
      $url = "$url ";
      $status_return = "Error: " . $e->getMessage();
    }

    return $status_return;
  }

  public function show_base64ToImage()
  {
    $value = $this->input->post('val')[0];
    $data_explode = explode('base64,', $value);
    $jumlah_data_explode = count($data_explode);
    // print_r($data_explode);
    // exit;
    $return = '';
    if ($jumlah_data_explode > 1) {
      $return .= '
            <img src="' . $value . '" class="img-thumbnail rounded">
       ';
    } else {
      $return .= '
            <img src="data:image/png;base64,' . $data_explode[0] . '" class="img-thumbnail rounded">
       ';
    }

    echo $return;
  }

  public function show_websiteStatusChecker()
  {
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
                          <th style="background-color:#749F82; font-weight:bolder">Url</th>
                          <th style="background-color:#749F82; font-weight:bolder">Status</th>
                          
                        </tr>
                    </thead>';
    // echo "<pre>";
    $return .= '<tbody>';
    for ($i = 0; $i < $jumlah_data; $i++) {
      $status = $this->get_http_response_code($value[$i]);
      $return .= '<tr >
                          <td style="padding:10px; background-color:white">' . $no++ . '</td>
                          <td style="padding:10px; background-color:white">' . $value[$i] . ' </td>
                          <td style="padding:10px; background-color:white">
                          ' . $status . '
                          </td>
                          
                      </tr>';
    }

    $return .= '</tbody></table>';
    echo $return;
  }

  
  public function fileUpload()
  {

    if (!empty($_FILES['file']['name'])) {

      // Set preference
      $config['upload_path'] = 'uploads/';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';
      $config['max_size'] = '5024'; // max_size in kb
      $config['file_name'] = $_FILES['file']['name'];

      //Load upload library
      $this->load->library('upload', $config);

      // File upload
      if ($this->upload->do_upload('file')) {
        // Get data about the file
        $uploadData = $this->upload->data();
        $path = $uploadData['full_path'];
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        // $return = '';
        // $return .= '<img src="'.$base64.'" class="img">';
        if ($uploadData) {
          unlink('' . $uploadData['full_path'] . '');
          echo $base64;
        }
      } else {
        echo "Error";
      }
    }
  }


}
