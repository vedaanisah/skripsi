<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login | Sistem Pakar</title>
    <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>
    <link rel="stylesheet" href="<?php echo base_url('assets/formlogin/css/style.css')?>" media="screen" type="text/css" />
</head>
<body class="login-form">
    <div class="login-card">
        <h1>Log In</h1><br>
        <form class="form-login" method="POST" action="<?php echo base_url('Login_controller/login')?>">
			<div class="wrap-input validate-input" data-validate = "Username is required">
                <span><i class="fa fa"></i></span>
				<input class="input" type="text" name="username" placeholder="username">
			</div>
			<div class="wrap-input validate-input" data-validate = "Password is required">
				<input class="input password" type="password" name="password" placeholder="password">
			</div>
            <button type="submit" class="btn login btn-login-submit">Submit</button>
        </form>
    </div>
    <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>
</body>
</html>