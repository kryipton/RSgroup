
<?php $this->load->view('admin/includes_for_whole_page/navbar'); ?>

<!--======================================Page Content========================================================================-->

<div class="row">

    <!--basliq-->
    <h1 class="c_about text-center bold">Yeni Servisin yaradılması</h1>
    <!--basliq-->
    <br><br>

    <form method="post" action="<?php echo base_url("ocean_add_new_services_act")?>" class="c_form_services">
        <label for="">Xidmətin Azərbaycanca adı</label>
        <input name="name_az" type="text" class="form-control">
        <br>
        <label for="">Xidmətin Rusca adı</label>
        <input name="name_ru" type="text" class="form-control">
        <br>
        <label for="">Xidmətin İngiliscə adı</label>
        <input name="name_en" type="text" class="form-control">
        <br>
        <button type="submit" class="btn btn-primary c_services_submit">Yarat</button>
    </form>


</div>

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


