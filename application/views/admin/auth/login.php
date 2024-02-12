<!DOCTYPE html>
<html lang="en">

<head>
	<title>FXSignals</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- vendor css -->
	<link rel="stylesheet" href="<?= base_url() ?>public/assets/css/style.css">
	<link rel="icon" href="<?= base_url() ?>public/web/img/favicon.png" value="FXSignals" type="image/">
	<style>
		body {

			background-image: url("<?php echo base_url('public/assets/images/1.jpg'); ?>");

			background-size: cover;

			background-repeat: no-repeat;

		}
	</style>
</head>
<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<img src="<?= base_url() ?>public/signal_imgs/logo.png" alt="" style="width:40%;" class="img-fluid">
		<?php if (isset($msg) || validation_errors() !== ''): ?>
			<div class="alert alert-danger" role="alert">
				<?= validation_errors(); ?>
				<?= isset($msg) ? $msg : ''; ?>
			</div>
		<?php endif; ?>
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<?php echo form_open(base_url('admin/auth/login')); ?>
					<div class="card-body">
						<h2 class="mb-3 f-w-1000">LogIn</h2>
						<hr>
						<div class="form-group mb-3">
							<input type="text" name="email" class="form-control" id="Email" placeholder="Email address">
						</div>
						<div class="form-group mb-4">
							<input type="password" name="password" class="form-control" id="Password"
								placeholder="Password">
						</div>
						<div class="custom-control custom-checkbox text-left mb-4 mt-2">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Save credentials.</label>
						</div>
						<input class="btn btn-block btn-primary mb-4" type="submit" name="submit" id="submit">
						<hr>
						<p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html"
								class="f-w-400">Reset</a></p>
						<p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html"
								class="f-w-400">Signup</a></p>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="<?= base_url() ?>public/assets/js/vendor-all.min.js"></script>
<script src="<?= base_url() ?>public/assets/js/plugins/bootstrap.min.js"></script>
<script src="<?= base_url() ?>public/assets/js/pcoded.min.js"></script>
</body>

</html>