<?php
class Materic_model extends CI_Model{


//    =========================About hissesi=========================================
    public function get_about()
    {
        return $this->db->get("about")->row_array();
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
}
