<!--   header area start   -->
<div class="header-area">

<!--  ustdeki balaca navbar (melumat navbari)-->
    <div class="info-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-8">
                    <ul class="social-links">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-8 col-4">
                    <div class="right-content">
                        <span class="working-time">Support@mail.com</span>
                        <div class="language">
                            <a href="#" class="dropdown-btn"><?php echo  $this->lang->line("dil");?><i class="flaticon-down-arrow"></i></a>
                            <ul class="language-dropdown">
                                <li>
                                    <a href="<?php

                                    $segment2 = $this->uri->segment(2);
                                    $segment3 = $this->uri->segment(3);
                                    $segment4 = $this->uri->segment(4);

                                    if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                        echo base_url("az/" . $segment2   . "/" .  $segment3  . "/" . $segment4);
                                    }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                        echo base_url("az/" . $segment2   . "/" .  $segment3);
                                    }elseif(!empty($this->uri->segment(2))){
                                        echo base_url("az/" . $segment2);
                                    }else{
                                        echo base_url("az/home");
                                    }

                                    ?>">Az</a>
                                </li>
                                <li>
                                    <a href="<?php

                                    if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                        echo base_url("en/" . $segment2   . "/" .  $segment3   . "/" . $segment4);
                                    }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                        echo base_url("en/" . $segment2   . "/" .  $segment3);
                                    }elseif(!empty($this->uri->segment(2))){
                                        echo base_url("en/" . $segment2);
                                    }else{
                                        echo base_url("en/home");
                                    }

                                    ?>">En</a>
                                </li>
                                <li>
                                    <a href="<?php

                                    if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                        echo base_url("ru/" . $segment2   . "/" .  $segment3   . "/" . $segment4);
                                    }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                        echo base_url("ru/" . $segment2   . "/" .  $segment3);
                                    }elseif(!empty($this->uri->segment(2))){
                                        echo base_url("ru/" . $segment2);
                                    }else{
                                        echo base_url("ru/home");
                                    }

                                    ?>">Ru</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--  ustdeki balaca navbar (melumat navbari)-->



<!--    esas navbar-->
    <div class="support-nav-area">
        <div class="container">
            <div class="row">

<!--                sol teref (logo olan hisse)-->
                <div class="col-lg-3 col-6 ">
                    <div class="logo-wrapper c_logo_div">
                        <div class="logo-wrapper-inner">
                            <a href="index.html"><img src="<?php echo base_url("public/assets_front")?>/img/logo.png" alt=""></a>
                        </div>
                    </div>
                </div>
<!--                sol teref (logo olan hisse)-->


<!--                sag teref-->
                <div class="col-lg-9 col-6 position-lg-relative position-static">

<!--                   elaqe ve mail hissesi-->
                    <div class="support-bar">
                        <div class="row">
                            <div class="offset-xl-4 col-xl-8 offset-2 col-10">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="support-info">
                                            <div class="left-content"><i class="flaticon-call"></i></div>
                                            <div class="right-content">
                                                <div class="right-content-inner">
                                                    <h5>Free Call</h5>
                                                    <p>+ 00 12 123 456</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="support-info">
                                            <div class="left-content"><i class="flaticon-email"></i></div>
                                            <div class="right-content">
                                                <h5>Mail us</h5>
                                                <p>Support@mail.com </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                   elaqe ve mail hissesi-->


<!--                    linkler olan hisse -->
                    <div class="navbar-area">
                        <div class="row">


