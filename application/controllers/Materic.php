<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materic extends CI_Controller {
    public function __construct()
    {


        parent::__construct();
        $dil = $this->uri->segment(1);
        if ($dil == ""){
            $dil = "az";
        }
        $this->lang->load($dil, $dil);
        $this->session->set_userdata("dil", $dil);



        $this->load->model('Materic_model');
    }

	public function index()
	{
		$this->load->view('front/home/whole_page');
	}
//    =========================Haqqimizda  hissesi=========================================
	public function about(){

        $data['about_text'] = $this->Materic_model->get_about();
	    $this->load->view("front/about/whole_page",$data);
    }

    //    =========================Galereya hissesi=========================================

    public function galery()
    {
        $data['photos'] = $this->Materic_model->get_gallery();
        $this->load->view('front/galery/whole_page',$data);
    }

    //    =========================Elaqe hissesi=========================================
    public function contact()
    {
        $data['contact'] = $this->Materic_model->get_contact();
        $this->load->view('front/contact/whole_page',$data);
    }
}
