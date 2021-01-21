<?php
$this->load->helper("url");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>User Accounts</title>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
	<main class="form-signin">
		<form action="<?php echo base_url(); ?>index.php/login/manage/" method="post">
			<img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
			<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

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
	</main>
</body>

</html>