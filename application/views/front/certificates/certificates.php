

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



<div class="about-section about">
    <div class="container">
<!--        <div>-->
<!--            <h1 class="c_services_title text-center">--><?php //echo $this->lang->line("sertifikatlar")?><!--</h1>-->
<!--            <br><br>-->
<!--        </div>-->


        <?php

        if ($this->session->userdata("dil") == "az"){
            echo $certificates_about['desc_az'];
        }elseif ($this->session->userdata("dil") == "en"){
            echo $certificates_about['desc_en'];
        }elseif ($this->session->userdata("dil") == "ru"){
            echo $certificates_about['desc_ru'];
        }


        ?>
    </div>
</div>

<div class="gallery-section blog-grid c_padding_top_0">
    <div class="container">
        <div class="row">
            <?php foreach ($certificates_gallery as $photo) {?>
                <div class="col-lg-3 col-md-6">
                    <div class="single-pic wow fadeInRight" data-wow-duration="1.5s">
                        <img src="<?php echo base_url('uploads/certificates/'.$photo['name'])?>" alt="">
                        <div class="single-pic-overlay"></div>
                        <div class="txt-icon">
                            <div class="outer">
                                <div class="inner">
                                    <a class="icon-wrapper"
                                       href="<?php echo base_url('uploads/certificates/'.$photo['name'])?>"
                                       data-lightbox="single-pic">

                                        <i class="fas fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
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

<script>
    lightbox.option({
        'maxWidth': 1000,
        'maxHeight': 800,
    })
</script>