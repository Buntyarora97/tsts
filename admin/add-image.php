<?php include('header.php');?>
<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Gallery Section</h1>
					</div>
					<div class="pull-right">
						<ul class="stats">
							<li class='lightred'>
								<i class="fa fa-calendar"></i>
								<div class="details">
									<span class="big"><?php
                                           echo $date = date("F j,Y");  ?></span>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="#">Gallery Section</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="add-image.php">Add Images</a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="box box-color">
							<div class="box-title">
								<h3>
									<i class="fa fa-list"></i>Add Images Form</h3>
							</div>
							<div class="box-content nopadding">
								<form action="#" method="POST" enctype="multipart/form-data" class='form-horizontal form-column form-bordered'>
									<div class="row">
									 <?php 
											include('connection.php');
											$msg="";
											$imgurl="";
											$imgurltmp="";
											  if(isset($_POST['btn']))
											  {
												  $imgnam=$_POST['imgnam'];
												  if(isset($_FILES['imgurl'])){
												   $imgurl=$_FILES['imgurl']['name'];
												  $imgurltmp=$_FILES['imgurl']['tmp_name'];
												  }
												  $sql="Insert into tbimg (imgnam,imgurl,imgsta,imgtyp) values ('$imgnam','$imgurl','Active','Gallery')";
												  if(mysqli_query($con,$sql))
												  {
												   echo "<script> alert('Image Uploaded Successfully');</script>";
												  move_uploaded_file($imgurltmp,'images/upload/gallery/'.$imgurl);
												 
												  }
												  else
												 {
												 mysqli_error($con);
													   echo "<script> alert('Error');</script>";
											  } 
											  }
											?>
											
										
										<div class="col-sm-6">
											<div class="form-group">
												<label for="file" class="control-label col-sm-3">Select Image</label>
												<div class="col-sm-9">
													<input type="File" id="imgurl" name="imgurl" required="true" />
												</div>
											</div>
										</div>
											
										<div class="col-sm-6">
											<div class="form-group">
												<label for="textfield" class="control-label col-sm-3">About Image</label>
												<div class="col-sm-9">
													<input type="text" name="imgnam" id="imgnam" placeholder="Enter image description" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-actions">
												<button name="btn" id="btn" type="submit" class="btn btn-primary">Submit</button>
											</div>
										</div>
									</div>
							
								</form>
							</div>
						</div>
					</div>
				</div>
				
				</div>
		</div>
	</div>
	
</body>

</html>
