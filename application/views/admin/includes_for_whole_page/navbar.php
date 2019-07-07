
<?php $this->load->view("admin/includes_for_whole_page/header"); ?>


<body class="page-header-fixed bg-1">


<!--    Adminin contenti-->
    <div class="modal-shiftfix">


        <!-- Navigation -->
        <div class="navbar navbar-fixed-top scroll-hide">
            <div class="container-fluid top-bar">
                <div class="pull-right">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown user hidden-xs"><a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img width="34" height="34" src="<?php echo base_url("uploads/home/admin.png")?>" />Admin<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url("ocean_secure_logout_page_act")?>">
                                        <i class="fa fa-sign-out"></i>Çıxış</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-fluid main-nav clearfix">
                <div class="nav-collapse">


<!--                    navbarin linkleri-->
                    <ul class="nav">

<!--                        Ana seyfe-->
                        <li>
                            <a
                                    <?php if ($this->uri->segment(1) == "admin_home" || $this->uri->segment(1) == "Ocean"){?>
                                        class="current"
                                    <?php }?>

                                    href="<?php echo base_url("admin_home")?>">
                                <span aria-hidden="true" class="hightop-home"></span>Ana Seyfe
                            </a>
                        </li>
<!--                        Ana seyfe-->



 <!--                        Haqqimizda-->
                        <li>
                            <a
                                    <?php if ($this->uri->segment(1) == "admin_about"){?>
                                        class="current"
                                    <?php }?>

                                    href="<?php echo base_url("admin_about")?>">
                                <span aria-hidden="true" class="fa fa-book"></span>Haqqımızda
                            </a>
                        </li>
 <!--                        Haqqimizda-->



<!--                        Galereya-->
                        <li>
                            <a

                                    <?php if ($this->uri->segment(1) == "admin_gallery"){?>
                                        class="current"
                                    <?php }?>

                                    href="<?php echo base_url("admin_gallery")?>">
                                <span aria-hidden="true" class="hightop-gallery"></span>Galereya
                            </a>
                        </li>
<!--                        Galereya-->



<!--                        Xidmetler-->
                        <li>
                            <a

                                    <?php if ($this->uri->segment(1) == "ocean_services"
                                        || $this->uri->segment(1) == "ocean_add_new_services"
                                        || $this->uri->segment(1) == "about_ocean_services"
                                        || $this->uri->segment(1) == "change_name_ocean_services"

                                    ){?>
                                        class="current"
                                    <?php }?>

                                    href="<?php echo base_url("ocean_services")?>">
                                <span aria-hidden="true" class="hightop-gear"></span>Xidmətlər
                            </a>
                        </li>
<!--                        Xidmetler-->



<!--                        Sertifikatlar-->
                        <li>
                            <a
                                    <?php if ($this->uri->segment(1) == "admin_certificates"){?>
                                        class="current"
                                    <?php }?>

                                    href="<?php echo base_url("admin_certificates")?>">
                                <span aria-hidden="true" class="hightop-star"></span>Sertifikatlar
                            </a>
                        </li>
<!--                        Sertifikatlar-->



<!--                        Partfolio-->
                        <li>
                            <a
                                    <?php if ($this->uri->segment(1) == "ocean_portfolio"
                                            || $this->uri->segment(1) == "ocean_portfolio_add_new"
                                            || $this->uri->segment(1) == "ocean_portfolio_update_new"
                                            || $this->uri->segment(1) == "portfolio_about_gallery"
                                            || $this->uri->segment(1) == "ocean_portfolio_add_gallery"
                                    ){?>
                                        class="current"
                                    <?php }?>

                                    href="<?php echo base_url("ocean_portfolio")?>">
                                <span aria-hidden="true" class="hightop-feed"></span>Portfolio
                            </a>
                        </li>
<!--                        Partfolio-->



<!--                        Elaqe-->
                        <li>
                            <a
                                    <?php if ($this->uri->segment(1) == "admin_contact"){?>
                                        class="current"
                                    <?php }?>

                                    href="<?php echo base_url("admin_contact")?>">
                                <span aria-hidden="true" class="hightop-envelope"></span>Əlaqə
                            </a>
                        </li>
<!--                        Elaqe-->


                    </ul>
<!--                    navbarin linkleri-->



                </div>
            </div>
        </div>
        <!-- End Navigation -->