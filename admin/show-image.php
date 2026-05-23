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
							<a href="show-image.php">Update Images</a>
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
									Update Images
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-hover table-nomargin">
									<thead>
										<tr>
										<th>Sr. No.</th>
											<th> Image</th>
											<th>Image Description</th>
											<th colspan="3" class='hidden-480'>Update Details</th>
										</tr>
									</thead>
									 <?php 
									 include('connection.php');
									 $counter = 0;
									 $sql="select * from tbimg where imgtyp='Gallery' order by imgid desc";
									  $r=mysqli_query($con,$sql);
								      while($row=mysqli_fetch_array($r))
								      {
								     ?>
									<tbody>
										<tr>
											<td><?php echo ++$counter; ?></td>
											<td>
												<img src="images/upload/gallery/<?php echo $row['imgurl'];?>" alt="" height="80px">
											</td>
											<td class='hidden-350'><?php echo $row['imgnam'];?></td>
											<td class='hidden-480'><a class="btn btn-primary" href="update-image.php?id=<?php echo $row['imgid'];?>">Update</a></td>
											<td class='hidden-480 deletebtn'><a class="btn btn-danger" href="delete-image.php?id=<?php echo $row['imgid'];?>">Delete</a></td>
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
	<script type="text/javascript">
    $('.deletebtn').click(function(e){
        var result = confirm("Are you sure you want to delete this?");
        if(!result) {
            e.preventDefault();
        }
    });
</script>
</body>

</html>
