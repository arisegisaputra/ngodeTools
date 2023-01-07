<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Tools_m extends CI_Model {
  public function get_all(){
      $csql="SELECT * FROM tb_tools where rowstate=1 ORDER BY sort ASC";
      return $this->db->query($csql)->result();
  }

  public function get_where_else_feature($slug){
    $csql = "SELECT * from tb_tools where tools_slug != '".$slug."' AND rowstate=1 ORDER BY sort ASC  ";
    return $this->db->query($csql)->result();
  }
}