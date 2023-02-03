<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentangkami extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_about');
    }

	public function index()
	{
        $data['vm']=$this->M_about->get_all_data_vimi();
        $data['about']=$this->M_about->get_all_data();  
        $this->load->view('template_webProfile/header');
        $this->load->view('v_tentangkami',$data);
        $this->load->view('template_webProfile/footer',$data);
	}
}
