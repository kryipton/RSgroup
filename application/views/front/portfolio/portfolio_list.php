

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

<br><br>



                <!--    blog lists start   -->
                <div class="news-section blog-grid">
                    <div class="container">
                        <div class="row">
                            <?php for ($x = 0; $x < count($portfolio_about); $x++){?>
                                <div class="col-lg-4 col-md-6">
                                     <div class="single-news wow fadeInRight" data-wow-duration="1.5s">

                                        <?php $array  = $portfolio_gallery[$x]["name"] ?>
                                        <?php $array2 = $portfolio_about[$x]["id"] ?>

                                         <img src="<?php echo base_url("uploads/portfolio/$array")?>" alt="">

                                        <div class="news-txt">
                                            <span class="date"><?php echo $portfolio_about[$x]["upload_date"] ?></span>
                                            <a href="<?php

                                            if ($this->session->userdata("dil") == "az"){
                                                echo base_url("az/portfolio_single/$array2");
                                            }
                                            elseif ($this->session->userdata("dil") == "en"){
                                                echo base_url("en/portfolio_single/$array2");
                                            }
                                            elseif ($this->session->userdata("dil") == "ru"){
                                                echo base_url("ru/portfolio_single/$array2");
                                            }



                                            ?>" class="title">
                                                <h3><?php

                                                    if ($this->session->userdata("dil") == "az"){                                                        echo $portfolio_about[$x]["name_ru"];
                                                        echo $portfolio_about[$x]["name_az"];
                                                    }elseif ($this->session->userdata("dil") == "en"){
                                                        echo $portfolio_about[$x]["name_en"];
                                                    }elseif ($this->session->userdata("dil") == "ru"){
                                                        echo $portfolio_about[$x]["name_ru"];
                                                    }

                                                    ?></h3>
                                            </a>
                                            <a class="readmore" href="<?php

                                            if ($this->session->userdata("dil") == "az"){
                                                echo base_url("az/portfolio_single/$array2");
                                            }
                                            elseif ($this->session->userdata("dil") == "en"){
                                                echo base_url("en/portfolio_single/$array2");
                                            }
                                            elseif ($this->session->userdata("dil") == "ru"){
                                                echo base_url("ru/portfolio_single/$array2");
                                            }



                                            ?>">
                                                <?php echo $this->lang->line("etrafli");?>
                                            </a>
                                        </div>
                                     </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <nav class="pagination-nav">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!--    blog lists end   -->




<!--  about section end  -->

<!--footer olan hisse-->
<?php $this->load->view("front/includes_for_whole_pages/footer");?>
<!--footer olan hisse-->


<!--scriptler-->
<?php $this->load->view("front/includes_for_whole_pages/scripts");  ?>
<!--scriptler-->

