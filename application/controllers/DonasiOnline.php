<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DonasiOnline extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('M_about');
		$this->load->model('M_donasionline');
    }
	public function index()
	{
		$data['about']=$this->M_about->get_all_data();
		$data['rek']=$this->M_donasionline->get_all_donasi();
		$this->load->view('template_webProfile/header');
		$this->load->view('v_donasionline',$data);
		$this->load->view('template_webProfile/footer',$data);
		// var_dump($data);
	}

	public function getdonasi(){
		$id_rekening=$this->uri->segment(3);
		$data['about']=$this->M_about->get_all_data();
		$data['rek']=$this->M_donasionline->get_donasi($id_rekening);
		$this->load->view('template_webProfile/header');
		$this->load->view('v_getdonasi',$data);
		$this->load->view('template_webProfile/footer',$data);
	}

}
