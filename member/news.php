<?php
	include_once 'functions/sessionvalidator.php';	
	
	$_SESSION['PageTitle'] = 'News';
	include_once './header.php';
?>
<script>
function showRSS(str) {
  if (str.length==0) { 
    document.getElementById("rssOutput").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("rssOutput").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","functions/getrss.php?q="+str,true);
  xmlhttp.send();
}
</script>

        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                <div class="col-md-12">
                    <form>
						<div class="form-group">
							  <label for="sel1">Type of news:</label>
							  <select class="form-control" id="sel1" onchange="showRSS(this.value)">
									<option value="">Type of news:</option>
									<option value="Head">Headlines</option>
									<option value="International">International</option>
									<option value="Cricket">Cricket</option>
							  </select>
						</div>
						</form>
						<br>
						<div id="rssOutput"></div>
                </div>
<script type="text/javascript"> 

function stopRKey(evt) { 
  var evt = (evt) ? evt : ((event) ? event : null); 
  var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
  if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
} 

document.onkeypress = stopRKey; 

</script> </div>
	<?php include './footer.php'; ?>
