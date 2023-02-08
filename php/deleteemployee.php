<?php
require 'config1.php';

if(isset($_GET['delete'])){
		$delete_id=$_GET['delete'];
		
		$sqldelete="DELETE FROM employee WHERE nic = '$delete_id'";
		
		if(mysqli_query($conn,$sqldelete))
		{
			header("location: showemployee.php");
	    }
		else
		{
			echo"<script type='text/javascript'>
					alert('Not Deleted')
				</script>";
		}
	}
?>	