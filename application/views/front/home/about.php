<div class="service-section home-3">
    <div class="container">
        <span class="title"><?php echo $this->lang->line("haqqimizda")?></span>
        <h2 class="subtitle"><?php echo $this->lang->line("bizkimik")?></h2>
        <div class="services">

            <?php


            if ($this->session->userdata("dil") == "az"){
                echo $about["desc_az"];
            }
            elseif ($this->session->userdata("dil") == "en"){
                echo $about["desc_en"];
            }
            elseif ($this->session->userdata("dil") == "ru"){
                echo $about["desc_ru"];
            }

            ?>

         </div>
    </div>
</div>