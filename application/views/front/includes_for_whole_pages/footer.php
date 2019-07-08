
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
                        <li><a href="#">Air Freight</a></li>
                        <li><a href="#">OCEAN Freight</a></li>
                        <li><a href="#">WAREHOUSING</a></li>
                        <li><a href="#">STORAGE</a></li>
                        <li><a href="#">ROAD Freight</a></li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <h4><?php echo $this->lang->line("elaqe"); ?></h4>
                    <div class="footer-contact">
                        <div class="contact-info">
                            <div class="icon-wrapper"><i class="flaticon-placeholder"></i></div>
                            <p>143 castle road 517 district, kiyev port south Canada</p>
                        </div>
                        <div class="contact-info">
                            <div class="icon-wrapper"><i class="flaticon-call"></i></div>
                            <p>+00 12 123 4567</p>
                        </div>
                        <div class="contact-info">
                            <div class="icon-wrapper"><i class="flaticon-email"></i></div>
                            <p>Info@yourmail.com</p>
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