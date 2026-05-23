<?php include('header.php');?>
<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Video Section</h1>
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
							<a href="#">Video Section</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="show-vid-gal.php">Update Video Gallery</a>
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
									<i class="fa fa-list"></i>Update Video Gallery Form</h3>
							</div>
							<div class="box-content nopadding">
		<form action="#" method="POST" class='form-horizontal form-column form-bordered' enctype="multipart/form-data">
		<div class="row">
									 <?php 
			include('connection.php');
			$linkid=$_GET['id'];
			$linkimg="";
			$linkimgtmp="";
			if(isset($_POST['btn']))
			{
			$linktxt=$_POST['linktxt'];
			$linkurl=$_POST['linkurl'];
		  if(isset($_FILES['linkimg'])){
		    $linkimg=$_FILES['linkimg']['name'];
		    $linkimgtmp=$_FILES['linkimg']['tmp_name'];
			}
			  if (!empty($_FILES['linkimg']['name'])) {
			$query="update tblink set linktxt='$linktxt',linkurl='$linkurl',linkimg='$linkimg' where linkid='$linkid'";
				if(mysqli_query($con,$query))
				{
				echo "<script> alert('Details Updated Successfully');</script>";
				 move_uploaded_file($linkimgtmp,'images/upload/gallery/'.$linkimg);
				}
				else{
					echo mysqli_error($con);
				   }
			 }
			 else
			 {
		 		$query="update tblink set linktxt='$linktxt',linkurl='$linkurl' where linkid='$linkid'";
				if(mysqli_query($con,$query))
				{
				echo "<script> alert('Details Updated Successfully');</script>";
				}
					else{
											echo mysqli_error($con);
											}
											 }
											}
											?>
											
										 <?php 
									 include('connection.php');
									 $counter = 0;
									 $sql="select * from tblink where linktype='Video Gallery' and linkid='$linkid'";
									  $r=mysqli_query($con,$sql);
								      while($row=mysqli_fetch_array($r))
								      {
								      	$row['linktype'];
								     ?>

										<div class="col-sm-6">
											<div class="form-group">
												<label for="textfield" class="control-label col-sm-3">About Video</label>
												<div class="col-sm-9">
													<input type="text" name="linktxt" id="linktxt" rows="2" placeholder="Enter link text" class="form-control" value="<?php echo $row['linktxt']; ?>">
												</div>
											</div>
											<div class="form-group">
												<label for="textfield" class="control-label col-sm-3">Image</label>
												<div class="col-sm-9">
													<input type="file" name="linkimg">
		<img src="images/upload/gallery/<?php echo $row['linkimg']; ?>" width="300px">
												</div>
											</div>
										</div>
										<div class="col-sm-6">
										  <div class="form-group">
												<label for="textfield" class="control-label col-sm-3">URL</label>
												<div class="col-sm-9">
													<input type="text" name="linkurl" id="linkurl" placeholder="Enter link URL" class="form-control" required="true" value="<?php echo $row['linkurl']; ?>">
													<iframe width="100%" height="265px" src="<?php echo $row['linkurl'];?>" allowfullscreen=""></iframe>
												</div>
											</div>
											
											

										</div>
									<?php } ?>
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
