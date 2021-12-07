<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->model('content_model');
    $this->load->model('link_model');
    $this->load->library('pagination');
    $config['base_url'] = base_url("index");
    $config['total_rows'] = $this->content_model->get_count();
    $config['uri_segment'] = 2;
    $config['use_page_numbers'] = TRUE;
    $config['num_links'] = 7;
    $config['use_global_url_suffix'] = FALSE;
    $config['per_page'] = 7;
    $config['prev_link'] = '';
    $config['next_link'] = '';
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['prev_tag_open'] = '<li class="waves-effect"><a onclick="geri()"><i class="material-icons">chevron_left</i>';
    $config['prev_tag_close'] = '</a></li>';
    $config['next_tag_open'] = '<li class="waves-effect"><a onclick="ileri()"><i class="material-icons">chevron_right</i>';
    $config['next_tag_close'] = '</a></li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li class="waves-effect">';
    $config['num_tag_close'] = '</li>';

    $this->pagination->initialize($config);
    $page = ($this->uri->segment(2)) ?  ($this->uri->segment(2)*7)-7 : 0;
    $viewData = new stdClass();
    $viewData->results = $this->content_model->get_records($config['per_page'], $page);
    $viewData->links = $this->pagination->create_links();
    $viewData->link = $this->link_model->get_Links();
    $this->load->view('index/index', $viewData);
  }
  function hakkimda(){
    $this->load->model('link_model');
    $Data = new stdClass();
    $Data->link = $this->link_model->get_Links();
    $this->load->view('index/hakkimda/index', $Data);
  }
  function reklam(){
    $this->load->model('link_model');
    $Data = new stdClass();
    $Data->link = $this->link_model->get_Links();
    $this->load->view('index/reklam/index', $Data);
  }
  function blog_content()
  {
    $this->load->model('content_model');
    $this->load->model('link_model');
    $this->load->library('pagination');
    $config['base_url'] = base_url("blogcontent");
    $config['total_rows'] = $this->content_model->get_count();
    $config['uri_segment'] = 2;
    $config['use_page_numbers'] = TRUE;
    $config['num_links'] = 7;
    $config['use_global_url_suffix'] = FALSE;
    $config['per_page'] = 7;
    $config['prev_link'] = '';
    $config['next_link'] = '';
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['prev_tag_open'] = '<li class="waves-effect"><a onclick="geriblog()"><i class="material-icons">chevron_left</i>';
    $config['prev_tag_close'] = '</a></li>';
    $config['next_tag_open'] = '<li class="waves-effect"><a onclick="ileriblog()"><i class="material-icons">chevron_right</i>';
    $config['next_tag_close'] = '</a></li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li class="waves-effect">';
    $config['num_tag_close'] = '</li>';

    $this->pagination->initialize($config);
    $page = ($this->uri->segment(2)) ?  ($this->uri->segment(2)*7) -7 : 0;
    $viewData = new stdClass();
    $viewData->results = $this->content_model->get_records($config['per_page'], $page);
    $viewData->links = $this->pagination->create_links();
    $viewData->link = $this->link_model->get_Links();
    $this->load->view('index/blog_content/index', $viewData);
  }
  function icerik($hhr){
    $this->load->model('content_model');
    $this->load->model('link_model');
    $deneme = $this->uri->segment(2);
    $viewData = new stdClass();
    $viewData->results = $this->content_model->get_content($deneme);
    $viewData->link = $this->link_model->get_Links();
    $this->load->view('index/icerik/index',$viewData);
  }
}
