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
							<a href="show-vid-link.php">Update Video</a>
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
						
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="fa fa-table"></i>
									Update Video Link
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-hover table-nomargin">
									<thead>
										<tr>
										<th>Sr. No.</th>
											<th>Image</th>
											<th>About</th>
											<th>Video</th>
											<th colspan="3" class='hidden-480'>Update Details</th>
										</tr>
									</thead>
									 <?php 
									 include('connection.php');
									 $counter = 0;
									 $sql="select * from tblink where linktype='Video Gallery' order by linkid desc";
									  $r=mysqli_query($con,$sql);
								      while($row=mysqli_fetch_array($r))
								      {
								     ?>
									<tbody>
										<tr>
											<td><?php echo ++$counter; ?></td>
											<td>
												<img src="images/upload/gallery/<?php echo $row['linkimg'];?>" width="200px">
											</td>
											<td class='hidden-350'><?php echo $row['linktxt'];?></td>
											<td class='hidden-350'>	<iframe width="100%" height="150px" src="<?php echo $row['linkurl'];?>" allowfullscreen=""></iframe></td>
											<td class='hidden-480'><a class="btn btn-primary" href="update-vid-gal.php?id=<?php echo $row['linkid'];?>">Update</a></td>
											<td class='hidden-480'><a class="btn btn-danger" href="delete-vid-gal.php?id=<?php echo $row['linkid'];?>">Delete</a></td>
										</tr>
									</tbody>
									  <?php } ?>
								</table>
							</div>
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
