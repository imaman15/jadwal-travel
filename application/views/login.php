<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login | Aplikasi Jadwal Travel</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url();?>assets/images/bus.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Sweetalert Css -->
    <link href="<?php echo base_url();?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url();?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url();?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
</head>
<?php echo $this->session->flashdata('info'); ?>
<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Aplikasi Jadwal Travel</a>
        
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" action="<?php echo base_url(); ?>Login/aksi_login" method="POST">
                    <div class="msg">Halaman Login</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="user" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="pass" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                  
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">LOG IN</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
	<div class="copy-right">
			<p>© 2018 Aplikasi Jadwal Travel. All rights reserved | Modified by <a href="<?php echo base_url(); ?>bantenprojek"><b style="color:yellow;">BANTENPROJEK.</b></a></p>
</div>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/node-waves/waves.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets/js/admin.js"></script>
    <script src="<?php echo base_url();?>assets/js/pages/examples/sign-in.js"></script>
</body>

</html>