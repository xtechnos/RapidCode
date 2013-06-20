<?php
$invalid=0;
		// check for login on form submission
		if(isset($_POST['login_name'])&&isset($_POST['login_pass']))
			{
						$model = new admins_model();
						if($model->login($_POST['login_name'],$_POST['login_pass']))
							{
								$invalid=0;
								$_SESSION['isadmin']=1;
								header('location:index');
								}
						else
							{
								$invalid=1;
								unset($_SESSION['isadmin']);
								}
			}
		// end check for login
		?>
<section>
<div class="wrapper">
<link rel="stylesheet" href="<?php echo path;?>static/css/login_form_style.css" type="text/css" />

		<div id="container">
			<form action="" method="post">
				<div class="login">LOGIN</div>
				<div class="username-text">Username:</div>
				<div class="password-text">Password:</div>
				<div class="username-field">
					<input type="text" name="login_name" value="" />
				</div>
				<div class="password-field">
					<input type="password" name="login_pass" value="" />
				</div>
                <div class="invalid"><?php 
													if($invalid==1)
													echo 'Invalid user name or password!';
													?></div>
				<input type="checkbox" name="remember" id="remember-me" /><label for="remember-me">Remember me</label>
				<div class="forgot-usr-pwd">Forgot <a href="#">username or password</a>?</div>
				<input type="submit" name="submit" value="GO" />
			</form>
		</div>
        </div>
</section>