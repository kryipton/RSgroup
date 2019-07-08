

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




<!--  service details section start  -->
<div class="service-details-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="service-details-content">
                    <div class="service-details-desc">
                        <h2 class="title"><?php

                            if ($this->session->userdata("dil") == "az"){
                                echo $service['name_az'] ;
                            }
                            elseif ($this->session->userdata("dil") == "en"){
                                echo $service['name_en'];
                            }
                            elseif ($this->session->userdata("dil") == "ru"){
                                echo $service['name_ru'];
                            }

                            ?></h2>
                        <?php

                        if ($this->session->userdata("dil") == "az") {
                            echo $service['desc_az'];
                        } elseif ($this->session->userdata("dil") == "en") {
                            echo $service['desc_en'];
                        } elseif ($this->session->userdata("dil") == "ru") {
                            echo $service['desc_ru'];
                        }

                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>











<!--footer olan hisse-->
<?php $this->load->view("front/includes_for_whole_pages/footer");?>
<!--footer olan hisse-->


<!--scriptler-->
<?php $this->load->view("front/includes_for_whole_pages/scripts");  ?>
<!--scriptler-->
