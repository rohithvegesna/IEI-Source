<html>
<head>
<title>I.E.I</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"><meta name="description" content="Tech Rendezvous 2k15 aims to improve the learning experience of students. It provides a platform to apply knowledge acquired from books and classrooms. with many practical events to overwhelm the student talent in the their respective field.">
<meta name="keywords" content="tech,techfest,fest,carnival,technology,tech fest,gitam,gitam university">
<meta name="author" content="Rohith Vegesna">
<link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico">
<style>
	body {
	 -webkit-user-select: none;
	 -moz-user-select: none;
	 -ms-user-select: none;
	 -o-user-select: none;
	user-select: none;          
	}
</style>
<script language="javascript">
	document.onmousedown=disableclick;
	status="Right Click Disabled";
	Function disableclick(event)
	{
	  if(event.button==2)
	   {
		 alert(status);
		 return false;    
	   }
	}
</script>
<script language="JavaScript">
		document.onkeypress = function (event) {
			event = (event || window.event);
			if (event.keyCode == 123) {
				return false;
			}
		}
		document.onmousedown = function (event) {
			event = (event || window.event);
			if (event.keyCode == 123) {
				return false;
			}
		}
	document.onkeydown = function (event) {
			event = (event || window.event);
			if (event.keyCode == 123) {
				return false;
			}
		}
</script>
</head>
<body>

<script language="JavaScript">
window.open('check.php','I.E.I','
height='320,width=320,scrollbars,resizable');
</script>

<?php

$content ='<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.0.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = \'search=\'+ searchid;
if(searchid!=\'\')
{
    $.ajax({
    type: "POST",
    url: "member/functions/checksearch.php",
    data: dataString,
    cache: false,
    success: function(html)
    {
    $("#result").html(html).show();
    }
    });
}return false;    
});

jQuery("#result").live("click",function(e){ 
    var $clicked = $(e.target);
    var $name = $clicked.find(\'.name\').html();
    var decoded = $("<div/>").html($name).text();
    $(\'#searchid\').val(decoded);
});
jQuery(document).live("click", function(e) { 
    var $clicked = $(e.target);
    if (! $clicked.hasClass("search")){
    jQuery("#result").fadeOut(); 
    }
});
$(\'#searchid\').click(function(){
    jQuery("#result").fadeIn();
});
});
</script>

<script type="text/javascript">
  (function() {
    var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
    po.src = "https://apis.google.com/js/plusone.js";
    var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<style type="text/css">
    .content{
        width:50%;
        margin:0 auto;
    }
    #searchid
    {
        width:100%;
        border:solid 1px #000;
        padding:10px;
        font-size:14px;
    }
    #result
    {
        position:absolute;
        width:50%;
        padding:10px;
        display:none;
        margin-top:-1px;
        border-top:0px;
        overflow:hidden;
        border:1px #CCC solid;
        background-color: white;
    }
    #submit
    {
        width:25%;
        color: white;
		background-color: #5cb85c;
		border-color: #4cae4c;
		background-image: none;
		border: 1px solid transparent;
		border-radius: 4px;
		touch-action: manipulation;
		cursor: pointer;
		display: inline-block;
		padding: 6px 12px;
		margin-bottom: 0;
		font-size: 14px;
		font-weight: 400;
		line-height: 1.42857143;
		text-align: center;
		white-space: nowrap;
		vertical-align: middle;
    }
    .show
    {
        padding:10px; 
        border-bottom:1px #999 dashed;
        font-size:15px; 
        height:10%;
    }
    .show:hover
    {
        background:#4c66a4;
        color:#FFF;
        cursor:pointer;
    }
</style>

<div class="content">
<form action="'.$_SERVER['PHP_SELF'].'" method="get" autocomplete="off">
<input type="text" class="search" id="searchid" name="code" placeholder="Search for people" /><br /><input id="submit" type="submit">
</form> 
<div id="result"></div>
</div><br />';
	echo $content;
?>
<?php 

error_reporting(0);

	include_once("member/db.php"); 

	$code = $_GET["code"];
	
	$sql = "SELECT FullName, Branch, Amnt, IsAdmin FROM clients WHERE Code='$code'";
	$qury = mysqli_query($conn, $sql);
	$array = mysqli_fetch_array($qury);
		echo '<div style="text-align: center;font-weight: bold;">Name:<div style="text-transform:uppercase;font-size: 80px;">'.$array['FullName'].'</div><br/>'.
		'Branch:<div style="text-transform:capitalize;font-size: 50;">'.$array['Branch'].'</div><br/>'.
		'EB Member:<div style="text-transform:capitalize;font-size: 50;">'.$array['IsAdmin'].'</div><br/>'.
		'Amount:<div style="color:green;text-transform:uppercase;font-size: 100px;">'.$array['Amnt'].'</div><br/></div>';
?>

</body>
</html>