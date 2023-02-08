<?php
require 'config.php';

if(isset($_GET['delete'])){
		$delete_id=$_GET['delete'];
		
		$sqldelete="DELETE FROM consult WHERE Email = '$delete_id'";
		
		if(mysqli_query($conn,$sqldelete))
		{
			header("location:conselect.php");
	    }
		else
		{
			echo"<script type='text/javascript'>
					alert('Not Deleted')
				</script>";
		}
	}
?>	