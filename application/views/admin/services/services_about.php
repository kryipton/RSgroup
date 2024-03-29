<?php $this->load->view('admin/includes_for_whole_page/navbar'); ?>

<!--======================================Page Content========================================================================-->

<h1 class="text-center c_about"><?php echo $service_about["name_az"]?> xidməti haqqında əlavə məlumat</h1>

<form method="post" enctype="multipart/form-data" action="<?php echo base_url("about_ocean_services_update/$service_about[id]")?>">

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
        <textarea id="editor1" name="editor1">
            <?php echo $service_about["desc_az"] ?>
        </textarea>
        </div>


        <div id="ru" class="c_tab_pane tab-pane fade">
        <textarea id="editor1" name="editor2">
            <?php echo $service_about["desc_ru"] ?>
        </textarea>
        </div>


        <div id="en" class="c_tab_pane tab-pane fade">
        <textarea id="editor1" name="editor3">
            <?php echo $service_about["desc_en"] ?>
        </textarea>
        </div>
    </div>
    <!--az rus ve en dillerinin editorlarinin olduqu div-->

    <button class="c_about_submit btn btn-primary" type="submit">Yenilə</button>

</form>

<!--======================================Page Content========================================================================-->


<?php $this->load->view('admin/includes_for_whole_page/style_changer'); ?>
<?php $this->load->view('admin/includes_for_whole_page/scripts'); ?>



<!--melumat alertleri-->
<?php if($this->session->flashdata("services_alert")){ ?>
    <script>
        iziToast.warning({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("services_alert")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>

<!--text editorun islemesi ucun ozel script icinde php kodlari var js faylinda islemeyecek-->
<script>
    CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl: '<?php echo base_url("public/assets_for_admin/javascripts")?>/CKfinder/ckfinder.html',
        filebrowserUploadUrl: '<?php echo base_url("admin_about_image_upload")?>'

        // filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
        // filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

    });


    CKEDITOR.replace( 'editor2', {
        filebrowserBrowseUrl: '<?php echo base_url("public/assets_for_admin/javascripts")?>/CKfinder/ckfinder.html',
        filebrowserUploadUrl: '<?php echo base_url("admin_about_image_upload")?>'

        // filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
        // filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

    });



    CKEDITOR.replace( 'editor3', {
        filebrowserBrowseUrl: '<?php echo base_url("public/assets_for_admin/javascripts")?>/CKfinder/ckfinder.html',
        filebrowserUploadUrl: '<?php echo base_url("admin_about_image_upload")?>'

        // filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
        // filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

    });

</script>
<!--text editorun islemesi ucun ozel script icinde php kodlari var js faylinda islemeyecek-->


