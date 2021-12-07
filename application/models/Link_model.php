<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Link_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function get_Links(){
    return $this->db->get('Linkler')->result();
  }

}
