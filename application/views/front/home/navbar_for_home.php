<!--navbar   -->
<div class="header-area home-3">

<!--  ustdeki melumat hissesi  -->
    <div class="info-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-infos">
                        <div class="email">
                            <div class="icon-wrapper"><i class="flaticon-call"></i></div>
                            <div><?php  echo $contact['phone']; ?></div>
                        </div>
                        <div class="phone">
                            <div class="icon-wrapper"><i class="flaticon-email"></i></div>
                            <div><?php  echo $contact['mail']; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <ul class="social-links">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
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
<!--  ustdeki melumat hissesi  -->


<!--    linkler hissesi-->
    <div class="support-nav-area">
        <div class="container">
            <div class="row">

<!--                soldaki logo hissesi-->
                <div class="col-lg-3 col-6">
                    <div class="logo-wrapper">
                        <div class="logo-wrapper-inner">
                            <a href="index.html"><img src="<?php echo base_url("public/assets_front")?>/img/logo-3.png" alt=""></a>
                        </div>
                    </div>
                </div>
<!--                soldaki logo hissesi-->

<!--                sagdaki linkler hissei-->
                <div class="col-lg-9 col-6 position-static">
                    <div class="navbar-area">
                        <div class="row">
                            <div class="col-12 position-static">
                                <nav class="main-menu" id="mainMenuHome3">
                                    <ul>

<!--                                                           ana seyfe -->
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
                                            <a href="#"><?php echo $this->lang->line("portfolio"); ?></a>
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


                                <div id="mobileMenuHome3"></div>

                            </div>
                        </div>
                    </div>
                </div>
<!--                sagdaki linkler hissei-->


            </div>
        </div>
    </div>
<!--    linkler hissesi-->


</div>
<!--navbar   -->