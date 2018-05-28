<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$website?> - <?=$title?></title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/Theme/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/Theme/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/Theme/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/Theme/assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/Theme/assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/Theme/assets/css/colors.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?=base_url()?>assets/Theme/assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/Theme/assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/Theme/assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/Theme/assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?=base_url()?>assets/Theme/assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/Theme/assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="<?=base_url()?>assets/Theme/assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/Theme/assets/js/pages/datatables_basic.js"></script>

	<script type="text/javascript" src="<?=base_url()?>assets/Theme/assets/js/plugins/ui/ripple.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqz-8Suw_Fygnd1XIr8Qh7YRq6-9Chh60&libraries=places"></script>
	<script src="https://cdn.rawgit.com/googlemaps/v3-utility-library/master/infobox/src/infobox.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

	</script>
</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse bg-indigo">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="<?=base_url()?>assets/Theme/assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>


			</ul>

			<div class="navbar-right">
				<p class="navbar-text">Morning, Admin!</p>
				<p class="navbar-text"><span class="label bg-success-400">Online</span></p>
			</div>
		</div>
	</div>
	<!-- /main navbar -->
	<div class="page-container">

			<!-- Page content -->
			<div class="page-content">

				<!-- Main sidebar -->
				<div class="sidebar sidebar-main sidebar-default">
					<div class="sidebar-content">

						<!-- User menu -->
						<div class="sidebar-user-material">
							<div class="category-content">
								<div class="sidebar-user-material-content">
									<a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-responsive" alt=""></a>
									<h6>Admin</h6>
									<span class="text-size-small">Indonesia</span>
								</div>

								<div class="sidebar-user-material-menu">
									<a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
								</div>
							</div>

							<div class="navigation-wrapper collapse" id="user-nav">
								<ul class="navigation">
									<li><a href="#"><i class="icon-user-plus"></i> <span>My profile</span></a></li>
									<li><a href="#"><i class="icon-coins"></i> <span>My balance</span></a></li>
									<li><a href="#"><i class="icon-comment-discussion"></i> <span><span class="badge bg-teal-400 pull-right">58</span> Messages</span></a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-cog5"></i> <span>Account settings</span></a></li>
									<li><a href="#"><i class="icon-switch2"></i> <span>Logout</span></a></li>
								</ul>
							</div>
						</div>
						<!-- /user menu -->


						<!-- Main navigation -->
						<div class="sidebar-category sidebar-category-visible">
							<div class="category-content no-padding">
								<ul class="navigation navigation-main navigation-accordion">

									<!-- Main -->
									<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
									<li class="<?=($menu =='dashboard')?'active':''  ?>"><a href="<?php echo base_url('main') ?>"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
									<li class="<?=($menu =='survey')?'active':''  ?>"><a href="<?php echo base_url('main/survey'); ?>"><i class="icon-home4"></i> <span>Survey</span></a></li>
									<!-- /main -->

								</ul>
							</div>
						</div>
						<!-- /main navigation -->

					</div>
				</div>
				<!-- /main sidebar -->
