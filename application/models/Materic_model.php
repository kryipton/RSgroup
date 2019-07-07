<?php
class Materic_model extends CI_Model{


//    =========================About hissesi=========================================
    public function get_about()
    {
        return $this->db->get("about")->row_array();
    }


//    =========================About hissesi=========================================
    public function get_portfolio_limit()
    {
        return $this->db->limit(6)->order_by("id", "DESC")->get("portfolio")->result_array();
    }

    public function get_portfolio_gallery_limit()
    {
        return $this->db->limit(6)->order_by("portfolio_id", "DESC")->where("is_primary", 1)->get("portfolio_gallery")->result_array();
    }



//    =========================Gallery hissesi=========================================
    public function get_gallery()
    {
        return $this->db->get("gallery")->result_array();
    }



//    =========================Contact hissesi=========================================
    public function get_contact()
    {
        return $this->db->get("contact")->row_array();
    }



//    =========================Partnoyrlar hissesi=========================================
    public function get_brands()
    {
        return $this->db->get("sponsors")->result_array();
    }


//    =========================Xidmetler hissesi=========================================
    public function get_services()
    {
        return $this->db->get("services")->result_array();
    }


}
