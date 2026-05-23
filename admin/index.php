<?php


session_start();
include 'connect.php'; 
if(!isset($_SESSION['username']))
{
    header("location:login-admin.php");
}
    
    $x=0;
?>
<!DOCTYPE html>
<html>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dr Nagpal Skin Hair</title>
	</head>
	<body>
	<?php include('header.php');?>
	<?php include('sidebar.php');?>
	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
                <?php 
                $q=mysqli_query($conn,"select * from result");
                $cnt=mysqli_num_rows($q);?>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
							<div class="large"><?php echo $cnt; ?></div>
							<div class="text-muted"><a href="managecategory.php">Result</a></div>
						</div>
					</div>
				</div>
                <?php 
                $q=mysqli_query($conn,"select * from gallery ");
                $cnt=mysqli_num_rows($q);?>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
							<div class="large"><?php echo $cnt; ?></div>
                            <div class="text-muted"><a href="managesubcategory.php">Gallery</a></div>
						</div>
					</div>
				</div>
                 
            
               
			</div><!--/.row-->
		</div>
	
	</div>	<!--/.main-->
	<?php include'footer.php';?>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>


</html>
