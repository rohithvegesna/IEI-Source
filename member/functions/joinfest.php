<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	include_once 'sessionvalidator.php';
	include_once('../db.php');
	
	$ticket = mysqli_real_escape_string($conn, $_POST['ticket']);
	
	$sql = "SELECT COUNT(SoldToId) FROM membcodes WHERE Code='$ticket'";
	$qury = mysqli_query($conn, $sql);
	$array = mysqli_fetch_array($qury);
	if(intval($array[0])== 1)
	{
		$sql = "UPDATE clients SET Amnt='$ticket' WHERE UserName='".$_SESSION['userName']."'";
		$qury = mysqli_query($conn, $sql);

		if(!$qury)
		{
			echo "Failed.";
		}
		else
		{
			header('Location: ../index1.php#fest');
		}
	}
	else
	{
		header('Location: ../index1.php');
	}