<?php
class Ocean extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        if (!get_active_user() && $this->uri->segment(1) != "ocean_secure_login_page" && $this->uri->segment(1) != "ocean_secure_login_page_act"){
            redirect(base_url('ocean_secure_login_page'));
        }

    }






//    =========================Login hissesi=========================================

    public function index(){
        $this->load->view("admin/login/login_page");
    }

    public function ocean_login_secure_act(){
        $usr = strip_tags($this->input->post("username"));
        $psw = md5(strip_tags($this->input->post("password")));

        if (!empty($usr) && !empty($psw)){

            $where = array(
                "username" => $usr,
                "password" => $psw,
            );

            $user = $this->Ocean_Model->check_login($where);

            if($user){

                $this->session->set_flashdata("login_alert", "Daxil Oldunuz");
                $this->session->set_userdata("user", $user["id"]);
                redirect(base_url("admin_home"));

            }else{
                $this->session->set_flashdata("login_alert", "İsdifadəçi adı və ya Şifrə yanlışdır");
                redirect(base_url("ocean_secure_login_page"));
            }


        }else{
            $this->session->set_flashdata("login_alert", "Zəhmət olmasa boşluq buraxmayın");
            redirect(base_url("ocean_secure_login_page"));
        }

    }

    public function ocean_logout_secure_act(){
        $this->session->unset_userdata("user");
        redirect(base_url("ocean_secure_login_page"));
    }

//    =========================Login hissesi=========================================






//    =========================Ana seyfe=========================================

    public function dashboard()
    {
        $this->load->library("session");

        $data["all_brends"] = $this->Ocean_Model->get_all_pictures_of_home();

        $this->load->view('Admin/dashboard/whole_page', $data);
    }

    public function ocean_admin_dashboard_brend_add(){

        //      sekiller dropzonedan upload edilir
        $config['upload_path'] = 'uploads/home';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['file']['name'];

        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        $cond = $this->upload->do_upload("file");


//      upload edilecek sekil database e yuklenir
        $data  = array(
            "name"          => ($cond) ? $config['file_name'] : "default.jpg",
            "upload_date"        => date("Y/m/d"),
        );


//      eyger sekil upload oldusa succes olmadisa warning alerti versin
        if ($cond){
            $this->session->set_flashdata("success", "oldu");
        }else{
            $this->session->set_flashdata("warning", "olmadi");
        }



        $this->Ocean_Model->add_picture_to_home($data);




    }

    public function ocean_refresh_image_list_home(){
        $data["all_brends"] = $this->Ocean_Model->get_all_pictures_of_home();

        $this->load->view('Admin/dashboard/render_page/gallery_table_list', $data);
    }

    public function ocean_delete_picture_of_home($id){

        $this->Ocean_Model->delete_picture_of_home(array(
            "id" => $id,
        ));

//      eyger sekil upload oldusa succes olmadisa warning alerti versin
        if (true){
            $this->session->set_flashdata("success", "oldu");
        }else{
            $this->session->set_flashdata("warning", "olmadi");
        }

        $data["all_brends"] = $this->Ocean_Model->get_all_pictures_of_home();


        $this->load->view('Admin/dashboard/render_page/gallery_table_list', $data);


    }

    public function delete_selected_element_home(){
        $idler = $this->input->post("data");

        if ($idler){
            foreach ($idler as $a_id => $id){
                $this->Ocean_Model->delete_picture_of_home(array(
                    "id" => $id,
                ));
            }
        }

        $data["all_brends"] = $this->Ocean_Model->get_all_pictures_of_home();

        $this->load->view('Admin/dashboard/render_page/gallery_table_list', $data);

    }

//    =========================Ana seyfe=========================================



