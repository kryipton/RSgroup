<?php $this->load->view('admin/includes_for_whole_page/navbar'); ?>
<div class="login-wrapper">
    <form action="<?php  echo base_url('ocean_username_update_act')?>" method="post">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span><input class="form-control" type="text" name="usr" value="<?php echo $user['username'];?>">
            </div>
        </div>
        <input class="btn btn-lg btn-primary" type="submit" value="Yenilə">
    </form>
    <br>
    <br>
    <br>
    <br>
    <form action="<?php echo base_url('ocean_password_update_act');?>" method="post">

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span><input class="form-control"  name="psw1" type="password" placeholder="Yeni şifrə">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-check"></i></span><input class="form-control" name="psw2" type="password" placeholder="Yeni şifrənin təkrarı">
            </div>
        </div>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Yenilə">

    </form>
</div>

<?php if($this->session->flashdata("update_alert")){ ?>
    <script>
        iziToast.success({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("update_alert")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>
<?php if($this->session->flashdata("update_alert_wrong")){ ?>
    <script>
        iziToast.warning({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("update_alert_wrong")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>
