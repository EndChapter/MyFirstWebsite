<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function get_records($limit, $count){
    return $this->db->limit($limit, $count)->get('Content')->result();
  }
  public function get_count()
  {
    return $this->db->count_all('Content');
  }
  public  function get_content($id){
    return $this->db->where('href', $id)->get('Content')->result();
  }
}