<!--                           esas navbar olan hisse-->
                            <div class="col-lg-12 d-lg-block d-none">
                                <nav class="main-menu" id="mainMenu">
                                    <ul>
                                        <!--                                        ana seyfe -->
                                        <li >
                                            <a href="<?php

                                            if ($this->session->userdata("dil") == "az"){
                                                echo base_url('az/home');
                                            }
                                            elseif ($this->session->userdata("dil") == "en"){
                                                echo base_url('en/home');
                                            }
                                            elseif ($this->session->userdata("dil") == "ru"){
                                                echo base_url('ru/home');
                                            }

                                            ?>"><?php echo $this->lang->line("ana_sehife"); ?></a>
                                        </li>
                                        <!--                                        ana seyfe -->

                                        <!--                                        haqqimizda-->
                                        <li>
                                            <a href="<?php

                                            if ($this->session->userdata("dil") == "az"){
                                                echo base_url('az/about');
                                            }
                                            elseif ($this->session->userdata("dil") == "en"){
                                                echo base_url('en/about');
                                            }
                                            elseif ($this->session->userdata("dil") == "ru"){
                                                echo base_url('ru/about');
                                            }

                                            ?>"><?php echo $this->lang->line("haqqimizda"); ?></a>
                                        </li>
                                        <!--                                        haqqimizda-->


                                        <!--                                        xidmetler-->
                                        <li class="dropdown">
                                            <a href="#"><?php echo $this->lang->line("servisler"); ?></a>
                                            <ul>
                                                <?php foreach ($services as $service) { ?>
                                                    <li><a href="<?php

                                                        if ($this->session->userdata("dil") == "az"){
                                                            echo base_url('az/service/'.$service['id']);
                                                        }
                                                        elseif ($this->session->userdata("dil") == "en"){
                                                            echo base_url('en/service/'.$service['id']);
                                                        }
                                                        elseif ($this->session->userdata("dil") == "ru"){
                                                            echo base_url('ru/service/'.$service['id']);
                                                        }

                                                        ?>">

                                                            <?php

                                                            if ($this->session->userdata("dil") == "az"){
                                                                echo $service["name_az"];
                                                            }
                                                            elseif ($this->session->userdata("dil") == "en"){
                                                                echo $service["name_en"];
                                                            }
                                                            elseif ($this->session->userdata("dil") == "ru"){
                                                                echo $service["name_ru"];
                                                            }


                                                            ?></a></li>
                                                <?php }?>
                                            </ul>
                                        </li>
                                        <!--                                        xidmetler-->


                                        <!--                                        sertifikatlar-->
                                        <li>
                                            <a href="<?php

                                            if ($this->session->userdata("dil") == "az"){
                                                echo base_url('az/certificates');
                                            }
                                            elseif ($this->session->userdata("dil") == "en"){
                                                echo base_url('en/certificates');
                                            }
                                            elseif ($this->session->userdata("dil") == "ru"){
                                                echo base_url('ru/certificates');
                                            }

                                            ?>"><?php echo $this->lang->line("sertifikatlar"); ?></a>
                                        </li>
                                        <!--                                        sertifikatlar-->


                                        <!--                                        portfolio-->
                                        <li >
                                            <a href="<?php

                                            if ($this->session->userdata("dil") == "az"){
                                                echo base_url('az/portfolio');
                                            }
                                            elseif ($this->session->userdata("dil") == "en"){
                                                echo base_url('en/portfolio');
                                            }
                                            elseif ($this->session->userdata("dil") == "ru"){
                                                echo base_url('ru/portfolio');
                                            }

                                            ?>"><?php echo $this->lang->line("portfolio"); ?></a>
                                        </li>
                                        <!--                                        portfolio-->


                                        <!--                                        galereya-->
                                        <li>
                                            <a href="<?php

                                            if ($this->session->userdata("dil") == "az"){
                                                echo base_url('az/galery');
                                            }
                                            elseif ($this->session->userdata("dil") == "en"){
                                                echo base_url('en/galery');
                                            }
                                            elseif ($this->session->userdata("dil") == "ru"){
                                                echo base_url('ru/galery');
                                            }

                                            ?>"><?php echo $this->lang->line("qalareya"); ?></a>
                                        </li>
                                        <!--                                        galereya-->


                                        <!--                                        kontakt-->
                                        <li>
                                            <a href="<?php

                                            if ($this->session->userdata("dil") == "az"){
                                                echo base_url('az/contact');
                                            }
                                            elseif ($this->session->userdata("dil") == "en"){
                                                echo base_url('en/contact');
                                            }
                                            elseif ($this->session->userdata("dil") == "ru"){
                                                echo base_url('ru/contact');
                                            }

                                            ?>"><?php echo $this->lang->line("elaqe"); ?></a>
                                        </li>
                                        <!--                                        kontakt-->

                                    </ul>
                                </nav>
                            </div>
<!--                           esas navbar olan hisse-->



<!--                            mobile navbar olan hisse-->
                            <div class="col-lg-3 col-12 position-lg-relative position-static">
                                <div id="mobileMenu"></div>
                            </div>
<!--                            mobile navbar olan hisse-->



                        </div>
                    </div>
<!--                    linkler olan hisse -->



                </div>
<!--                sag teref-->


            </div>
        </div>
    </div>
<!--    esas navbar-->


</div>
<!--   header area end   -->