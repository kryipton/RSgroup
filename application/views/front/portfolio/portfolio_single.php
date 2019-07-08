

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






<!--    blog details section start   -->
<div class="blog-details-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="blog-details">

                    <div class="your-class">

                        <?php foreach ($portfolio_gallery as $item){?>

                            <div class="c_slick_slide">
                                <img width="100%" height="100%" src="<?php echo base_url("uploads/portfolio/$item[name]")?>" alt="asd">
                            </div>

                        <?php }?>

                    </div>

                    <small class="date"><?php echo $portfolio_about["upload_date"];?></small>

                    <h2 class="blog-details-title">
                        <?php

                        if ($this->session->userdata("dil") == "az"){   echo $portfolio_about["name_ru"];
                            echo $portfolio_about["name_az"];
                        }elseif ($this->session->userdata("dil") == "en"){
                            echo $portfolio_about["name_en"];
                        }elseif ($this->session->userdata("dil") == "ru"){
                            echo $portfolio_about["name_ru"];
                        }

                        ?>
                    </h2>


                    <div class="blog-details-body">
                        <?php

                        if ($this->session->userdata("dil") == "az"){   echo $portfolio_about["name_ru"];
                            echo $portfolio_about["desc_az"];
                        }elseif ($this->session->userdata("dil") == "en"){
                            echo $portfolio_about["desc_en"];
                        }elseif ($this->session->userdata("dil") == "ru"){
                            echo $portfolio_about["desc_ru"];
                        }

                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--    blog details section end   -->




<!--  about section end  -->

<!--footer olan hisse-->
<?php $this->load->view("front/includes_for_whole_pages/footer");?>
<!--footer olan hisse-->


<!--scriptler-->
<?php $this->load->view("front/includes_for_whole_pages/scripts");  ?>
<!--scriptler-->


<script>
    $(document).ready(function(){
        $('.your-class').slick({
            dots: true
        });
    });
</script>