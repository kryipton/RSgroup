
<?php $this->load->view('admin/includes_for_whole_page/navbar'); ?>

<!--======================================Page Content========================================================================-->

<!--basliq-->
<h1 class="c_about text-center bold">Əməkdaşlıq Etdiyimiz Şirkətlər Bölməsi</h1>
<!--basliq-->
<br><br>


<!--dropzone-->
<form data-url = "<?php echo base_url("ocean_refresh_image_list_home")?>"
      action="<?php echo base_url("ocean_admin_dashboard_brend_add")?>"
      class="dropzone c_dropzone_adds"
      id="dropzone_home">

    <div class="fallback">
        <input name="file" type="file" multiple />
    </div>
</form>
<!--dropzone-->



<br><br><br>
<!--eger mulamt varsa bu div cixacaq-->
<?php if (!empty($all_brends)){?>

    <!--sekillerin tablesi-->
    <div class="col-lg-12">
        <div class="widget-container fluid-height clearfix">
            <div class="widget-content padded clearfix  c_img_list_container_home">

                <?php $this->load->view('admin/dashboard/render_page/gallery_table_list'); ?>

            </div>
        </div>
    </div>
    <!--sekillerin tablesi-->


<!--eger mulamt yoxdusa bu div cixacaq-->
<?php }else{?>
    <div class="col-lg-12">
        <div class="widget-container fluid-height clearfix">
            <div class="widget-content padded clearfix  c_img_list_container_home">
                <div class="alert alert-info text-center">Məlumat daxil edilməmişdir</div>
            </div>
        </div>
    </div>
<?php }?>
<br><br><br>


<!--======================================Page Content========================================================================-->


<?php $this->load->view('admin/includes_for_whole_page/style_changer'); ?>
<?php $this->load->view('admin/includes_for_whole_page/scripts'); ?>

<?php if($this->session->flashdata("login_alert")){ ?>
    <script>
        iziToast.success({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("login_alert")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>

