<?php include('header.php');?>
<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Admin Section</h1>
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
							<a href="#">Admin Section</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="change-password.php">Change Password</a>
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
									<i class="fa fa-list"></i>Change Password Form</h3>
							</div>
							<div class="box-content nopadding">
								<form action="#" method="POST" class='form-horizontal form-column form-bordered'>
									<div class="row">

    	<?php 
        $usrnam="";
        include_once("connection.php");
        $id=1;
    		if(isset($_POST['btn']))
    		{
    		$oldpwd=$_POST['oldpwd'];
    		$newpwd=$_POST['newpwd'];
			//echo $_SESSION['usrnam'];
    		$repwd=$_POST['repwd'];
			$q="select * from tbusr where id='$id'";
    		$chg_pwd=mysqli_query($con,$q);
    		$chg_pwd1=mysqli_fetch_array($chg_pwd);
    		$data_pwd=$chg_pwd1['pwd'];
    		if($data_pwd==$oldpwd){
    		if($newpwd==$repwd){
				$q1="update tbusr set pwd='$newpwd' where id='$id'";
    			$update_pwd=mysqli_query($con,$q1);
    			echo "<script>alert('Password Updated Sucessfully'); window.location='logout.php'</script>";
    		    }
    		else{
    			echo "<script>alert('Your new and Retype Password does not match'); window.location='change-password.php'</script>";
    		    }
    		}
    		else
    		{
    		echo "<script>alert('Your old password is wrong'); window.location='change-password.php'</script>";
    		}
			}
			
    	?>
											
										<div class="col-sm-6">
											<div class="form-group">
												<label for="textfield" class="control-label col-sm-2">Old Password</label>
												<div class="col-sm-10">
													<input type="password" name="oldpwd" id="oldpwd" placeholder="Enter old password" class="form-control" required="true">
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="textfield" class="control-label col-sm-2">New Password</label>
												<div class="col-sm-10">
													<input type="password" name="newpwd" id="newpwd" placeholder="Enter new password" class="form-control" required="true">
												</div>
											</div>
											<div class="form-group">
												<label for="textfield" class="control-label col-sm-2">Confirm Password</label>
												<div class="col-sm-10">
													<input type="password" name="repwd" id="repwd" placeholder="Confirm password" class="form-control" required="true">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-actions">
												<input type="submit" name="btn" id="btn" class="btn btn-primary" value="Submit">
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
