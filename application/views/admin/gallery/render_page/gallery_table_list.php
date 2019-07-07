
<div class="table-responsive">
    <!--                sekillerin tablesi-->
    <table class="table table-hover table-striped ">

        <!--                    tablenin headeri-->
        <thead>
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
            Dəyişikliklər
        </th>

        <th>
            <a href="#"
               class="btn btn-danger c_all_delete_gallery"
               data-url="<?php echo base_url("delete_selected_element_gallery")?>">

                <i class="fa fa-trash-o"></i>
                Toplu Sil (Seçilən bütün şəkilləri sil)</a>
        </th>

        </thead>
        <!--                    tablenin headeri-->


        <!--                    tablenin bodysi-->
        <tbody class="c_gallery_sortable" data-url = "<?php echo base_url("change_rank_gallery")?>">

        <!--                    butun sekiller foreach e salinib tableye yuklenir-->
        <?php foreach ($all_pictures as $pic){ ?>

            <tr id="ord-<?php echo $pic["id"] ?>" class="c_tr">
                <td>
                    <?php echo $pic["id"]; ?>
                </td>
                <td class="col-sm-4">
                    <?php echo $pic["name"]; ?>
                </td>
                <td>
                    <img width="120px"
                         height="80px"
                         src= <?php echo base_url("uploads/gallery/$pic[name]")?>
                         alt= "Şəkil gostərilə bilmir">
                </td>
                <td>
                    <?php echo $pic["upload_date"]; ?>
                </td>
                <td class="col-sm-2 text-center">

                    <input type="checkbox"
                           class="js-switch isActive_gallery"
                           data-switchery
                           data-url = "<?php echo base_url("change_status/$pic[id]")?>"

                        <?php if ($pic["status"] == 1){
                            echo "checked";
                        } ?>

                    />



                </td>
                <td>
                    <a
                       data-url = "<?php echo base_url("delete_picture_of_gallery/$pic[id]")?>"
                       href="<?php echo base_url("delete_picture_of_gallery/$pic[id]")?>"
                       class="btn btn-danger c_delete_gallery">

                        <i class="fa fa-trash-o"></i>
                        Sil
                    </a>

                </td>
                <td class="text-center">

                    <input
                           id="<?php echo $pic["id"] ?>"
                           type="checkbox"
                           class="js-switch isChoosed_gallery"
                           data-switchery
                    />
                </td>
            </tr>

            <script>

//                burda xeta yoxdur phpstorm javascript kodunu tanimir ve error qebul edir
                $(document).ready(function () {

                    //switchlernen statusu dinamik deyismek
                    $(".isActive_gallery").change(function () {

                        var $data_1 = $(this).prop("checked");
                        var $data_url_1 = $(this).data("url");
                        // alert($data_url_1)
                        if(typeof $data_1 !== "undefined" && typeof $data_url_1 !== "undefined"){
                            $.post($data_url_1, { data : $data_1}, function (response) {

                            });
                        }

                    });


                    //switchlernen birden cox elementi secmek
                    var idler = [];
                    $(".isChoosed_gallery").change(function () {

                        var $data_2 = $(this).prop("checked");

                        if ($data_2 == true){
                            idler.push($(this).attr('id'));
                        }else{
                            var removeItem = $(this).attr('id');

                            idler = jQuery.grep(idler, function(value) {
                                return value != removeItem;
                            });
                        }

                        // alert(idler);

                    });

                    //galereyadaki birden cox elementi silmek
                    $('.c_all_delete_gallery').click(function () {

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

                                    $('.c_img_list_container').html(response);

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
                    $('.c_delete_gallery').click(function () {

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
                                    $('.c_img_list_container').html(response);

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
                    $(".c_gallery_sortable").sortable();
                    $(".c_gallery_sortable").on("sortupdate", function () {
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