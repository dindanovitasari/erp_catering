<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<base href="<?php echo $this->config->item('base_url') ?>" />
	<meta charset="utf-8">
	<title>ERP Katering</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- The styles -->
	<link id="bs-css" href="<?php echo base_url();?>css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="<?php echo base_url();?>css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo base_url();?>css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo base_url();?>css/chosen.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.ico">
		
</head>

<body>
<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
		<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="<?php echo base_url();?>dashboard">  <span>ERP Katering</span></a>
			<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url();?>dashboard/logout">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">			
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Keuangan</li>
						<li><a class="ajax-link" href="<?php echo base_url();?>debit"><i class="icon-align-justify"></i><span class="hidden-tablet"> Debit</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>kredit"><i class="icon-align-justify"></i><span class="hidden-tablet"> Kredit</span></a></li>						
						<li class="nav-header hidden-tablet">Gudang</li>
						<li><a class="ajax-link" href="<?php echo base_url();?>jenisbarang"><i class="icon-align-justify"></i><span class="hidden-tablet"> Jenis Barang</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>daftarbarang"><i class="icon-align-justify"></i><span class="hidden-tablet"> Daftar Barang</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>barangmasuk"><i class="icon-align-justify"></i><span class="hidden-tablet"> Barang Masuk</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>barangkeluar"><i class="icon-align-justify"></i><span class="hidden-tablet"> Barang Keluar</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>mintabarang"><i class="icon-align-justify"></i><span class="hidden-tablet"> Permintaan Barang</span></a></li>
						<li class="nav-header hidden-tablet">Pembelian</li>
						<li><a class="ajax-link" href="<?php echo base_url();?>supplier"><i class="icon-align-justify"></i><span class="hidden-tablet"> Daftar Supplier</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>pembelian"><i class="icon-align-justify"></i><span class="hidden-tablet"> Pembelian</span></a></li>
						<li class="nav-header hidden-tablet">Pemesanan</li>
						<li><a class="ajax-link" href="<?php echo base_url();?>order"><i class="icon-align-justify"></i><span class="hidden-tablet">Order Katering</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>menu"><i class="icon-align-justify"></i><span class="hidden-tablet">Menu Katering</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>paket"><i class="icon-align-justify"></i><span class="hidden-tablet">Paket Katering</span></a></li>
					</ul>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			<?php } ?>
