<?php $this->load->view('admin/includes_for_whole_page/navbar'); ?>
<?php if ($this->session->flashdata("Alert")) {?>
    <div class="alert alert-danger">
        <button class="close" data-dismiss="alert" type="button">&times;</button><?php echo $this->session->flashdata("Alert") ?>
    </div>
<?php } ?>

<!--======================================Page Content========================================================================-->

<h1 class="text-center c_about">Haqqımızda Bölməsi</h1>

<form method="post" enctype="multipart/form-data" action="<?php echo base_url("admin_about_update")?>">

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
            <?php echo $about["desc_az"] ?>
        </textarea>
        </div>


        <div id="ru" class="c_tab_pane tab-pane fade">
        <textarea id="editor1" name="editor2">
            <?php echo $about["desc_ru"] ?>
        </textarea>
        </div>


        <div id="en" class="c_tab_pane tab-pane fade">
        <textarea id="editor1" name="editor3">
            <?php echo $about["desc_en"] ?>
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
<?php if($this->session->flashdata("about_success")){ ?>
    <script>
        iziToast.success({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("about_success")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>
<?php if($this->session->flashdata("about_alert")){ ?>
    <script>
        iziToast.warning({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("about_alert")?>',
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


