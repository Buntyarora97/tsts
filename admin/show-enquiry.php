<?php include('header.php');?>
<style>
.table-container {
    overflow: auto;
}
table {
    overflow: hidden;
}
.table-responsive {
    overflow-x: auto; /* Enable horizontal scrolling for small screens */
}

table {
    width: 100%; /* Make the table width 100% to fill the container */
}

</style>

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
				<div cla
				ss="row">
					<div class="col-sm-12">
						
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="fa fa-table"></i>
									Update Enquiry
								</h3>
							</div>
							<div class="box-content nopadding">
							<div class="table-container">
							<div class="table-responsive">

								<table class="table table-hover table-nomargin">
									<thead>
										<tr>
										<th>Sr. No.</th>
											<th>Name</th>
											<th>Mobile No.</th>
											<th class='hidden-350'>Email</th>
											<th class='hidden-1024'>Message</th>
											<th class='hidden-1024'>Enquiry Type</th>
											<th colspan="3" class='hidden-480'>Update Details</th>
										</tr>
									</thead>
									 <?php 
									 include('connection.php');
									 $counter = 0;
									 $sql="select * from tbenq order by enqid desc";
									  $r=mysqli_query($con,$sql);
								      while($row=mysqli_fetch_array($r))
								      {
								     ?>
									<tbody>
										<tr>
											<td><?php echo ++$counter; ?></td>
											<td>
												<?php echo $row['enqnam'];?>
											</td>
											<td class='hidden-350'><?php echo $row['enqmob'];?></td>
											<td class='hidden-1024'><?php echo $row['enqeml'];?></td>
											<td class='hidden-480'><?php echo $row['enqmsg'];?></td>
											<td class='hidden-480'><?php echo $row['enqtyp'];?></td>
											<td class='hidden-480'><a class="btn btn-primary" href="update-enquiry.php?id=<?php echo $row['enqid'];?>">Update</a></td>
											<td class='hidden-480 deletebtn'><a class="btn btn-danger" href="delete-enquiry.php?id=<?php echo $row['enqid'];?>">Delete</a></td>
										</tr>
									</tbody>
									  <?php } ?>
								</table>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
								
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
