<?php
require 'config1.php';

if(isset($_GET['delete'])){
		$delete_id=$_GET['delete'];
		
		$sqldelete="DELETE FROM signup WHERE email = '$delete_id'";
		
		if(mysqli_query($conn,$sqldelete))
		{
			header("location: showsignup.php");
	    }
		else
		{
			echo"<script type='text/javascript'>
					alert('Not Deleted')
				</script>";
		}
	}
?>	