<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8"/>
	<title><?php echo $title.' | UG-SO by 3KA24'; ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>application/views/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>application/views/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>application/views/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/assets/plugins/select2/select2.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/views/assets/plugins/select2/select2-metronic.css"/>
	<!-- END PAGE LEVEL SCRIPTS -->
	<!-- BEGIN THEME STYLES -->
	<link href="<?php echo base_url(); ?>application/views/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>application/views/assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>application/views/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>application/views/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>application/views/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo base_url(); ?>application/views/assets/css/pages/login.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>application/views/assets/css/custom.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>application/views/favicon.ico"/>
</head>
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="<?php echo base_url(); ?>">
		<img src="<?php echo base_url(); ?>application/views/assets/img/logo-big.png" alt=""/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="<?php echo base_url(); ?>" method="post">
		<h3 class="form-title">Login to your account</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
				 Enter any username and password.
			</span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
			</div>
		</div>
		<div class="form-actions">
			<label class="checkbox">
			<input type="checkbox" name="remember" value="1"/> Remember me </label>
			<button type="submit" class="btn green pull-right">
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
		<div class="forget-password">
			<h4>Forgot your password ?</h4>
			<p>
				 no worries, click
				<a href="javascript:;" id="forget-password">
					 here
				</a>
				 to reset your password.
			</p>
		</div>
	</form>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
	<form class="forget-form" action="<?php echo base_url(); ?>" method="post">
		<h3>Forget Password ?</h3>
		<p>
			 Enter your e-mail address below to reset your password.
		</p>
		<div class="form-group">
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
			</div>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn">
			<i class="m-icon-swapleft"></i> Back </button>
			<button type="submit" class="btn green pull-right">
			Submit <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	</form>
	<!-- END FORGOT PASSWORD FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 2015 &copy; SIA - Sales Order | Gunadarma University.
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
	<script src="assets/plugins/respond.min.js"></script>
	<script src="assets/plugins/excanvas.min.js"></script> 
	<![endif]-->
<script src="<?php echo base_url(); ?>application/views/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>application/views/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>application/views/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>application/views/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>application/views/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>application/views/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>application/views/assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>application/views/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url(); ?>application/views/assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>application/views/assets/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>application/views/assets/scripts/core/app.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>application/views/assets/scripts/custom/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
		jQuery(document).ready(function() {     
		  App.init();
		  Login.init();
		});
	</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>