//    =========================Galereya hissesi=========================================
    public function gallery()
    {
//    galereya ucun butun sekiller cagirilir
      $data["all_pictures"] = $this->Ocean_Model->get_all_pictures_of_gallery();

//    galereya sehifesi yuklenir
      $this->load->view('Admin/gallery/whole_page', $data);

    }

    public function gallery_add(){

//      sekiller dropzonedan upload edilir
        $config['upload_path'] = 'uploads/gallery';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['file']['name'];

        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        $cond = $this->upload->do_upload("file");


//      upload edilecek sekil database e yuklenir
        $data  = array(
          "name"          => ($cond) ? $config['file_name'] : "default.jpg",
          "status"        => 1,
          "upload_date"        => date("Y/m/d"),
        );


//      eyger sekil upload oldusa succes olmadisa warning alerti versin
        if ($cond){
            $this->session->set_flashdata("success", "oldu");
        }else{
            $this->session->set_flashdata("warning", "olmadi");
        }



        $this->Ocean_Model->add_picture_to_gallery($data);
    }

    public function change_status($id){

        if($id){
            $status = ($this->input->post("data")) == "true" ? 1 : 0;

            $this->Ocean_Model->change_status(
                array(
                    "id" => $id
                ),

                array(
                    "status" => $status
                )
            );
        }


    }

    public function refresh_image_list_gallery(){

        $data["all_pictures"] = $this->Ocean_Model->get_all_pictures_of_gallery();

        $this->load->view('Admin/gallery/render_page/gallery_table_list', $data);
    }

    public function delete_picture_of_gallery($id){
         $this->Ocean_Model->delete_picture_of_gallery(array(
            "id" => $id,
        ));

//      eyger sekil upload oldusa succes olmadisa warning alerti versin
        if (true){
            $this->session->set_flashdata("success", "oldu");
        }else{
            $this->session->set_flashdata("warning", "olmadi");
        }

        $data["all_pictures"] = $this->Ocean_Model->get_all_pictures_of_gallery();



        $this->load->view('Admin/gallery/render_page/gallery_table_list', $data);


    }

    public function change_rank_gallery(){

//        javacriptin post metoduynan gelen data qebul edilir
       $data = $this->input->post("data");

//       gelen melumat stringden arraye cevrilir ve order deyisenine elave edilir
       parse_str($data, $order);

//       order arrayinin icinden ranki cixardiriq
       $items = $order["ord"];

//       cixan ranki foreache saliriq
        foreach ($items as $rank => $id) {

//            her bir melumat ayri ayri update olunur
             $this->Ocean_Model->change_rank_gallery(
                 array(
                    "id"    => $id,
                     "rank !=" => $rank,
                 ),

                 array(
                     "rank" => $rank,
                 )

                 );

        }

    }

    public function delete_selected_element_gallery(){
        $idler = $this->input->post("data");

        if ($idler){
            foreach ($idler as $a_id => $id){
                $this->Ocean_Model->delete_picture_of_gallery(array(
                    "id" => $id,
                ));
            }
        }

        $data["all_pictures"] = $this->Ocean_Model->get_all_pictures_of_gallery();

        $this->load->view('Admin/gallery/render_page/gallery_table_list', $data);

    }
//    =========================Galereya hissesi=========================================





//    =========================Haqqimizda hissesi=========================================
    public function admin_about_image_upload(){
        //      sekiller dropzonedan upload edilir
        $config['upload_path'] = 'uploads/about';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['upload']['name'];

        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        $cond = $this->upload->do_upload("upload");


//      upload edilecek sekil database e yuklenir
//        $data  = array(
//            "desc_az"        => ,
//            "desc_en"        => ,
//            "desc_ru"        => ,
//        );


//      eyger sekil upload oldusa succes olmadisa warning alerti versin
        if ($cond){
            $this->session->set_flashdata("success", "oldu");
        }else{
            $this->session->set_flashdata("warning", "olmadi");
        }



//        $this->Ocean_Model->add_picture_to_gallery($data);
    }

    public function admin_about(){

//      db dan melumatlar getirilir
        $data["about"] = $this->Ocean_Model->get_about();

//      adminin seyfesi yuklenir
        $this->load->view('admin/about/whole_page', $data);

    }

    public function admin_about_update(){

//        text editorlardan gelen melumat post metoduynan qebul olunur
        $az = $this->input->post("editor1");
        $ru = $this->input->post("editor2");
        $en = $this->input->post("editor3");


//        eger bos deyillerse databse e yukle
        if (!empty($az) && !empty($en) && !empty($ru)){
            $this->Ocean_Model->about_update(array(
                "desc_az" => $az,
                "desc_ru" => $ru,
                "desc_en" => $en,
            ));
            $this->session->set_flashdata("about_success", "Haqqımızda bölməsi yeniləndi");
            redirect(base_url("admin_about"));


//        eger bosdularsa alert ver
        }else{
            $this->session->set_flashdata("about_alert", "Zəhmət olmasa boşluq buraxmayın!");
            redirect(base_url("admin_about"));
        }



    }
//    =========================Haqqimizda hissesi=========================================





