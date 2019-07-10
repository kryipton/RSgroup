
<div class="table-responsive">
    <!--                sekillerin tablesi-->
    <table class="table table-hover table-striped ">

        <!--                    tablenin headeri-->
        <thead class="table-bordered">


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
            Dəyişikliklər
        </th>

        <th>
            <a href="#"
               class="btn btn-danger c_all_delete_certificates"
               data-url="<?php echo base_url("delete_selected_element_certificates")?>">

                <i class="fa fa-trash-o"></i>
                Toplu Sil (Seçilən bütün şəkilləri sil)</a>
        </th>

        </thead>
        <!--                    tablenin headeri-->


        <!--                    tablenin bodysi-->
        <tbody class="c_gallery_sortable_certificates" data-url = "<?php echo base_url("change_rank_certificates")?>">

        <!--                    butun sekiller foreach e salinib tableye yuklenir-->
        <?php foreach ($all_pictures as $pic){ ?>

            <tr id="ord-<?php echo $pic["id"] ?>" class="c_tr">

                <td class="col-sm-6">
                    <?php echo $pic["name"]; ?>
                </td>
                <td>
                    <img width="120px"
                         height="120px"
                         src= <?php echo base_url("uploads/certificates/$pic[name]")?>
                         alt= "Şəkil gostərilə bilmir">
                </td>
                <td>
                    <?php echo $pic["upload_date"]; ?>
                </td>
                <td class="col-sm-2 text-center">

                    <input type="checkbox"
                           class="js-switch isActive_gallery_certificates"
                           data-switchery
                           data-url = "<?php echo base_url("change_status_certificates/$pic[id]")?>"

                        <?php if ($pic["status"] == 1){
                            echo "checked";
                        } ?>

                    />



                </td>
                <td>
                    <a
                       data-url = "<?php echo base_url("delete_picture_of_certificates/$pic[id]")?>"
                       href="<?php echo base_url("delete_picture_of_certificates/$pic[id]")?>"
                       class="btn btn-danger c_delete_gallery_certificates">

                        <i class="fa fa-trash-o"></i>
                        Sil
                    </a>

                </td>
                <td class="text-center">

                    <input
                           id="<?php echo $pic["id"] ?>"
                           type="checkbox"
                           class="js-switch isChoosed_gallery_certificates"
                           data-switchery
                    />
                </td>
            </tr>

            <script>

               // burda xeta yoxdur phpstorm javascript kodunu tanimir ve error qebul edir
                $(document).ready(function () {

                    //switchlernen statusu dinamik deyismek
                    $(".isActive_gallery_certificates").change(function () {

                        var $data_1 = $(this).prop("checked");
                        var $data_url_1 = $(this).data("url");
                        // alert($data_url_1)
                        if(typeof $data_1 !== "undefined" && typeof $data_url_1 !== "undefined"){
                            $.post($data_url_1, { data : $data_1}, function (response) {

                            });
                        }

                    });


                    var idler2 = [];
                    $(".isChoosed_gallery_certificates").change(function () {

                        var $data_certificates = $(this).prop("checked");

                        if ($data_certificates == true){
                            idler2.push($(this).attr('id'));
                        }else{
                            var removeItem = $(this).attr('id');

                            idler2 = jQuery.grep(idler2, function(value) {
                                return value != removeItem;
                            });
                        }

                    });

                    //galereyadaki birden cox elementi silmek
                    $('.c_all_delete_certificates').click(function () {

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
                                $.post($data_url_2, {data: idler2}, function (response) {

                                    $('.c_img_list_container_certificates').html(response);

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


                    //galereyadaki silme islemine alert verme
                    $('.c_delete_gallery_certificates').click(function () {

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
                                // window.location.href = $data_url;
                                $.post($data_url_3, {}, function (response) {
                                    // $('.c_img_list_container').empty();
                                    $('.c_img_list_container_certificates').html(response);

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


                    //galwereya tablesini sortable eleme
                    $(".c_gallery_sortable_certificates").sortable();
                    $(".c_gallery_sortable_certificates").on("sortupdate", function () {
                        var  $data_serialize_gallery = $(this).sortable("serialize");
                        var $data_url_4 = $(this).data("url");

                        $.post($data_url_4, {data: $data_serialize_gallery}, function (response) {

                        })
                    })



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