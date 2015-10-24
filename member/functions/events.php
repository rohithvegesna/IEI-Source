<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	include_once 'sessionvalidator.php';
	include_once('../db.php');
	
	$event = mysqli_real_escape_string($conn, $_POST['event']);
	
		$sql = "UPDATE clients SET Joinfest='$event' WHERE UserName='".$_SESSION['userName']."'";
		$qury = mysqli_query($conn, $sql);

		if(!$qury)
		{
			echo "Failed.";
		}
		else
		{
			header('Location: ../index1.php#fest');
		}