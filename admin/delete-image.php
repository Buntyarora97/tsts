<?php
				include('connection.php');
				$id=$_GET['id'];

				$query="delete from tbimg where imgid='$id'";
				if(mysqli_query($con,$query))
				{
				header("refresh:1;show-image.php");
				}
				else
				{
				echo "<script> alert(' Error');</script>";

				}
?>