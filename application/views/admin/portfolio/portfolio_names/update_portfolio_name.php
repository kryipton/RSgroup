
<?php $this->load->view('admin/includes_for_whole_page/navbar'); ?>

<!--======================================Page Content========================================================================-->

<div class="row">

    <!--basliq-->
    <h1 class="c_about text-center bold"><?php echo $portfolio["name_az"]?> Portfoliosunun Yenilənməsi</h1>
    <!--basliq-->
    <br><br>

    <form method="post" enctype="multipart/form-data" action="<?php echo base_url("ocean_portfolio_update_new_act/$portfolio[id]")?>">

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

                <label for="">Portfolionun Azərbaycanca adı</label>
                <input value="<?php echo $portfolio["name_az"]?>" name="name_az" type="text" class="form-control">
                <br>

                <textarea id="editor1" name="editor1">
                    <?php echo $portfolio["desc_az"]?>
                </textarea>
            </div>


            <div id="ru" class="c_tab_pane tab-pane fade">

                <label for="">Portfolionun Rusca adı</label>
                <input value="<?php echo $portfolio["name_ru"]?>" name="name_ru" type="text" class="form-control">
                <br>

                <textarea id="editor1" name="editor2">
                    <?php echo $portfolio["desc_ru"]?>
                </textarea>
            </div>


            <div id="en" class="c_tab_pane tab-pane fade">

                <label for="">Portfolionun İngiliscə adı</label>
                <input value="<?php echo $portfolio["name_en"]?>" name="name_en" type="text" class="form-control">
                <br>

                <textarea id="editor1" name="editor3">
                    <?php echo $portfolio["desc_en"]?>
                </textarea>
            </div>
        </div>
        <!--az rus ve en dillerinin editorlarinin olduqu div-->

        <button class="c_portfolio_btn btn btn-primary" type="submit">Yenilə</button>

    </form>

</div>

<!--======================================Page Content========================================================================-->


<?php $this->load->view('admin/includes_for_whole_page/style_changer'); ?>
<?php $this->load->view('admin/includes_for_whole_page/scripts'); ?>


<!--melumat alertleri-->
<?php if($this->session->flashdata("portfolio_alert")){ ?>
    <script>
        iziToast.warning({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("portfolio_alert")?>',
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
