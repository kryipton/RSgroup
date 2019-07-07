
<?php $this->load->view('admin/includes_for_whole_page/navbar'); ?>

<!--======================================Page Content========================================================================-->


<!--basliq-->
<h1 class="c_about text-center bold">Sertifikatlar Bölməsi</h1>
<!--basliq-->
<br><br>



<!--sertifikatlarin aboutu ve galereyasinin  tablarinin linki-->
<ul class="c_nav_certificates nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#c_gallery">Sertifikatların galereyası</a></li>
    <li><a data-toggle="pill" href="#c_about">Sertifikatlar Haqqında</a></li>
</ul>
<!--sertifikatlarin aboutu ve galereyasinin  tablarinin linki-->




<!--sertifikatlarin aboutu ve galereyasinin dinamik formada tablara yerlesdirilmesi-->
<div class="tab-content">
    <div id="c_gallery" class="c_tab_pane tab-pane fade in active">

        <!--dropzone-->
        <form data-url = "<?php echo base_url("refresh_image_list_certificates")?>"
              action="<?php echo base_url("admin_certificates_add")?>"
              class="dropzone c_dropzone_adds"
              id="dropzone_certificates">

            <div class="fallback">
                <input name="file" type="file" multiple />
            </div>
        </form>
        <!--dropzone-->



        <br><br><br>
        <!--eger melumat varsa bu div cixacaq-->
        <?php if (!empty($all_pictures)){?>

            <!--sekillerin tablesi-->
            <div class="col-lg-12">
                <div class="widget-container fluid-height clearfix">
                    <div class="widget-content padded clearfix  c_img_list_container_certificates">

                        <?php $this->load->view('admin/certificates/render_page/certificates_table_list'); ?>

                    </div>
                </div>
            </div>
            <!--sekillerin tablesi-->


            <!--eger mulamt yoxdusa bu div cixacaq-->
        <?php }else{?>
            <div class="col-lg-12">
                <div class="widget-container fluid-height clearfix">
                    <div class="widget-content padded clearfix  c_img_list_container_certificates">
                        <div class="alert alert-info text-center">Məlumat daxil edilməmişdir</div>
                    </div>
                </div>
            </div>
        <?php }?>
        <br><br><br>
    </div>


    <div id="c_about" class=" tab-pane fade">
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url("admin_certificates_update")?>">

            <!--az rus ve en dillerinin navbar linki-->
            <ul class="c_nav_pills nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#az">AZ</a></li>
                <li><a data-toggle="pill" href="#ru">RU</a></li>
                <li><a data-toggle="pill" href="#en">EN</a></li>
            </ul>
            <!--az rus ve en dillerinin navbar linki-->



            <!--az rus ve en dillerinin editorlarinin olduqu div-->
            <div class="tab-content">
                <div id="az" class="c_tab_pane tab-pane fade in active">
        <textarea id="editor1" name="certificates_editor1">
            <?php echo $certificates_about["desc_az"] ?>
        </textarea>
                </div>


                <div id="ru" class="c_tab_pane tab-pane fade">
        <textarea id="editor1" name="certificates_editor2">
            <?php echo $certificates_about["desc_ru"] ?>
        </textarea>
                </div>


                <div id="en" class="c_tab_pane tab-pane fade">
        <textarea id="editor1" name="certificates_editor3">
            <?php echo $certificates_about["desc_en"] ?>
        </textarea>
                </div>
            </div>
            <!--az rus ve en dillerinin editorlarinin olduqu div-->

            <button class="c_about_submit btn btn-primary" type="submit">Yenilə</button>

        </form>
    </div>

</div>
<!--sertifikatlarin aboutu ve galereyasinin dinamik formada tablara yerlesdirilmesi-->












<!--======================================Page Content========================================================================-->


<?php $this->load->view('admin/includes_for_whole_page/style_changer'); ?>
<?php $this->load->view('admin/includes_for_whole_page/scripts'); ?>



<!--melumat alertleri-->
<?php if($this->session->flashdata("certificates_success")){ ?>
    <script>
        iziToast.success({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("certificates_success")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>
<?php if($this->session->flashdata("certificates_alert")){ ?>
    <script>
        iziToast.warning({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("certificates_alert")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>

<!--text editorun islemesi ucun ozel script icinde php kodlari var js faylinda islemeyecek-->
<script>
    CKEDITOR.replace( 'certificates_editor1', {
        filebrowserBrowseUrl: '<?php echo base_url("public/assets_for_admin/javascripts")?>/CKfinder/ckfinder.html',
        filebrowserUploadUrl: '<?php echo base_url("admin_certificates_image_upload")?>'

        // filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
        // filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

    });


    CKEDITOR.replace( 'certificates_editor2', {
        filebrowserBrowseUrl: '<?php echo base_url("public/assets_for_admin/javascripts")?>/CKfinder/ckfinder.html',
        filebrowserUploadUrl: '<?php echo base_url("admin_certificates_image_upload")?>'

        // filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
        // filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

    });



    CKEDITOR.replace( 'certificates_editor3', {
        filebrowserBrowseUrl: '<?php echo base_url("public/assets_for_admin/javascripts")?>/CKfinder/ckfinder.html',
        filebrowserUploadUrl: '<?php echo base_url("admin_certificates_image_upload")?>'

        // filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
        // filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

    });

</script>
<!--text editorun islemesi ucun ozel script icinde php kodlari var js faylinda islemeyecek-->

