<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->data['website'] = "Survey";
    $this->load->model('m_survey');
  }

  function index()
  {
    $data          = $this->data;
    $data['title'] = "Dashboard";
    $data['menu']  = "dashboard";
    $this->load->view('Main/v_header',$data);
    $this->load->view('Main/dashboard/index',$data);
    $this->load->view('Main/v_footer',$data);
  }

  function getlampuajax(){
    	$id    = $this->input->get_post('IDPel');
      $where = array(
        'IDPel' => $id,
      );
      $survey = $this->m_survey->detail($where,'Lampu')->result();
      echo json_encode($survey);
  }


  function survey($type=null,$id=null)
  {
    $data          = $this->data;
    $data['title'] = "Survey";
    $data['menu']  = "survey";
    if ($type == 'detail'  && $id!=null) {
      $where = array(
  			'IDPel' => $id,
  		);
      $data['survey'] = $this->m_survey->detail($where,'Survey')->row();
      $this->load->view('Main/v_header',$data);
      $this->load->view('Main/survey/detail',$data);
      $this->load->view('Main/v_footer',$data);
    }else{
      $data['survey'] = $this->m_survey->tampil_data('Survey')->result();
      $this->load->view('Main/v_header',$data);
      $this->load->view('Main/survey/index',$data);
      $this->load->view('Main/v_footer',$data);
    }

  }

}
