<?php
session_start();
if(!isset($_SESSION['nid']))
{
    header('location:login.php');
   
}
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title> Admin - Dr. Nagpal Laser Centre</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins/jquery-ui/jquery-ui.min.css">
	<link rel="stylesheet" href="css/plugins/pageguide/pageguide.css">
	<link rel="stylesheet" href="css/plugins/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" href="css/plugins/fullcalendar/fullcalendar.print.css" media="print">
	<link rel="stylesheet" href="css/plugins/chosen/chosen.css">
	<link rel="stylesheet" href="css/plugins/select2/select2.css">
	<link rel="stylesheet" href="css/plugins/icheck/all.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/themes.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery-ui.js"></script>
	<script src="js/plugins/touch-punch/jquery.touch-punch.min.js"></script>
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins/vmap/jquery.vmap.min.js"></script>
	<script src="js/plugins/vmap/jquery.vmap.world.js"></script>
	<script src="js/plugins/vmap/jquery.vmap.sampledata.js"></script>
	<script src="js/plugins/bootbox/jquery.bootbox.js"></script>
	<script src="js/plugins/flot/jquery.flot.min.js"></script>
	<script src="js/plugins/flot/jquery.flot.bar.order.min.js"></script>
	<script src="js/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="js/plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<script src="js/plugins/pageguide/jquery.pageguide.js"></script>
	<script src="js/plugins/fullcalendar/moment.min.js"></script>
	<script src="js/plugins/fullcalendar/fullcalendar.min.js"></script>
	<script src="js/plugins/chosen/chosen.jquery.min.js"></script>
	<script src="js/plugins/select2/select2.min.js"></script>
	<script src="js/plugins/icheck/jquery.icheck.min.js"></script>
	<script src="js/plugins/validation/jquery.validate.min.js"></script>
	<script src="js/plugins/validation/additional-methods.min.js"></script>
	<script src="js/eakroko.min.js"></script>
	<script src="js/application.min.js"></script>
	<script src="js/demonstration.min.js"></script>

	<link rel="shortcut icon" href="img/favicon.ico" />
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />
</head>
<style>
#navigation {
    background: #231f20;
    position: relative;
    z-index: 100;
}
#left {
	background: #231f20;
}
#left .subnav .subnav-title .toggle-subnav {
    color: #fff !important;    
}
#left .subnav .subnav-menu > li > a {
    color: #acacac !important;    
}
#left .subnav .subnav-menu > li > a:hover {
    background: #ddd;
    color: #222  !important; 
}
.box.box-color .box-title {
    background:#908d8a !important;
}
.box.box-bordered.box-color .box-title {
    border-color: transparent;
}
.box.box-bordered.box-color .box-content {
    border: solid 1px lightgrey;
}
.btn.btn-primary {
    color: #fff;
    background-color: #28a745 !important;
	padding:8px;
	border-radius:5px;
}
.btn-danger{
	background-color:#dc3545 !important;
	padding:8px !important;
	border-radius:5px !important;
}
</style>
<body>
    <div id="navigation">
		<div class="container-fluid">
			<!-- <strong style="padding-bottom: 20px; color:#fff;">Dr. Nagpal's Cosmetic Laser Centre</strong> -->
			<img src="../assets/img/logo/logonew.png" width="95px">
			<a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom">
				<i class="fa fa-bars"></i>
			</a>
			<div class="user">
				<ul class="icon-nav">
					<li class='dropdown'>
						<a href="#" class='dropdown-toggle' data-toggle="dropdown">
							<i class="fa fa-envelope"></i>
						</a>
						<ul class="dropdown-menu pull-right message-ul">
							 <?php 
									 include('connection.php');
									 $counter = 0;
									 $sql="select * from tbenq order by enqid desc limit 3";
									  $r=mysqli_query($con,$sql);
								      while($row=mysqli_fetch_array($r))
								      {
								     ?>
						 							<li>
								<a href="#">
									<img src="images/icon-user.png" alt="">
									<div class="details">
										<div class="name"><?php echo $row['enqnam'];?></div>
										<div class="message">
											<?php echo $row['enqsub'];?>			</div>
									</div>
								</a>
							</li>
									  <?php } ?>
							 <li>
								<a href="show-enquiry.php" class='more-messages'>Go to All Enquiries
									<i class="fa fa-arrow-right"></i>
								</a>
							</li>
					</ul>
					</li>
				</ul>
				<div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown">Admin
						<img src="images/icon-user.png" alt="">
					</a>
					<ul class="dropdown-menu pull-right">
							<li>
							<a href="change-password.php">Change Password</a>
						</li>
						<li>
							<a href="logout.php">Log out</a>
						</li>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="content">
	<div id="left">
		    <div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Enquiry Section</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="add-enquiry.php">Add Enquiry</a>
					</li>
					<li>
						<a href="show-enquiry.php">Update Enquiry</a>
					</li>
					</ul>
			</div>
		<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Media Section</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="add-image.php">Add Images</a>
					</li>
				<li>
						<a href="show-image.php">Update Images</a>
					</li>
				</ul>
			</div>
				<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Treatment Gallery</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="add-treatment.php">Add Images</a>
					</li>
				<li>
						<a href="show-treatment.php">Update Images</a>
					</li>
				</ul>
			</div>
			<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Video Section</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="add-vid-link.php">Add Video</a>
					</li>
				<li>
						<a href="show-vid-link.php">Update Video</a>
					</li>
					<li>
						<a href="add-vid-gal.php">Add Video Gallery</a>
					</li>
				<li>
						<a href="show-vid-gal.php">Update Video Gallery</a>
					</li>
				</ul>
			</div>
			
		</div>
		