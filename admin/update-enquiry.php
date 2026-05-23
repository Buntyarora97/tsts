<?php include('header.php');?>
	<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Enquiry Section</h1>
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
							<a href="#">Enquiry Section</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="show-enquiry.php">Update Enquiry</a>
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
									<i class="fa fa-list"></i>Update Enquiry Form</h3>
							</div>
							<div class="box-content nopadding">
								<form action="#" method="POST" class='form-horizontal form-column form-bordered'>
									<div class="row">
									 <?php 
									 include('connection.php');
				                     $id=$_GET['id'];
									 $counter = 0;
									 $sql="select * from tbenq where enqid='$id'";
									  $r=mysqli_query($con,$sql);
								      while($row=mysqli_fetch_array($r))
								      {
								     ?>
											
											
										<div class="col-sm-6">
											<div class="form-group">
												<label for="textfield" class="control-label col-sm-2">Name</label>
												<div class="col-sm-10">
											<input type="text" name="enqnam" id="enqnam" placeholder="Enter your name" value="<?php echo $row['enqnam'];?>" class="form-control" required="true">
												</div>
											</div>
											<div class="form-group">
												<label for="password" class="control-label col-sm-2">Email</label>
												<div class="col-sm-10">
											<input type="email" name="enqeml" id="enqeml" placeholder="Enter your Email" value="<?php echo $row['enqeml'];?>" class="form-control" required="true">
												</div>
											</div>
											<div class="form-group">
												<label for="textfield" class="control-label col-sm-2">Subject</label>
												<div class="col-sm-10">
													<input type="text" name="enqsub" id="enqsub" placeholder="Enter your Subject" value="<?php echo $row['enqsub'];?>" class="form-control">
												</div></div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="textfield" class="control-label col-sm-2">Mobile</label>
												<div class="col-sm-10">
													<input type="text" name="enqmob" id="enqmob" placeholder="Enter your mobile no." value="<?php echo $row['enqmob'];?>" class="form-control" required="true">
												</div>
											</div>
											<div class="form-group">
												<label for="textarea" class="control-label col-sm-2">Message</label>
												<div class="col-sm-10">
													<textarea name="enqmsg" id="enqmsg" rows="5" class="form-control"><?php echo $row['enqmsg'];?> </textarea>
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
											$id=$_GET['id'];
											if(isset($_POST['btn']))
											{
											$enqnam=$_POST['enqnam'];
											$enqmob=$_POST['enqmob'];
											$enqeml=$_POST['enqeml'];
											$enqsub=$_POST['enqsub'];
											$enqmsg=$_POST['enqmsg'];
											$query="update tbenq set enqnam='$enqnam',enqeml='$enqeml',enqmob='$enqmob',enqsub='$enqsub',enqmsg='$enqmsg' where enqid='$id'";
											if(mysqli_query($con,$query))
											{
											echo "<script> alert('Enquiry Updated Successfully');</script>";
                                            echo '<script>window.location.href = "show-enquiry.php";</script>';
											}

											else{

											echo mysqli_error($con);
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
