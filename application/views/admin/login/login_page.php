<?php $this->load->view("admin/includes_for_whole_page/header") ?>

<body class="login2">

<!-- Login Screen -->
<div class="login-wrapper">
    <h1>
        <a href="<?php echo base_url("")?>">RSgroup MMC</a>
    </h1>
    <form action="<?php echo base_url("ocean_secure_login_page_act") ?>" method="post">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span><input name="username" class="form-control" placeholder="İsdifadəçi Adı" type="text">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span><input name="password" class="form-control" placeholder="Şifrə" type="password">
            </div>
        </div>

        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Daxil Ol">

    </form>

</div>
<!-- End Login Screen -->
</body>

</html>


<script src="<?php echo base_url("public/assets_for_admin/javascripts")?>/iziToast.min.js"></script>
<?php if($this->session->flashdata("login_alert")){ ?>
    <script>
        iziToast.warning({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("login_alert")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>
