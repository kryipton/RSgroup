
<div class="table-responsive">
    <!--                sekillerin tablesi-->
    <table class="table table-hover table-striped ">

        <!--                    tablenin headeri-->
        <thead class="table-bordered">
        <th>
            #id
        </th>

        <th>
            Adı
        </th>

        <th>
            Görünüşü
        </th>

        <th>
            Yüklənmə tarixi
        </th>

        <th>
            Status (səyfədə görünüb görünməməyi)
        </th>

        <th>
            Ana şəkil seçmə
        </th>

        <th>
            Dəyişikliklər
        </th>

        <th>
            <a href="#"
               class="btn btn-danger c_all_delete_portfolio"
               data-url="<?php echo base_url("ocean_delete_image_portfolio_group/$portfolio_about[id]")?>">

                <i class="fa fa-trash-o"></i>
                Toplu Sil (Seçilən bütün şəkilləri sil)</a>
        </th>

        </thead>
        <!--                    tablenin headeri-->


        <!--                    tablenin bodysi-->
        <tbody>

        <!--                    butun sekiller foreach e salinib tableye yuklenir-->
        <?php foreach ($portfolio_gallery as $pic){ ?>

            <tr id="ord-<?php echo $pic["id"] ?>" class="c_tr">
                <td>
                    <?php echo $pic["id"]; ?>
                </td>
                <td class="col-sm-2">
                    <?php echo $pic["name"]; ?>
                </td>
                <td>
                    <img width="120px"
                         height="80px"
                         src= <?php echo base_url("uploads/portfolio/$pic[name]")?>
                         alt= "Şəkil gostərilə bilmir">
                </td>
                <td>
                    <?php echo $pic["upload_date"]; ?>
                </td>
                <td class="col-sm-2 text-center">

                    <input type="checkbox"
                           class="js-switch isActive_gallery_portfolio"
                           data-switchery
                           data-url = "<?php echo base_url("ocean_change_status_image_portfolio/$pic[id]")?>"

                        <?php if ($pic["status"] == 1){
                            echo "checked";
                        } ?>

                    />



                </td>
                <td>
<!--                    ana sekli secme yeri-->
                    <input type="checkbox"
                           class="js-switch-dfcolor isPrimary_gallery_portfolio"
                           data-switchery="true"
                           jack-color = "#7c8bc7"
                           data-url = "<?php echo base_url("ocean_change_primary_image_portfolio/$pic[id]/$portfolio_about[id]")?>"

                        <?php if ($pic["is_primary"] == 1){
                            echo "checked";
                        } ?>

                    />
                </td>
                <td>
                    <a
                       data-url = "<?php echo base_url("ocean_delete_image_portfolio/$portfolio_about[id]/$pic[id]")?>"
                       href="<?php echo base_url("ocean_delete_image_portfolio/$portfolio_about[id]/$pic[id]")?>"
                       class="btn btn-danger c_delete_gallery_portfolio">

                        <i class="fa fa-trash-o"></i>
                        Sil
                    </a>

                </td>
                <td class="text-center">

                    <input
                           id="<?php echo $pic["id"] ?>"
                           type="checkbox"
                           class="js-switch-dfcover isChoosed_portfolio"
                           data-switchery
                    />
                </td>
            </tr>

            <script>

//                burda xeta yoxdur phpstorm javascript kodunu tanimir ve error qebul edir
                $(document).ready(function () {

                    //switchlernen statusu dinamik deyismek
                    $(".isActive_gallery_portfolio").change(function () {

                        var $data_portfolio = $(this).prop("checked");
                        var $data_url_portfolio = $(this).data("url");
                        // alert($data_url_1)
                        if(typeof $data_portfolio !== "undefined" && typeof $data_url_portfolio !== "undefined"){
                            $.post($data_url_portfolio, { data : $data_portfolio}, function (response) {

                            });
                        }

                    });


                    //switchlernen birden cox elementi secmek
                    var idler = [];
                    $(".isChoosed_portfolio").change(function () {

                        var $data_portfolio = $(this).prop("checked");

                        if ($data_portfolio == true){
                            idler.push($(this).attr('id'));
                        }else{
                            var removeItem = $(this).attr('id');

                            idler = jQuery.grep(idler, function(value) {
                                return value != removeItem;
                            });
                        }

                        // alert(idler);

                    });

                    //portfoliodaki birden cox elementi silmek
                    $('.c_all_delete_portfolio').click(function () {

                        $data_url_2 = $(this).data("url");

                        swal({
                            title: "Əminsiniz?",
                            text: "Silinən məlumatlar geri qaytarılmayacaq!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                            .then((willDelete) => {
                            if (willDelete) {
                                // window.location.href = $data_url;
                                $.post($data_url_2, {data: idler}, function (response) {

                                    $('.c_img_list_container_portfolio_gallery').html(response);

                                    // multiple switchler ucun kod
                                    isPrimary = {
                                        color             : '#8307bd'
                                        , className         : 'switchery'

                                    };

                                    isCover = {
                                        color             : '#bdb800'
                                        , className         : 'switchery'

                                    };

                                    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

                                    elems.forEach(function(html) {

                                        var switchery = new Switchery(html);


                                    });lems = Array.prototype.slice.call(document.querySelectorAll('.js-switch-dfcolor'));




                                    var elems2 = Array.prototype.slice.call(document.querySelectorAll('.js-switch-dfcolor'));

                                    elems2.forEach(function(html) {

                                        var switchery2 = new Switchery(html, isPrimary);

                                    });lems = Array.prototype.slice.call(document.querySelectorAll('.js-switch-dfcolor'));




                                    var elems3 = Array.prototype.slice.call(document.querySelectorAll('.js-switch-dfcover'));

                                    elems3.forEach(function(html) {

                                        var switchery3 = new Switchery(html, isCover);

                                    });lems = Array.prototype.slice.call(document.querySelectorAll('.js-switch-dfcover'));



                                    //tek switch ucun kod
                                    // var elem = document.querySelector('.js-switch');
                                    // var init = new Switchery(elem);

                                    //tek switch ucun kod
                                    // var elem = document.querySelector('.js-switch');
                                    // var init = new Switchery(elem);


                                })
                            }
                        });
                        event.preventDefault();
                    });


                    //  portfolioda  silme islemine alert verme
                    $('.c_delete_gallery_portfolio').click(function () {

                        $data_url_3 = $(this).data("url");

                        swal({
                            title: "Əminsiniz?",
                            text: "Silinən məlumatlar geri qaytarılmayacaq!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                            .then((willDelete) => {
                            if (willDelete) {
                                window.location.href = $data_url_3;
                            }
                        });
                        event.preventDefault();
                    });

                });

            </script>

        <?php }?>

        </tbody>
        <!--                    tablenin bodysi-->


    </table>
    <!--                sekillerin tablesi-->
</div>



<!--melumat alertleri-->
<?php if($this->session->flashdata("success")){ ?>
    <script>
        iziToast.success({
            icon: 'icon-person',
            message: 'Əməliyyat uğurla yerinə yetirildi',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>
<?php if($this->session->flashdata("warning")){ ?>
    <script>
        iziToast.warning({
            icon: 'icon-person',
            message: 'Xəta baş verdi,
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>