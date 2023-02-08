<?php
require 'config.php';

if(isset($_GET['delete'])){
		$delete_id=$_GET['delete'];
		
		$sqldelete="DELETE FROM claim WHERE IID = '$delete_id'";
		
		if(mysqli_query($conn,$sqldelete))
		{
			header("location:claimselect.php");
	    }
		else
		{
			echo"<script type='text/javascript'>
					alert('Not Deleted')
				</script>";
		}
	}
?>	