

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin | Property </title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo ADMIN_URL?>favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo ADMIN_URL?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo ADMIN_URL?>plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo ADMIN_URL?>plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo ADMIN_URL?>css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>Panal</b></a>
            <small>Property</small>
        </div>
        <div class="card">
            <div class="body">
            <?= $this->Form->create() ?>
                <form id="sign_in" method="POST">
                    <div class="msg">Sign in </div>
                    <?= $this->Flash->render('error'); ?>
                    <?= $this->Flash->render('smsalert'); ?>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
						<?php echo $this->Form->input('username',array('placeholder'=>'Username','type'=>'text','class'=>"form-control",'label'=>false,'required autofocus'));?>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
							
							<?php echo $this->Form->input('password',array('placeholder'=>'Password','type'=>'password','class'=>"form-control",'label'=>false,'required'));?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                        <a href="Users/forgotpassword">Forgot Password?</a>
                           
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="msg">
                        <label>Provide by <a href="fivefreelancer.com">fivefreelancer.com</a></label>
                       
                          
                        </div>
                    </div>
					<?php echo $this->Form->end();?>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?php echo ADMIN_URL?>plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo ADMIN_URL?>plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo ADMIN_URL?>plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo ADMIN_URL?>plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo ADMIN_URL?>js/admin.js"></script>
    <script src="<?php echo ADMIN_URL?>js/pages/examples/sign-in.js"></script>
</body>

</html>