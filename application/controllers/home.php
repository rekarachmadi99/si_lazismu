<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('M_w_home');
		$this->load->model('M_about');
		$this->load->model('M_donasionline');
		$this->load->helper('text');
    }
	public function index()
	{
		$data['berita']=$this->M_w_home->get_three_berita();
		$data['mitra']=$this->M_w_home->get_three_mitra();
		$data['about']=$this->M_about->get_all_data();
		$data['rek']=$this->M_donasionline->get_all_donasi();
		$this->load->view('template_webProfile/header');
		$this->load->view('v_home',$data);
		$this->load->view('template_webProfile/footer',$data);
		// var_dump($data);
	}
}