//    =========================Elaqe hissesi=========================================
    public function admin_contact_image_upload(){
        //      sekiller dropzonedan upload edilir
        $config['upload_path'] = 'uploads/contact';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['upload']['name'];

        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        $cond = $this->upload->do_upload("upload");

//      eyger sekil upload oldusa succes olmadisa warning alerti versin
        if ($cond){
            $this->session->set_flashdata("success", "oldu");
        }else{
            $this->session->set_flashdata("warning", "olmadi");
        }

//        $this->Ocean_Model->add_picture_to_gallery($data);
    }

    public function admin_contact(){

//      db dan melumatlar getirilir
        $data["contact"] = $this->Ocean_Model->get_contact();

//      adminin seyfesi yuklenir
        $this->load->view('admin/contact/whole_page', $data);

    }

    public function admin_contact_update(){

//        text editorlardan gelen melumat post metoduynan qebul olunur
        $az = $this->input->post("contact_editor1");
        $ru = $this->input->post("contact_editor2");
        $en = $this->input->post("contact_editor3");


//        eger bos deyillerse databse e yukle
        if (!empty($az) && !empty($en) && !empty($ru)){
            $this->Ocean_Model->contact_update(array(
                "desc_az" => $az,
                "desc_ru" => $ru,
                "desc_en" => $en,
            ));
            $this->session->set_flashdata("contact_success", "Əlaqə bölməsi yeniləndi");
            redirect(base_url("admin_contact"));


//        eger bosdularsa alert ver
        }else{
            $this->session->set_flashdata("contact_alert", "Zəhmət olmasa boşluq buraxmayın!");
            redirect(base_url("admin_contact"));
        }



    }
//    =========================Elaqe hissesi=========================================




//    =========================Sertifikatlar  hissesi=========================================
    public function admin_certificates(){

//      db dan melumatlar getirilir
        $data["all_pictures"] = $this->Ocean_Model->get_certificates_gallery();
        $data["certificates_about"] = $this->Ocean_Model->get_certificates_about();

//      adminin seyfesi yuklenir
        $this->load->view('admin/certificates/whole_page', $data);

    }

    public function admin_certificates_update(){
        //        text editorlardan gelen melumat post metoduynan qebul olunur
        $az = $this->input->post("certificates_editor1");
        $ru = $this->input->post("certificates_editor2");
        $en = $this->input->post("certificates_editor3");


//        eger bos deyillerse databse e yukle
        if (!empty($az) && !empty($en) && !empty($ru)){
            $this->Ocean_Model->certificates_about_update(array(
                "desc_az" => $az,
                "desc_ru" => $ru,
                "desc_en" => $en,
            ));
            $this->session->set_flashdata("certificates_success", "Sertifikatlar bölməsi yeniləndi");
            redirect(base_url("admin_certificates"));


//        eger bosdularsa alert ver
        }else{
            $this->session->set_flashdata("certificates_alert", "Zəhmət olmasa boşluq buraxmayın!");
            redirect(base_url("admin_certificates"));
        }
    }

    public function admin_certificates_add(){

//      sekiller dropzonedan upload edilir
        $config['upload_path'] = 'uploads/certificates';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['file']['name'];

        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        $cond = $this->upload->do_upload("file");


//      upload edilecek sekil database e yuklenir
        $data  = array(
            "name"          => ($cond) ? $config['file_name'] : "default.jpg",
            "status"        => 1,
            "upload_date"        => date("Y/m/d"),
        );


//      eyger sekil upload oldusa succes olmadisa warning alerti versin
        if ($cond){
            $this->session->set_flashdata("success", "oldu");
        }else{
            $this->session->set_flashdata("warning", "olmadi");
        }



        $this->Ocean_Model->add_picture_to_certificates($data);
    }

    public function refresh_image_list_certificates(){

        $data["all_pictures"] = $this->Ocean_Model->get_certificates_gallery();

        $this->load->view('Admin/certificates/render_page/certificates_table_list', $data);
    }

    public function delete_picture_of_certificates($id){
        $this->Ocean_Model->delete_picture_of_certificates(array(
            "id" => $id,
        ));

//      eyger sekil upload oldusa succes olmadisa warning alerti versin
        if (true){
            $this->session->set_flashdata("success", "oldu");
        }else{
            $this->session->set_flashdata("warning", "olmadi");
        }

        $data["all_pictures"] = $this->Ocean_Model->get_certificates_gallery();



        $this->load->view('Admin/certificates/render_page/certificates_table_list', $data);


    }

    public function change_status_certificates($id){

        if($id){
            $status = ($this->input->post("data")) == "true" ? 1 : 0;

            $this->Ocean_Model->change_status_certificates(
                array(
                    "id" => $id
                ),

                array(
                    "status" => $status
                )
            );
        }


    }

    public function delete_selected_element_certificates(){
        $idler = $this->input->post("data");

        if ($idler){
            foreach ($idler as $a_id => $id){
                $this->Ocean_Model->delete_picture_of_certificates(array(
                    "id" => $id,
                ));
            }
        }

        $data["all_pictures"] = $this->Ocean_Model->get_certificates_gallery();

        $this->load->view('Admin/certificates/render_page/certificates_table_list', $data);

    }

    public function change_rank_certificates(){

//        javacriptin post metoduynan gelen data qebul edilir
        $data = $this->input->post("data");

//       gelen melumat stringden arraye cevrilir ve order deyisenine elave edilir
        parse_str($data, $order);

//       order arrayinin icinden ranki cixardiriq
        $items = $order["ord"];

//       cixan ranki foreache saliriq
        foreach ($items as $rank => $id) {

//            her bir melumat ayri ayri update olunur
            $this->Ocean_Model->change_rank_certificates(
                array(
                    "id"    => $id,
                    "rank !=" => $rank,
                ),

                array(
                    "rank" => $rank,
                )

            );

        }

    }

