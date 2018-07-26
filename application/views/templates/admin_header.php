<!DOCTYPE html>
<html>
<head>
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/theme.css">
	<title>Kamus Online</title>
	<script>
		$(document).ready(function(){
			$("input[name='checkAll']").click(function(){
				var checked = $(this).attr("checked");
				$("#myTable tr td input:checkbox").attr("checked", checked);
			});
		});
	</script>
</head>
<body>
		<header>
			<div class="container">
				<div id="logoArea">
					<img src="<?php echo base_url(); ?>assets/img/logo.png" width="75px">
					<div id="logo">
						<h3>Kamus Online</h3>
						<p>Inggris - Indonesia</p>
					</div>
				</div>
			</div>
		</header>
		<nav class="navbar navbar-inverse" style="padding: 0 24px;">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="mainNavBar">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo site_url('admin');?>">Home</a></li>
					<li><a href="<?php echo site_url('input_data'); ?>">Input Data</a></li>
					<li><a href="<?php echo site_url('admin/logout'); ?>">Log Out</a></li>
				</ul>
			</div>
		</div>
		</nav>

