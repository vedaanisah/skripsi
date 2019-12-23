<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login | Sistem Pakar</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/formlogin/css/style.css')?>" media="screen" type="text/css" />
</head>
<body class="login-form">
    <div class="notification ">
        <div class="alert alert-danger" role="alert">
        You got the wrong <strong>Username or Password</strong>!
        </div>
    </div>

    <div class="login-card">
        <h1>Log In</h1><br>
        <form class="form-login" method="POST" action="<?php echo base_url('Login_controller/login')?>">
			<div class="wrap-input validate-input">
                <span><i class="fa fa"></i></span>
				<input class="input" type="text" name="username" id="username" placeholder="username">
			</div>
			<div class="wrap-input validate-input">
				<input class="input password" type="password" name="password" id="password" placeholder="password">
			</div>
            <button type="submit" class="btn login btn-login-submit">Submit</button>
        </form>
    </div>
    <!-- jQuery -->
    <script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <script src=<?php echo base_url('assets/js/auth-engine.js');?>></script>
</body>
</html>