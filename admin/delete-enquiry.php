<?php
				include('connection.php');
				$id=$_GET['id'];
			$query="delete from tbenq where enqid='$id'";
				if(mysqli_query($con,$query))
				{
				
				header("location:show-enquiry.php");
                
				}
				else
				{
				echo "<script> alert(' Error');</script>";

				}
           ?>