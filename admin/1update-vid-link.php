<?php include('header.php');?>
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Link Section</h1>
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
							<a href="#">Link Section</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="show-imp-link.php">Update Link</a>
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
									<i class="fa fa-list"></i>Update Link Form</h3>
							</div>
							<div class="box-content nopadding">
								<form action="#" method="POST" class='form-horizontal form-column form-bordered'>
									<div class="row">
									
												 <?php 
									 include('connection.php');
				                     $id=$_GET['id'];
									 $counter = 0;
									 $sql="select * from tblink where linkid='$id'";
									  $r=mysqli_query($con,$sql);
								      while($row=mysqli_fetch_array($r))
								      {
								     ?>
											
										<div class="col-sm-6">
											<div class="form-group">
												<label for="textfield" class="control-label col-sm-2">About</label>
												<div class="col-sm-10">
													<input type="text" name="linktxt" id="linktxt" value="<?php echo $row['linktxt'];?>" class="form-control" required="true">
												</div>
											</div>

											<div class="form-group">
												<label for="textarea" class="control-label col-sm-2">Treatment</label>
												<div class="col-sm-10">
												<input type="text" name="linktreat" id="linktreat" value="<?php echo $row['linktreat'];?>" class="form-control" required="true">
												</div>
											</div>
											<div class="form-group">
												<label for="textarea" class="control-label col-sm-2">Video Type</label>
												<div class="col-sm-10">
												<input type="text" name="linktype" id="linktype" value="<?php echo $row['linktype'];?>" class="form-control" required="true">
												</div>
											</div>

										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="textarea" class="control-label col-sm-2">URL</label>
												<div class="col-sm-10">
													<textarea name="linkurl" id="linkurl" rows="5" class="form-control"><?php echo $row['linkurl'];?></textarea>
														<iframe width="100%" height="265px" src="<?php echo $row['linkurl'];?>" allowfullscreen=""></iframe>
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
									  <?php } ?>
									</div>
							 <?php 
											include('connection.php');
											if(isset($_POST['btn']))
											{
											$linktxt=$_POST['linktxt'];
											$linkurl=$_POST['linkurl'];
											$linktreat=$_POST['linktreat'];
											$query="update tblink set linktxt='$linktxt',linkurl='$linkurl' ,linktreat='$linktreat',linktype='$linktype' where linkid='$id'";
											if(mysqli_query($con,$query))
											{
											echo "<script> alert('Link Updated Successfully');</script>";
                                            echo '<script>window.location.href = "show-vid-link.php";</script>';
											}
											else{
											echo mysqli_error($dbcon);
											}
											}
											?>
							
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
