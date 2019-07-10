$(document).ready(function () {

//    =========================Ana seyfe sponsorlar bolmesi =========================================

    var name = "dropzone_home"
    if($("#" + name).length != 0) {
        var myDropzone_home = new Dropzone("#dropzone_home");

        myDropzone_home.on("complete", function(file) {
            $data_url_of_dropzone = $('#dropzone_home').data("url");

            $.post( $data_url_of_dropzone, {}, function (response) {
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
        });
    }

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

//    =========================Ana seyfe sponsorlar bolmesi =========================================




//    =========================Galereya hissesi=========================================

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


    //dropzone nun dinamik sekilleri yuklemesi
    var name = "dropzone"
    if($("#" + name).length != 0) {
        var myDropzone = new Dropzone("#dropzone");

        myDropzone.on("complete", function(file) {
            $data_url_of_dropzone = $('#dropzone').data("url");

            $.post( $data_url_of_dropzone, {}, function (response) {
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
        });
    }


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

//    =========================Galereya hissesi=========================================






//    =========================Sertifikatlar  hissesi=========================================

    //dropzone nun dinamik sekilleri yuklemesi
    var name2 = "dropzone_certificates"
    if($("#" + name2).length != 0) {
        var myDropzone2 = new Dropzone("#dropzone_certificates");
        myDropzone2.on("complete", function(file) {
            $data_url_of_dropzone = $('#dropzone_certificates').data("url");

            $.post( $data_url_of_dropzone, {}, function (response) {
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
        });
    }


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


    //galwereya tablesini sortable eleme
    $(".c_gallery_sortable_certificates").sortable();
    $(".c_gallery_sortable_certificates").on("sortupdate", function () {
        var  $data_serialize_gallery = $(this).sortable("serialize");
        var $data_url_4 = $(this).data("url");

        $.post($data_url_4, {data: $data_serialize_gallery}, function (response) {

        })
    })


//    =========================Sertifikatlar  hissesi=========================================






//    =========================Xidmetler hissesi=========================================

//  galereyadaki silme islemine alert verme
    $('.c_delete_gallery_services').click(function () {

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

//    =========================Xidmetler hissesi=========================================




//    =========================Portfolio hissesi=========================================

//  dropzone nun dinamik sekilleri yuklemesi
    var name = "dropzone_portfolio"
    if($("#" + name).length != 0) {
        var myDropzone = new Dropzone("#dropzone_portfolio");

        myDropzone.on("complete", function(file) {
            $data_url_of_dropzone = $('#dropzone_portfolio').data("url");

            $.post( $data_url_of_dropzone, {}, function (response) {
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




            })
        });
    }

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


    $('.c_img_list_container_portfolio_gallery').on('change', '.isPrimary_gallery_portfolio', function () {

        var $data_portfolio = $(this).prop("checked");
        var $data_url_portfolio = $(this).data("url");
        // alert($data_url_1)
        if(typeof $data_portfolio !== "undefined" && typeof $data_url_portfolio !== "undefined"){
            $.post($data_url_portfolio, { data : $data_portfolio}, function (response) {
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
            });
        }

    })


//    =========================Portfolio hissesi=========================================


});


