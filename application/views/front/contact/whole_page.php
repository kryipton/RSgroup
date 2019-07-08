

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
<style>
    .map-container{
        overflow:hidden;
        padding-bottom:56.25%;
        position:relative;
        height:0;
    }
    .map-container iframe{
        left:0;
        top:0;
        height:100%;
        width:100%;
        position:absolute;
    }
</style>



<!--   contact section start    -->
<div class="contact-section">
    <div class="container">
        <!--  contact infos start  -->
        <div class="contact-infos">
            <div class="row no-gutters">
                <div class="col-lg-4 single-info-col">
                    <div class="single-info wow fadeInRight" data-wow-duration="1s">
                        <div class="icon-wrapper"><i class="fas fa-home"></i></div>
                        <div class="info-txt">
                            <?php
                            if ($this->session->userdata("dil") == "az"){
                                echo $contact['desc_az'];
                            }
                            elseif ($this->session->userdata("dil") == "en"){
                                echo $contact['desc_en'];
                            }
                            elseif ($this->session->userdata("dil") == "ru"){
                                echo $contact['desc_ru'];
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 single-info-col">
                    <div class="single-info wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="icon-wrapper"><i class="fas fa-phone"></i></div>
                        <div class="info-txt">
                            <?php  echo $contact['phone']; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 single-info-col">
                    <div class="single-info wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="icon-wrapper"><i class="far fa-envelope"></i></div>
                        <div class="info-txt">
                            <?php  echo $contact['mail']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  contact infos end  -->
    </div>
</div>

    <!--Google map-->
    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1519.6696934478366!2d49.845962389535345!3d40.37917012508677!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307da7a06b402f%3A0xd8897cf79ec36111!2s28+MALL!5e0!3m2!1saz!2s!4v1561924823535!5m2!1saz!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <!--Google Maps-->





<!--footer olan hisse-->
<?php $this->load->view("front/includes_for_whole_pages/footer");?>
<!--footer olan hisse-->



<!--scriptler-->
<?php $this->load->view("front/includes_for_whole_pages/scripts");  ?>
<!--scriptler-->