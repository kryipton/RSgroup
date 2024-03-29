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
	    $data["about"] = $this->Materic_model->get_about();
	    $data["portfolio"] = $this->Materic_model->get_portfolio_limit();
	    $data["portfolio_gallery"] = $this->Materic_model->get_portfolio_gallery_limit();
        $data["brands"] = $this->Materic_model->get_brands();
        $data["services"] = $this->Materic_model->get_services();
        $data['contact'] = $this->Materic_model->get_contact();


        $this->load->view('front/home/whole_page', $data);
	}



//    =========================Haqqimizda  hissesi=========================================
	public function about(){
        $data["services"] = $this->Materic_model->get_services();
        $data['contact'] = $this->Materic_model->get_contact();

        $data['about_text'] = $this->Materic_model->get_about();
	    $this->load->view("front/about/whole_page",$data);
    }
//    =========================Haqqimizda  hissesi=========================================


//    =========================Galereya hissesi=========================================
    public function galery()
    {
        $data["services"] = $this->Materic_model->get_services();
        $data['contact'] = $this->Materic_model->get_contact();


        $this->load->library('pagination');

        $config["base_url"]    = base_url($this->uri->segment(1) . "/galery");
        $config["total_rows"]  = $this->Materic_model->get_gallery_counts();
        $config["uri_segment"] = 3;
        $config["per_page"]    = 12;

        $config["num_links"] = 4;
        $config['full_tag_open']    = "<ul class='pagination justify-content-center'>";
        $config['full_tag_close']   = "</ul>";


        $config['first_link'] = '<i class="fas fa-chevron-circle-left"></i>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = '<i class="fas fa-chevron-circle-right"></i>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '<i class="fas fa-chevron-right"></i>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<i class="fas fa-chevron-left"></i>';

        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a href="" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['photos']   = $this->Materic_model->get_gallery($config["per_page"], $page,['status'=>1]);

        $data['links']  = $this->pagination->create_links();
        $this->load->view('front/galery/whole_page',$data);
    }
//    =========================Galereya hissesi=========================================


//    =========================Elaqe hissesi=========================================
    public function contact()

    {   $data["services"] = $this->Materic_model->get_services();

        $data['contact'] = $this->Materic_model->get_contact();
        $this->load->view('front/contact/whole_page',$data);
    }
//    =========================Elaqe hissesi=========================================


//    =========================sertifikatlar hissesi=========================================
    public function certificates()
    {
        $data["services"] = $this->Materic_model->get_services();
        $data['contact'] = $this->Materic_model->get_contact();


        $data['certificates_gallery'] = $this->Materic_model->get_certificates();
        $data['certificates_about'] = $this->Materic_model->get_certificates_about();
        $this->load->view('front/certificates/certificates',$data);
    }
//    =========================sertifikatlar hissesi=========================================



//    =========================portfolio hissesi=========================================
    public function portfolio()
    {
        $data["services"] = $this->Materic_model->get_services();
        $data['contact'] = $this->Materic_model->get_contact();
//--------------pagination start------------
        $this->load->library('pagination');

        $config["base_url"]    = base_url($this->uri->segment(1) . "/portfolio");
        $config["total_rows"]  = $this->Materic_model->get_portfolio_counts();
        $config["uri_segment"] = 3;
        $config["per_page"]    = 9;

        $config["num_links"] = 4;
        $config['full_tag_open']    = "<ul class='pagination justify-content-center'>";
        $config['full_tag_close']   = "</ul>";


        $config['first_link'] = '<i class="fas fa-chevron-circle-left"></i>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = '<i class="fas fa-chevron-circle-right"></i>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '<i class="fas fa-chevron-right"></i>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<i class="fas fa-chevron-left"></i>';

        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a href="" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['portfolio_about'] = $this->Materic_model->get_portfolio_about($config["per_page"], $page);

        $data['links']  = $this->pagination->create_links();
//--------------pagination end------------

        $data['portfolio_gallery'] = $this->Materic_model->get_portfolio($config["per_page"], $page);

        $this->load->view('front/portfolio/portfolio_list',$data);
    }


    public function portfolio_single($dil, $id)
    {


        $data["services"] = $this->Materic_model->get_services();
        $data['contact'] = $this->Materic_model->get_contact();

        $data['portfolio_gallery'] = $this->Materic_model->get_portfolio_single(array(
            "status" => 1,
            "portfolio_id" => $id,
        ));

        $data['portfolio_about'] = $this->Materic_model->get_portfolio_about_single(array(
            "id" => $id,
        ));

        $this->load->view('front/portfolio/portfolio_single',$data);
    }

//    =========================portfolio hissesi=========================================



//    =========================Servis hissesi=========================================

    public function single_service($id)
    {
        $data["services"] = $this->Materic_model->get_services();
        $data['contact'] = $this->Materic_model->get_contact();

      $data['service'] = $this->Materic_model->get_service([
          'id' => $id
      ]);
      $this->load->view('front/single_service/whole_page',$data);
    }




//    =========================Servis hissesi=========================================







}
