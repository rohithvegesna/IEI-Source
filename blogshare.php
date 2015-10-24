<?php 

error_reporting(0);

	include_once("member/db.php"); 

	$code = $_GET["id"];
	
	$sql = "SELECT * FROM blog WHERE ID='$code'";
	$qury = mysqli_query($conn, $sql);
	$array = mysqli_fetch_array($qury);
	mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $array['Heading'];?></title>
	<meta property="og:url"           content="http://ieiscgitam.in/blogshare.php?id=<?php echo $code;?>" />
	<meta property="og:type"          content="Blog" />
	<meta property="og:title"         content="<?php echo $array['Heading'];?>" />
	<meta property="og:description"   content="<?php echo $array['Matter'];?>" />
	<meta property="og:image"         content="http://ieiscgitam.in/assets/img/about/graph.png" />
	<meta name="robots" content="<?php echo $array['Heading'];?>, <?php echo $array['Matter'];?>">
	<meta name="title" content="<?php echo $array['Heading'];?>">
	<meta name="author" content="<?php echo $array['UserName'];?>">
	<meta name="description" content="<?php echo $array['Matter'];?>">
	<meta name="keywords" content="<?php echo $array['Heading'];?>,<?php echo $array['Matter'];?>">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body style="background:Url('https://uncoveringthepast.files.wordpress.com/2012/03/blog-pics2-008.jpg');">

<div class="container" style="text-align:center;"><br />
<div class="jumbotron">
<?php
		$time = gmdate("d-m-Y\ H:i:s\ ", $array['Doe']);
		echo '<h1>'.$array['Heading'].'</h1><div class="col-sm-4" style="color:grey">By :'.$array['UserName'].' <div class="label label-success"> At :'.$time.'</div></div><br />'.
		'<p>'.$array['Matter'].'</p>';
?>
</div>
</div>

</body>
</html>