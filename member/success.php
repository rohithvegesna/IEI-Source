<?php
	session_start();
	if(!isset($_SESSION['userName'])) { ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" type="image/x-icon" href="../assets/favicon.ico">
    <title>IEI~Client</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/box.css">	
	<link rel="stylesheet" media="screen" href="assets/css/font-awesome.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link href="assets/css/animate.css" rel="stylesheet">
	<script src="assets/js/validatesignup.js" type="text/javascript"></script>
	</head>
	<body style="background: Url(assets/img/gear.gif);color: #fff;max-width: 100%;height: 100%;">
	<style>
		body {
			padding-top: 90px;
		}
		
		ul.dropdown-lr {
		  width: 300px;
		}

		@media (max-width: 768px) {
			.dropdown-lr h3 {
				color: #eee;
			}
			.dropdown-lr label {
				color: #eee;
			}
		}
		.success
		{
			color: green;
		}
		.error
		{
			color: red;
		}
		.content
		{
			width:900px;
			margin:0 auto;
		}
		#username
		{
			width:500px;
			border:solid 1px #000;
			padding:10px;
			font-size:14px;
		}
	</style>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	<div class="container-fluid">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
				<a class="navbar-brand" href="../index.php">I.E.I</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="../index.php">Home</a></li>
					<li><a href="../index.php#about">About</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log In <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu">
                            <div class="col-lg-12">
							<script src="assets/js/validatesignin.js" type="text/javascript"></script>
                                <div class="text-center"><h3><b>Log In</b></h3></div>
                                <form id="signin" name="signin" action="functions/signin.php"  onsubmit="return validateForm1();" method="post" role="form" autocomplete="off">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="pwd" id="pwd" tabindex="2" class="form-control" placeholder="Password" autocomplete="off">
                                    </div>
                                    <div class="form-group"><div class="alert-box errorl" id="luerror" style="width:75%"></div></div>
									<div class="form-group"><div class="alert-box errorl" id="lperror" style="width:75%"></div></div>

                                    <div class="form-group">
                                        <div class="row">
                                    <div class="form-group"><div class="alert-box error" id="luerror" style="width:75%"></div></div>
									<div class="form-group"><div class="alert-box error" id="lperror" style="width:75%"></div></div>
                                            <div class="col-xs-5 pull-right">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="forgot.php" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </ul>
                    </li>
                </ul>
			</div>
		</div>
	</nav>
    
<div class="container text-center">
    <div class="jumbotron" style="color: black;">
       <h1>Signup Successful please LOGIN</h1>
    </div>
</div>

<div class="container text-center">
    <div class="row">
       <p>&copy; IEI <?php echo Date('Y');?> All right reserved. Design & Developed by <a href="http://ieiscgitam.in">IEI Dev Team <i class="fa fa-heart"></i></a></p>
    </div>
</div>
</body>
</html>
<?php } else { echo header('Location: index1.php');}
?>