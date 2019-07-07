<!--   partner section start    -->


    <div class="partner-section">
        <div class="container">
            <hr>
            <br><br><br><br><br><br>
            <h2 class="subtitle"><?php echo $this->lang->line("emekdaslarimiz") ?></h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="partner-carousel owl-carousel owl-theme border-bottom border-top-lg-0 border-top">

                        <?php foreach ($brands as $item){?>

                            <div class="single-partner-item">
                                <div class="outer ">
                                    <div class="inner">
                                        <img class="c_owl_item" src="<?php echo base_url("uploads/home/$item[name]")?>" alt="">
                                    </div>
                                </div>
                            </div>

                        <?php }?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br><br><br><br><br><br><br><br>


<!--   partner section end    -->