//    =========================Sertifikatlar  hissesi=========================================




//    =========================Xidmetler hissesi=========================================

    public function ocean_services(){
        $data["service_names"] = $this->Ocean_Model->get_all_services();

        $this->load->view("admin/services/services_names/services_names", $data);
    }

    public function change_name_ocean_services($id){
        $data["service_name"] = $this->Ocean_Model->get_single_service(array(
            "id" => $id,
        ));

        $this->load->view("admin/services/services_names/update_service_name", $data);
    }

    public function change_name_ocean_services_act($id){

        $name_az = $this->input->post("name_az");
        $name_ru = $this->input->post("name_ru");
        $name_en = $this->input->post("name_en");

        if (!empty($name_az) && !empty($name_ru) && !empty($name_en) ){

            $data = array(
                "name_az"  => $name_az,
                "name_ru"  => $name_ru,
                "name_en"  => $name_en,
            );

            $where = array(
                "id" => $id,
            );

            $this->Ocean_Model->update_services($where, $data);
            $this->session->set_flashdata("services_success", "$id nömrəli xidmət yeniləndi");
            redirect(base_url("ocean_services"));

        }else{
            echo "bosdular";$this->session->set_flashdata("services_alert", "Zəhmət olmasa boşluq buraxmayın");
            redirect(base_url("change_name_ocean_services/$id"));
        }


    }

    public function delete_name_ocean_services($id){
        $this->Ocean_Model->delete_services(array(
            "id" => $id,
        ));
        $this->session->set_flashdata("services_success", "$id nömrəli xidmət silindi");
        redirect(base_url("ocean_services"));
    }

    public function ocean_add_new_services(){
        $this->load->view("admin/services/services_names/add_servie_name");
    }

    public function ocean_add_new_services_act(){
        $name_az = $this->input->post("name_az");
        $name_ru = $this->input->post("name_ru");
        $name_en = $this->input->post("name_en");

        if (!empty($name_az) && !empty($name_ru) && !empty($name_en) ){

            $data = array(
                "name_az"  => $name_az,
                "name_ru"  => $name_ru,
                "name_en"  => $name_en,
                "desc_az"  => "Məlumat daxil edilməyib",
                "desc_ru"  => "Данные не введены",
                "desc_en"  => "No data entered",
            );

            $this->Ocean_Model->create_services_name($data);
            $this->session->set_flashdata("services_success", "Yeni xidmət yaradıldı");
            redirect(base_url("ocean_services"));

        }else{
            echo "bosdular";$this->session->set_flashdata("services_alert", "Zəhmət olmasa boşluq buraxmayın");
            redirect(base_url("ocean_add_new_services"));
        }

    }

    public function about_ocean_services($id){
        $data["service_about"] = $this->Ocean_Model->get_single_service(array(
            "id" => $id,
        ));

        $this->load->view("admin/services/services_about", $data);
    }

    public function about_ocean_services_update($id){

        //        text editorlardan gelen melumat post metoduynan qebul olunur
        $az = $this->input->post("editor1");
        $ru = $this->input->post("editor2");
        $en = $this->input->post("editor3");


//        eger bos deyillerse databse e yukle
        if (!empty($az) && !empty($en) && !empty($ru)){
            $this->Ocean_Model->update_services(

                array(
                  "id" => $id,
                ),

                array(
                    "desc_az" => $az,
                    "desc_ru" => $ru,
                    "desc_en" => $en,
                ));

            $this->session->set_flashdata("services_success", "$id nömrəli xidmət haqqında məlumat yeniləndi");
            redirect(base_url("ocean_services"));

//        eger bosdularsa alert ver
        }else{
            $this->session->set_flashdata("services_alert", "Zəhmət olmasa boşluq buraxmayın!");
            redirect(base_url("about_ocean_services/$id"));
        }


    }

