<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra_front extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_about');
        $this->load->model('M_mitra');
		$this->load->helper('text');
    }
	public function index()
	{
		$data['mitra']=$this->M_mitra->get_all_mitra();
		$data['about']=$this->M_about->get_all_data();
		$this->load->view('template_webProfile/header');
		$this->load->view('v_mitra',$data);
		$this->load->view('template_webProfile/footer',$data);
		// var_dump($data);
	}
}
