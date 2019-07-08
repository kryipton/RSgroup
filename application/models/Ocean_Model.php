<?php
class Ocean_Model extends CI_Model {

//    =========================login=========================================

    public function check_login($where){
        return $this->db->where($where)->get("users")->row_array();
    }

//    =========================login=========================================


//    =========================Ana seyfe=========================================

    public function add_picture_to_home($data){
        $this->db->insert("sponsors", $data);
    }

    public function get_all_pictures_of_home(){
        return $this->db->order_by("id", "DESC")->get("sponsors")->result_array();
    }

    public function delete_picture_of_home($where){
        $this->db->where($where)->delete("sponsors");
    }

//    =========================Ana seyfe=========================================



//    =========================Galereya hissesi=========================================

    public function add_picture_to_gallery($data){
        $this->db->insert("gallery", $data);
    }

    public function get_all_pictures_of_gallery(){
        return $this->db->order_by("rank", "ASC")->get("gallery")->result_array();
    }

    public function change_status($where ,$data){
        $this->db->where($where)->update("gallery", $data);
    }

    public function delete_picture_of_gallery($where){
        $this->db->where($where)->delete("gallery");
    }

    public function change_rank_gallery($where, $data){
        $this->db->where($where)->update("gallery", $data);
    }

//    =========================Galereya hissesi=========================================




//    =========================About hissesi=========================================

    public function get_about(){
        return $this->db->get("about")->row_array();
    }

    public function about_update($data = array()){
        $this->db->update("about", $data);
    }
//    =========================About hissesi=========================================




//    =========================Contact hissesi=========================================

    public function get_contact(){
        return $this->db->get("contact")->row_array();
    }

    public function contact_update($data = array()){
        $this->db->update("contact", $data);
    }
//    =========================Contact hissesi=========================================




//    =========================sertifikatlar hissesi=========================================

    public function get_certificates_about(){
        return $this->db->get("certificates_about")->row_array();
    }

    public function get_certificates_gallery(){
        return $this->db->order_by("rank", "ASC")->get("certificates")->result_array();
    }

    public function certificates_about_update($data){
        $this->db->update("certificates_about", $data);
    }

    public function add_picture_to_certificates($data){
        $this->db->insert("certificates", $data);
    }

    public function delete_picture_of_certificates($where){
        $this->db->where($where)->delete("certificates");
    }

    public function change_status_certificates($where ,$data){
        $this->db->where($where)->update("certificates", $data);
    }

    public function change_rank_certificates($where, $data){
        $this->db->where($where)->update("certificates", $data);
    }

//    =========================sertifikatlar hissesi=========================================



//    =========================Xidmetler hissesi=========================================

    public function get_all_services(){
        return $this->db->order_by("id", "DESC")->get("services")->result_array();
    }

    public function get_single_service($where){
        return $this->db->where($where)->get("services")->row_array();
    }

    public function create_services_name($data){
        $this->db->insert("services", $data);
    }

    public function update_services($where, $data){
        $this->db->where($where)->update("services", $data);
    }

    public function delete_services($where){
        $this->db->where($where)->delete("services");
    }

//    =========================Xidmetler hissesi=========================================





//    =========================Portfolio hissesi=========================================

    public function get_all_portfolio(){
        return $this->db->order_by("id", "DESC")->get("portfolio")->result_array();
    }

    public function get_single_portfolio($where){
        return $this->db->where($where)->get("portfolio")->row_array();
    }

    public function create_portfolio_name($data){
        $this->db->insert("portfolio", $data);
    }

    public function update_portfolio($where, $data){
        $this->db->where($where)->update("portfolio", $data);
    }

    public function delete_portfolio($where){
        $this->db->where($where)->delete("portfolio");
    }

    public function delete_portfolio_gallery_portfolio_id($where){
        $this->db->where($where)->delete("portfolio_gallery");
    }


//    ----------------------------portfolio galereya hissesi---------------------------------
    public function get_single_portfolio_gallery($where){
        return $this->db->where($where)->get("portfolio_gallery")->result_array();
    }

    public function add_picture_to_portfolio($data){
        $this->db->insert("portfolio_gallery", $data);
    }

    public function delete_picture_to_portfolio($where){
        $this->db->where($where)->delete("portfolio_gallery");
    }

    public function ocean_portfolio_change_status($where, $data){
        $this->db->where($where)->update("portfolio_gallery", $data);
    }
//    ----------------------------portfolio galereya hissesi---------------------------------


//    =========================Portfolio hissesi=========================================


}