//    =========================Xidmetler hissesi=========================================





//    =========================Portfolio hissesi=========================================

    public function ocean_portfolio(){
        $data["all_portfolios"] = $this->Ocean_Model->get_all_portfolio();

        $this->load->view("admin/portfolio/portfolio_names/portfolio_names", $data);
    }

    public function ocean_portfolio_add_new(){
        $this->load->view("admin/portfolio/portfolio_names/add_portfolio_name");
    }

    public function ocean_portfolio_add_new_act(){

        $name_az = $this->input->post("name_az");
        $name_ru = $this->input->post("name_ru");
        $name_en = $this->input->post("name_en");
        $desc_az = $this->input->post("editor1");
        $desc_ru = $this->input->post("editor2");
        $desc_en = $this->input->post("editor3");

        if (!empty($name_az) && !empty($name_ru) && !empty($name_en) && !empty($desc_az)&& !empty($desc_en) && !empty($desc_ru) ){

            $data = array(
                "name_az"  => $name_az,
                "name_ru"  => $name_ru,
                "name_en"  => $name_en,
                "desc_az"  => $desc_az,
                "desc_ru"  => $desc_ru,
                "desc_en"  => $desc_en,
                "upload_date"  => date("Y/m/d"),
            );

            $this->Ocean_Model->create_portfolio_name($data);
            $this->session->set_flashdata("portfolio_success", "Yeni portfolio yaradıldı");
            redirect(base_url("ocean_portfolio"));

        }else{
            $this->session->set_flashdata("portfolio_alert", "Zəhmət olmasa boşluq buraxmayın");
            redirect(base_url("ocean_portfolio_add_new"));
        }
    }

    public function ocean_portfolio_update_new($id){
        $data["portfolio"] = $this->Ocean_Model->get_single_portfolio(array(
            "id" => $id,
        ));

        $this->load->view("admin/portfolio/portfolio_names/update_portfolio_name", $data);
    }

    public function ocean_portfolio_update_new_act($id){

        $name_az = $this->input->post("name_az");
        $name_ru = $this->input->post("name_ru");
        $name_en = $this->input->post("name_en");
        $desc_az = $this->input->post("editor1");
        $desc_ru = $this->input->post("editor2");
        $desc_en = $this->input->post("editor3");

        if (!empty($name_az) && !empty($name_ru) && !empty($name_en) && !empty($desc_az)&& !empty($desc_en) && !empty($desc_ru) ){

            $where = array(
              "id" => $id,
            );

            $data = array(
                "name_az"  => $name_az,
                "name_ru"  => $name_ru,
                "name_en"  => $name_en,
                "desc_az"  => $desc_az,
                "desc_ru"  => $desc_ru,
                "desc_en"  => $desc_en,
                "upload_date"  => date("Y/m/d"),
            );

            $this->Ocean_Model->update_portfolio($where, $data);
            $this->session->set_flashdata("portfolio_success", "$id nömrəli portfolio yeniləndi");
            redirect(base_url("ocean_portfolio"));

        }else{
            $this->session->set_flashdata("portfolio_alert", "Zəhmət olmasa boşluq buraxmayın");
            redirect(base_url("ocean_portfolio_update_new/$id"));
        }


    }

    public function ocean_delete_portfolio($id){
        $this->Ocean_Model->delete_portfolio(array(
            "id" => $id,
        ));
        $this->session->set_flashdata("portfolio_success", "$id nömrəli portfolio silindi");
        redirect(base_url("ocean_portfolio"));
    }



