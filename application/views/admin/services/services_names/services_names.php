
<?php $this->load->view('admin/includes_for_whole_page/navbar'); ?>

<!--======================================Page Content========================================================================-->

<div class="row">

    <!--basliq-->
    <h1 class="c_about text-center bold">Xidmətlər Bölməsi</h1>
    <!--basliq-->
    <br>

    <a href="<?php echo base_url("ocean_add_new_services")?>" class="btn btn-primary">Yeni xidmət əlavə et</a>
    <br><br>

    <div class="table-responsive">
        <!--                sekillerin tablesi-->
        <table class="table table-hover table-striped table-bordered">

            <!--                    tablenin headeri-->
            <thead>
            <th>
                №
            </th>

            <th>
                Xidmətin Azərbayca Adı
            </th>

            <th>
                Xidmətin Rusca Adı
            </th>

            <th>
                Xidmətin İngiliscə Adı
            </th>

            <th>
                Xidmət Haqqında
            </th>

            <th>
                Dəyişikliklər
            </th>
            </thead>
            <!--                    tablenin headeri-->


            <!--                    tablenin bodysi-->
            <tbody>

            <!--                    butun sekiller foreach e salinib tableye yuklenir-->
            <?php foreach ($service_names as $pic){ ?>

                <tr >
                    <td>
                        <?php echo $pic["id"]; ?>
                    </td>
                    <td>
                        <?php echo $pic["name_az"]; ?>
                    </td>
                    <td>
                        <?php echo $pic["name_ru"]; ?>
                    </td>
                    <td>
                        <?php echo $pic["name_en"]; ?>
                    </td>
                    <td>
                        <a href="<?php echo base_url("about_ocean_services/$pic[id]")?>" class="btn btn-info">Ətraflı</a>
                    </td>
                    <td class="">
                        <a href="<?php echo base_url("change_name_ocean_services/$pic[id]")?>" class="btn btn-warning">Yenilə</a>

                        <a
                           data-url = "<?php echo base_url("delete_name_ocean_services/$pic[id]")?>"
                           href="<?php echo base_url("delete_name_ocean_services/$pic[id]")?>"
                           class="btn btn-danger c_delete_gallery_services">

                            Sil
                        </a>
                    </td>
                </tr>

            <?php }?>

            </tbody>
            <!--                    tablenin bodysi-->


        </table>
        <!--                sekillerin tablesi-->
    </div>

</div>

<!--======================================Page Content========================================================================-->


<?php $this->load->view('admin/includes_for_whole_page/style_changer'); ?>
<?php $this->load->view('admin/includes_for_whole_page/scripts'); ?>



<!--melumat alertleri-->
<?php if($this->session->flashdata("services_success")){ ?>
    <script>
        iziToast.success({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("services_success")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>


