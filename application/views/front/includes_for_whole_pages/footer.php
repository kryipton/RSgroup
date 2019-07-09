
<!--   footer section start    -->
<footer>
    <div class="container">
        <div class="top-footer">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="logo-wrapper"><img src="<?php echo base_url("public/assets_front/img/logo-3.png")?>" alt=""></div>
                    <p>Transgo shipping offers a host of logistic management services and supply chain & provide innovative solutions with the best. </p>
                </div>
                <div class="offset-xl-1 col-xl-2 col-lg-2">
                    <h4><?php echo $this->lang->line("linkler"); ?></h4>
                    <ul class="userful-links">
                        <li><a href="<?php

                            if ($this->session->userdata("dil") == "az"){
                                echo base_url('az/home');
                            }
                            elseif ($this->session->userdata("dil") == "en"){
                                echo base_url('en/home');
                            }
                            elseif ($this->session->userdata("dil") == "ru"){
                                echo base_url('ru/home');
                            }

                            ?>"><?php echo $this->lang->line("ana_sehife"); ?></a></li>

                        <li><a href="<?php

                            if ($this->session->userdata("dil") == "az"){
                                echo base_url('az/about');
                            }
                            elseif ($this->session->userdata("dil") == "en"){
                                echo base_url('en/about');
                            }
                            elseif ($this->session->userdata("dil") == "ru"){
                                echo base_url('ru/about');
                            }

                            ?>"><?php echo $this->lang->line("haqqimizda"); ?></a></li>


                        <li><a href="<?php

                            if ($this->session->userdata("dil") == "az"){
                                echo base_url('az/certificates');
                            }
                            elseif ($this->session->userdata("dil") == "en"){
                                echo base_url('en/certificates');
                            }
                            elseif ($this->session->userdata("dil") == "ru"){
                                echo base_url('ru/certificates');
                            }

                            ?>"><?php echo $this->lang->line("sertifikatlar"); ?></a></li>

                        <li><a href="contact.html"><?php echo $this->lang->line("portfolio"); ?></a></li>


                        <li><a href="<?php

                            if ($this->session->userdata("dil") == "az"){
                                echo base_url('az/galery');
                            }
                            elseif ($this->session->userdata("dil") == "en"){
                                echo base_url('en/galery');
                            }
                            elseif ($this->session->userdata("dil") == "ru"){
                                echo base_url('ru/galery');
                            }

                            ?>"><?php echo $this->lang->line("qalareya"); ?></a></li>


                        <li><a href="<?php

                            if ($this->session->userdata("dil") == "az"){
                                echo base_url('az/contact');
                            }
                            elseif ($this->session->userdata("dil") == "en"){
                                echo base_url('en/contact');
                            }
                            elseif ($this->session->userdata("dil") == "ru"){
                                echo base_url('ru/contact');
                            }

                            ?>"><?php echo $this->lang->line("elaqe"); ?></a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-lg-2">
                    <h4><?php echo $this->lang->line("servisler"); ?></h4>
                    <ul class="userful-links">
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
                </div>
                <div class="col-xl-3 col-lg-4">
                    <h4><?php echo $this->lang->line("elaqe"); ?></h4>
                    <div class="footer-contact">
                        <div class="contact-info">
                            <div class="icon-wrapper"><i class="flaticon-placeholder"></i></div>
                            <p> <?php
                                if ($this->session->userdata("dil") == "az"){
                                    echo $contact['desc_az'];
                                }
                                elseif ($this->session->userdata("dil") == "en"){
                                    echo $contact['desc_en'];
                                }
                                elseif ($this->session->userdata("dil") == "ru"){
                                    echo $contact['desc_ru'];
                                }
                                ?></p>
                        </div>
                        <div class="contact-info">
                            <div class="icon-wrapper"><i class="flaticon-call"></i></div>
                            <p> <?php  echo $contact['phone']; ?></p>
                        </div>
                        <div class="contact-info">
                            <div class="icon-wrapper"><i class="flaticon-email"></i></div>
                            <p> <?php  echo $contact['mail']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <p class="text-center"><?php echo $this->lang->line("huquqlar"); ?></p>
        </div>
    </div>
</footer>
<!--   footer section end    -->