//    --------------------------------Portfolionun galereya haqqinda hissesi--------------------------------

    public function portfolio_about_gallery($id){
    $data["portfolio_about"] = $this->Ocean_Model->get_single_portfolio(array(
        "id" => $id,
    ));
    $data["portfolio_gallery"] = $this->Ocean_Model->get_single_portfolio_gallery(array(
        "portfolio_id" => $id,
    ));

    $this->load->view("admin/portfolio/portfolio_gallery/whole_page", $data);

}

    public function portfolio_gallery_add($id){

//      sekiller dropzonedan upload edilir
        $config['upload_path'] = 'uploads/portfolio';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['file']['name'];

        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        $cond = $this->upload->do_upload("file");


//      upload edilecek sekil database e yuklenir
        $data  = array(
            "name"          => ($cond) ? $config['file_name'] : "default.png",
            "status"        => 1,
            "upload_date"        => date("Y/m/d"),
            "portfolio_id"        => $id,
            "is_primary"        => 0,
        );


//      eyger sekil upload oldusa succes olmadisa warning alerti versin
        if ($cond){
            $this->session->set_flashdata("success", "$id nömrəli portfolio üçün şəkil əlavə edildi");
        }else{
            $this->session->set_flashdata("warning", "Xəta baş verdi");
        }



        $this->Ocean_Model->add_picture_to_portfolio($data);
    }

    public function refresh_image_list_portfolio($id){
        $data["portfolio_about"] = $this->Ocean_Model->get_single_portfolio(array(
            "id" => $id,
        ));
        $data["portfolio_gallery"] = $this->Ocean_Model->get_single_portfolio_gallery(array(
            "portfolio_id" => $id,
        ));

        $this->load->view("admin/portfolio/portfolio_gallery/render_page/portfolio_table_list", $data);

    }

    public function ocean_delete_image_portfolio($id, $image_id){

        $cond = $this->Ocean_Model->delete_picture_to_portfolio(array(
            "id" => $image_id,
        ));

        //      eyger sekil upload oldusa succes olmadisa warning alerti versin
        if (true){
            $this->session->set_flashdata("success", "oldu");
        }else{
            $this->session->set_flashdata("warning", "olmadi");
        }

        redirect(base_url("portfolio_about_gallery/$id"));

    }

    public function ocean_delete_image_portfolio_group($id_2){

        $idler = $this->input->post("data");

        if ($idler){
            foreach ($idler as $a_id => $id){
                $this->Ocean_Model->delete_picture_to_portfolio(array(
                    "id" => $id,
                ));
            }
        }

        if (true){
            $this->session->set_flashdata("success", "oldu");
        }else{
            $this->session->set_flashdata("warning", "olmadi");
        }

        $data["portfolio_about"] = $this->Ocean_Model->get_single_portfolio(array(
            "id" => $id_2,
        ));
        $data["portfolio_gallery"] = $this->Ocean_Model->get_single_portfolio_gallery(array(
            "portfolio_id" => $id_2,
        ));

        $this->load->view("admin/portfolio/portfolio_gallery/render_page/portfolio_table_list", $data);


    }

    public function ocean_change_status_image_portfolio($id){

        if($id){
            $status = ($this->input->post("data")) == "true" ? 1 : 0;

            $this->Ocean_Model->ocean_portfolio_change_status(
                array(
                    "id" => $id
                ),

                array(
                    "status" => $status
                )
            );
        }


    }

    public function ocean_change_primary_image_portfolio($id, $portfolio_id){

        if($id && $portfolio_id){
            $status = ($this->input->post("data")) == "true" ? 1 : 0;

            $this->Ocean_Model->ocean_portfolio_change_status(
                array(
                    "id" => $id,
                    "portfolio_id" => $portfolio_id,
                ),

                array(
                    "is_primary" => $status
                )
            );


            $this->Ocean_Model->ocean_portfolio_change_status(
                array(
                    "id !="         => $id,
                    "portfolio_id"  => $portfolio_id,
                ),

                array(
                    "is_primary" => 0
                )
            );


            $data["portfolio_about"] = $this->Ocean_Model->get_single_portfolio(array(
                "id" => $portfolio_id,
            ));
            $data["portfolio_gallery"] = $this->Ocean_Model->get_single_portfolio_gallery(array(
                "portfolio_id" => $portfolio_id,
            ));

            $this->load->view("admin/portfolio/portfolio_gallery/render_page/portfolio_table_list", $data);



        }

    }

//    --------------------------------Portfolionun galereya haqqinda hissesi--------------------------------


//    =========================Portfolio hissesi=========================================





}