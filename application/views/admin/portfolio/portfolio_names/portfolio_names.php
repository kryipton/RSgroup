
<?php $this->load->view('admin/includes_for_whole_page/navbar'); ?>

<!--======================================Page Content========================================================================-->

<div class="row">

    <!--basliq-->
    <h1 class="c_about text-center bold">Portfolio Bölməsi</h1>
    <!--basliq-->
    <br>

    <a href="<?php echo base_url("ocean_portfolio_add_new")?>" class="btn btn-primary">Yeni portfolio əlavə et</a>
    <br><br>

    <div class="table-responsive">
        <!--                sekillerin tablesi-->
        <table class="table table-hover table-striped table-bordered">

            <!--                    tablenin headeri-->
            <thead>


            <th>
                Portfolionun Azərbayca Adı
            </th>

            <th>
                Portfolionun Rusca Adı
            </th>

            <th>
                Portfolionun İngiliscə Adı
            </th>

            <th>
                Portfolio Galereya
            </th>

            <th>
                Dəyişikliklər
            </th>
            </thead>
            <!--                    tablenin headeri-->


            <!--                    tablenin bodysi-->
            <tbody>

            <!--                    butun sekiller foreach e salinib tableye yuklenir-->
            <?php foreach ($all_portfolios as $pic){ ?>

                <tr >

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
                        <a href="<?php echo base_url("portfolio_about_gallery/$pic[id]")?>" class="btn btn-info">Ətraflı</a>
                    </td>
                    <td class="">
                        <a href="<?php echo base_url("ocean_portfolio_update_new/$pic[id]")?>" class="btn btn-warning">Yenilə</a>

                        <a
                           data-url = "<?php echo base_url("ocean_delete_portfolio/$pic[id]")?>"
                           href="<?php echo base_url("ocean_delete_portfolio/$pic[id]")?>"
                           class="btn btn-danger c_delete_gallery_portfolio">

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
<?php if($this->session->flashdata("portfolio_success")){ ?>
    <script>
        iziToast.success({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("portfolio_success")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>


