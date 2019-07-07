<!-- [prtfolio section start  -->
<div class="service-section home-2 c_portfolio_section">

    <div class="container">
        <hr>
        <br><br><br><br><br><br>
        <h2 class="subtitle"><?php echo $this->lang->line("portfolio")?></h2>
        <div class="service-carousel owl-carousel owl-theme">

            <?php for ($x = 0; $x < count($portfolio); $x++) { ?>
                <div class="single-service">
                    <div class="img-wrapper">

                        <?php $gallery = $portfolio_gallery[$x]["name"]?>

                        <img src="<?php echo base_url("uploads/portfolio/$gallery")?>" alt="">
                    </div>
                    <div class="service-txt">
                        <h4 class="service-title">
                            <?php

                            if ($this->session->userdata("dil") == "az"){
                                echo $portfolio[$x]["name_az"];
                            }
                            elseif ($this->session->userdata("dil") == "en"){
                                echo $portfolio[$x]["name_en"];
                            }
                            elseif ($this->session->userdata("dil") == "ru"){
                                echo $portfolio[$x]["name_ru"];
                            }


                            ?>
                        </h4>
                        <p class="service-para">
                            <?php

                            if ($this->session->userdata("dil") == "az"){
                                echo substr($portfolio[$x]["desc_az"],0,100)  . "...<br>" ;
                            }
                            elseif ($this->session->userdata("dil") == "en"){
                                echo substr($portfolio[$x]["desc_en"],0,100)  . "...<br>" ;
                            }
                            elseif ($this->session->userdata("dil") == "ru"){
                                echo substr($portfolio[$x]["desc_ru"],0,100)  . "...<br>" ;
                            }


                            ?>
                        </p>
                        <a href="service-details.html" class="readmore"><?php echo $this->lang->line("etrafli")?></a>
                    </div>
                </div>
            <?php } ?>


        </div>
    </div>
</div>
<!-- [prtfolio section end  -->