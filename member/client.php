        <div id="page-wrapper">
           <div id="page-inner">
			<div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <?php include './title.php'; ?>
						<div class="text-center"><h3>Welcomes you</h3></div>
                        <p class="text-center">Its time to bring your thoughts out. We are here with a new platform to idealize your thoughts.</p>
                    </div>
                </div>
				<div class="col-md-12">
					<div class="jumbotron">
						<div class="text-center"><h2>Please fill up your details to get Correct ID</h2></div>
						<p class="text-center">Any problem regarding membership card please report a problem or send us a mail to <a href="mailto:report@ieiscgitam.in" target="_blank">report@ieiscgitam.in</a> or you can call to our dev team : <a href="tel:9640230600" target="_blank">9640230600</p>
						<p class="text-center">
							<a href="profile.php" class="btn btn-primary btn-lg" role="button">Details</a></p>
					</div>
				</div>
				<div class="col-md-12">
					<div class="jumbotron">
						<div class="text-center"><h2>Get your ID card</h2></div>
						<p class="text-center">Any problem regarding membership card please report a problem or send us a mail to <a href="mailto:report@ieiscgitam.in" target="_blank">report@ieiscgitam.in</a> or you can call to our dev team : <a href="tel:9640230600" target="_blank">9640230600</p>
						<p class="text-center">
							<a href="id.php" class="btn btn-primary btn-lg" role="button">Get Your ID</a>
						</p>
					</div>
				</div>
				<div id="fest" class="col-md-12">
<?php
	include_once('db.php');
		
	$sql = "SELECT COUNT(Amnt) FROM clients WHERE UserName='".$_SESSION['userName']."'";
	$qury = mysqli_query($conn, $sql);
	$array = mysqli_fetch_array($qury);
	if(intval($array[0]) != 1)
	{
		echo '<div class="jumbotron">
						<div class="text-center"><h2>Join Fest <i class="fa fa-smile-o"></i></h2></div>
						<p class="text-center">College fests are the most cherished memories in the minds of a student. We promise you a great time at GITAM University, Tech Rendezvous! We cordially invite you to participate in out fest! Make the rendezvous happen! Joining us is just a click away!<i class="fa fa-arrow-down"></i></p>
						<p class="text-center">
							<button type="button" class="btn btn-primary btn-lg" data-toggle="collapse" data-target="#demo">Join now <i class="fa fa-smile-o"></i></button>
							<div id="demo" class="collapse">
								<form role="form" action="functions/joinfest.php" method="post" autocomplete="off">
									<div class="form-group">
										<label for="usr">Ticket Code:</label>
										<input type="text" class="form-control" id="ticket" name="ticket" placeholder="TICKET CODE" required />
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-success"></input>
									</div>
								</form>
							</div>
						</p>
					</div>';
	}
	else
	{
	$sql = "SELECT Joinfest FROM clients WHERE UserName='".$_SESSION['userName']."'";
	$qury = mysqli_query($conn, $sql);
	$array = mysqli_fetch_array($qury);
		echo '<div class="jumbotron">
				<div class="text-center"><h2>Join Fest <i class="fa fa-smile-o"></i></h2></div>
				<p class="text-center">Select events you want to participate<i class="fa fa-arrow-down"></i><br />Now you are participating in - '.$array['Joinfest'].'</p>
				<p class="text-center">
					<form role="form" action="functions/events.php" method="post" autocomplete="off">
						<div class="checkbox">
						  <label><input type="checkbox" value="event" name="event">event</label>
						</div>
						<div class="form-group text-center">
							<input type="submit" class="btn btn-success"></input>
						</div>	
					</form>
				</p>
			</div>';
	}
?>
				</div>
            </div>
           </div>