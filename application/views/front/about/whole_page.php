

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
            <div class="col-xl-5 col-lg-6">
                <div class="outer">
                    <div class="inner">
                        <div class="about-txt">
                            <span class="title"><?php echo $this->lang->line("haqqimizda"); ?></span>
                            <?php

                            if ($this->session->userdata("dil") == "az"){
                                echo $about_text['desc_az'];
                            }elseif ($this->session->userdata("dil") == "en"){
                                echo $about_text['desc_en'];
                            }elseif ($this->session->userdata("dil") == "ru"){
                                echo $about_text['desc_ru'];
                            }


                            ?>
<!--                            <img src="https://ichef.bbci.co.uk/news/660/cpsprodpb/2C19/production/_103598211_mediaitem103598210.jpg" alt="">-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 offset-xl-1 col-lg-6">
                <div class="about-right-bg">
                </div>
            </div>
        </div>

    </div>
</div>
<!--  about section end  -->
<!--scriptler-->
<?php $this->load->view("front/includes_for_whole_pages/scripts");  ?>
<!--scriptler-->

