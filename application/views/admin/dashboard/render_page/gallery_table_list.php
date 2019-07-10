
<div class="table-responsive">
    <!--                sekillerin tablesi-->
    <table class="table table-hover table-striped ">

        <!--                    tablenin headeri-->
        <thead>


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
            Dəyişikliklər
        </th>

        <th>
            <a href="#"
               class="btn btn-danger c_all_delete_home"
               data-url="<?php echo base_url("delete_selected_element_home")?>">

                <i class="fa fa-trash-o"></i>
                Toplu Sil (Seçilən bütün şəkilləri sil)</a>
        </th>

        </thead>
        <!--                    tablenin headeri-->


        <!--                    tablenin bodysi-->
        <tbody>

        <!--                    butun sekiller foreach e salinib tableye yuklenir-->
        <?php foreach ($all_brends as $pic){ ?>

            <tr id="ord-<?php echo $pic["id"] ?>" class="c_tr">

                <td class="col-sm-6">
                    <?php echo $pic["name"]; ?>
                </td>
                <td>
                    <img width="120px"
                         height="80px"
                         src= <?php echo base_url("uploads/home/$pic[name]")?>
                         alt= "Şəkil gostərilə bilmir">
                </td>
                <td>
                    <?php echo $pic["upload_date"]; ?>
                </td>

                <td>
                    <a
                       data-url = "<?php echo base_url("ocean_delete_picture_of_home/$pic[id]")?>"
                       href="<?php echo base_url("ocean_delete_picture_of_home/$pic[id]")?>"
                       class="btn btn-danger c_delete_home">

                        <i class="fa fa-trash-o"></i>
                        Sil
                    </a>

                </td>
                <td class="text-center">

                    <input
                           id="<?php echo $pic["id"] ?>"
                           type="checkbox"
                           class="js-switch isChoosed_home"
                           data-switchery
                    />
                </td>
            </tr>

            <script>

//                burda xeta yoxdur phpstorm javascript kodunu tanimir ve error qebul edir
                $(document).ready(function () {


                    //switchlernen birden cox elementi secmek
                    var idler_home = [];
                    $(".isChoosed_home").change(function () {

                        var $data_home = $(this).prop("checked");

                        if ($data_home == true){
                            idler_home.push($(this).attr('id'));
                        }else{
                            var removeItem = $(this).attr('id');

                            idler_home = jQuery.grep(idler_home, function(value) {
                                return value != removeItem;
                            });
                        }

                        // alert(idler);

                    });

                    //galereyadaki birden cox elementi silmek
                    $('.c_all_delete_home').click(function () {

                        $data_url_home = $(this).data("url");

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
                                $.post($data_url_home, {data: idler_home}, function (response) {

                                    $('.c_img_list_container_home').html(response);

                                    // multiple switchler ucun kod
                                    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

                                    elems.forEach(function(html) {
                                        var switchery = new Switchery(html);

                                    });lems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));


                                    //tek switch ucun kod
                                    // var elem = document.querySelector('.js-switch');
                                    // var init = new Switchery(elem);


                                })
                            }
                        });
                        event.preventDefault();
                    });


                    //homedaki  silme islemine alert verme
                    $('.c_delete_home').click(function () {

                        $data_url_home = $(this).data("url");

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
                                $.post($data_url_home, {}, function (response) {
                                    // $('.c_img_list_container').empty();
                                    $('.c_img_list_container_home').html(response);

                                    // multiple switchler ucun kod
                                    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

                                    elems.forEach(function(html) {
                                        var switchery = new Switchery(html);

                                    });lems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));


                                    //tek switch ucun kod
                                    // var elem = document.querySelector('.js-switch');
                                    // var init = new Switchery(elem);


                                })
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