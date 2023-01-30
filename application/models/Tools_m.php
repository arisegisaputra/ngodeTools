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
  public function get_related($slug){
    $csql = "SELECT * from tb_tools where tools_slug = '".$slug."' AND rowstate=1";
    $data_tools = $this->db->query($csql)->row();
    $csql_related = "SELECT * from tb_tools where kategori_id = $data_tools->kategori_id AND tools_slug != '".$data_tools->tools_slug."' AND rowstate=1  ORDER BY sort ASC";
    
    return $this->db->query($csql_related)->result();

  }
  public function get_where_by_slug($slug){
    $csql = "SELECT * from tb_tools where tools_slug = '".$slug."' AND rowstate=1 ORDER BY sort ASC  ";
    return $this->db->query($csql)->row();
  }
  public function get_by_category($category_id,$id){
    $csql = "SELECT * from tb_tools where kategori_id = '".$category_id."' AND rowstate=1 AND id !='".$id."' ORDER BY sort ASC  ";
    return $this->db->query($csql)->result();
  }
}