
<?php $this->load->view('admin/includes_for_whole_page/navbar'); ?>


<!--======================================Page Content========================================================================-->

<!--basliq-->
<h1 class="c_about text-center bold">Galereya Bölməsi</h1>
<!--basliq-->
<br><br>


<!--dropzone-->
<form data-url = "<?php echo base_url("ocean_refresh_image_list_portfolio/$portfolio_about[id]")?>"
      action="<?php echo base_url("ocean_portfolio_add_gallery/$portfolio_about[id]")?>"
      class="dropzone c_dropzone_adds"
      id="dropzone_portfolio">

    <div class="fallback">
        <input name="file" type="file" multiple />
    </div>
</form>
<!--dropzone-->



<br><br><br>
<!--eger mulamt varsa bu div cixacaq-->
<?php if (!empty($portfolio_gallery)){?>

    <!--sekillerin tablesi-->
    <div class="col-lg-12">
        <div class="widget-container fluid-height clearfix">
            <div class="widget-content padded clearfix  c_img_list_container_portfolio_gallery">

                <?php $this->load->view('admin/portfolio/portfolio_gallery/render_page/portfolio_table_list'); ?>

            </div>
        </div>
    </div>
    <!--sekillerin tablesi-->


<!--eger mulamt yoxdusa bu div cixacaq-->
<?php }else{?>
    <div class="col-lg-12">
        <div class="widget-container fluid-height clearfix">
            <div class="widget-content padded clearfix  c_img_list_container_portfolio_gallery">
                <div class="alert alert-info text-center">Məlumat daxil edilməmişdir</div>
            </div>
        </div>
    </div>
<?php }?>
<br><br><br>


<!--======================================Page Content========================================================================-->


<?php $this->load->view('admin/includes_for_whole_page/style_changer'); ?>
<?php $this->load->view('admin/includes_for_whole_page/scripts'); ?>


