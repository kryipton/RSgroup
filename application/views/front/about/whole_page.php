

<!--yuklenme animasiyasi-->
<?php $this->load->view("front/includes_for_whole_pages/load_animation");?>
<!--yuklenme animasiyasi-->


<!--header-->
<?php $this->load->view("front/includes_for_whole_pages/header");?>
<!--header-->


<!--navbar-->
<?php $this->load->view("front/includes_for_whole_pages/navbar");?>
<!--navbar-->


<!--axtaris hissesi -->
<?php $this->load->view("front/includes_for_whole_pages/search");?>
<!--axtaris hissesi -->

<!--  about section start  -->
<div class="about-section about">
    <div class="container">
        <div class="row">

            <?php

            if ($this->session->userdata("dil") == "az"){
                echo $about_text['desc_az'];
            }elseif ($this->session->userdata("dil") == "en"){
                echo $about_text['desc_en'];
            }elseif ($this->session->userdata("dil") == "ru"){
                echo $about_text['desc_ru'];
            }


            ?>



        </div>

    </div>
</div>
<!--  about section end  -->


<!--footer olan hisse-->
<?php $this->load->view("front/includes_for_whole_pages/footer");?>
<!--footer olan hisse-->


<!--scriptler-->
<?php $this->load->view("front/includes_for_whole_pages/scripts");  ?>
<!--scriptler-->
