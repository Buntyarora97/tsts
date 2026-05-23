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
							<a href="add-vid-link.php">Add Video</a>
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
									<i class="fa fa-list"></i>Add Video Form</h3>
							</div>
							<div class="box-content nopadding">
								<form action="#" method="POST" class='form-horizontal form-column form-bordered'>
									<div class="row">
									 <?php 
											include('connection.php');
											if(isset($_POST['btn']))
											{
											$linktxt=$_POST['linktxt'];
											$linkurl=$_POST['linkurl'];
											$linktreat=$_POST['linktreat'];
											$linktype=$_POST['linktype'];
											$query="insert into tblink(linktxt,linkurl,linktreat,linktype) values('$linktxt','$linkurl','$linktreat','$linktype')";
											if(mysqli_query($con,$query))
											{
											echo "<script> alert('Video Added Successfully');</script>";
											}
											else{
											echo mysqli_error($con);
											}
											}
											?>
											
											
										<div class="col-sm-6">
											<div class="form-group">
												<label for="textfield" class="control-label col-sm-3">About Video</label>
												<div class="col-sm-9">
													<input type="text" name="linktxt" id="linktxt" rows="2" placeholder="Enter link text" class="form-control">
												</div>
											</div>
												<div class="form-group">
												<label for="textfield" class="control-label col-sm-3">Video For</label>
												<div class="col-sm-9">
													<select class="form-control" name="linktype">
														<option>Treatment</option>
															<option>Review</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
										<div class="form-group">
												<label for="textfield" class="control-label col-sm-3">URL</label>
												<div class="col-sm-9">
													<input type="text" name="linkurl" id="linkurl" placeholder="Enter link URL" class="form-control" required="true">
												</div>
											</div>
											<div class="form-group">
												<label for="textfield" class="control-label col-sm-3">Treatment</label>
												<div class="col-sm-9">
													<select class="form-control" name="linktreat">
															<option>Wrinkles Treatment</option>
															<option>Hair Removal</option>
															<option>Warts Removal</option>
															<option>De-Pigmentation</option>
															<option>Keloid Treatment</option>
															<option>Mole Removal</option>
															<option>Dark Circles Removal</option>
															<option>Skin Re-Surfacing</option>
															<option>Acne Scar Treatment</option>
															<option>Permanent Tattoo Removal</option>
															<option>Scar Removal</option>
															<option>Xanthelasma Removal</option>
															<option>Burns Treatment</option>
															<option>Helios 2</option>
															<option>Fractional CO2</option>
															<option>HIFU</option>
															<option>IPL</option>
															<option>Diode laser</option>
															<option>YAG laser</option>
													</select>
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
