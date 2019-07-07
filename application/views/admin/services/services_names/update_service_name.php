
<?php $this->load->view('admin/includes_for_whole_page/navbar'); ?>


<!--======================================Page Content========================================================================-->

<div class="row">

    <!--basliq-->
    <h1 class="c_about text-center bold"><?php echo $service_name["name_az"]?> Yenilnəməsi</h1>
    <!--basliq-->
    <br><br>

    <form method="post" action="<?php echo base_url("change_name_ocean_services_act/$service_name[id]")?>" class="c_form_services">
        <label for="">Xidmətin Azərbaycanca adı</label>
        <input name="name_az" type="text" class="form-control" value="<?php echo $service_name["name_az"]?>">
        <br>
        <label for="">Xidmətin Rusca adı</label>
        <input name="name_ru" type="text" class="form-control" value="<?php echo $service_name["name_ru"]?>">
        <br>
        <label for="">Xidmətin İngiliscə adı</label>
        <input name="name_en" type="text" class="form-control" value="<?php echo $service_name["name_en"]?>">
        <br>
        <button type="submit" class="btn btn-primary c_services_submit">Yenilə</button>
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


