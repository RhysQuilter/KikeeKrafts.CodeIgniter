<?php $this->load->helper("url"); ?>
<div class="form-signin" style="margin-left: auto;
    margin-right: auto;
text-align:center;width: 300px;">
	<form action="<?php echo site_url("AdminLogin/manage/"); ?>" method="post">
		<h1 class="h3 mb-3 fw-normal">Admin Login</h1>

		<label class="visually-hidden" for="inputEmail">Email</label>

		<?php $usernameValue = isset($username) ? 'value="' . $username . '"' : ""; ?>
		<input autofocus class="form-control" id="Email" name="Email" placeholder="Email address" required type="text" <?php echo $usernameValue ?>>

		<label class="visually-hidden" for="inputPassword">Password</label>

		<input class="form-control" id="Password" name="Password" placeholder="Password" required type="password">

		<div class="checkbox mb-3">
			<label><input type="checkbox" value="remember-me"> Remember me</label>
		</div>

		<button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

		<?php if (isset($error)) { ?>
			<p class="error"><?php echo $error ?></p>
		<?php } ?>

		<p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
	</form>
</div>