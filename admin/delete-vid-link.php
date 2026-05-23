         <?php
				include('connection.php');
				$id=$_GET['id'];

				$query="delete from tblink where linkid='$id'";
				if(mysqli_query($con,$query))
				{
				echo "<script> alert('Link Deleted Successfully');</script>";
				header("refresh:1;show-vid-link.php");
				}
				else
				{
				echo "<script> alert(' Error');</script>";
				}


           ?>