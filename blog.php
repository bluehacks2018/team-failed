
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bayan ni Juan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="css/nav-bar.css">

	<link rel="stylesheet" type="text/css" href="css/image-holder.css">

	<style>
		/* The Modal (background) */
		.modal {
		    display: none; /* Hidden by default */
		    position: fixed; /* Stay in place */
		    z-index: 1; /* Sit on top */
		    padding-top: 100px; /* Location of the box */
		    left: 0;
		    top: 0;
		    width: 100%; /* Full width */
		    height: 100%; /* Full height */
		    overflow: auto; /* Enable scroll if needed */
		    background-color: rgb(0,0,0); /* Fallback color */
		    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
		    background-color: #fefefe;
		    margin: auto;
		    padding: 20px;
		    border: 1px solid #888;
		    width: 30%;
		}

		/* The Close Button */
		.close {
		    color: #aaaaaa;
		    float: right;
		    font-size: 28px;
		    font-weight: bold;
		}

		.close:hover,
		.close:focus {
		    color: #000;
		    text-decoration: none;
		    cursor: pointer;
		}
		</style>

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<header id="fh5co-header">
			<?php include ('pages/nav-bar.php'); ?>
		</header>
	<div id="fh5co-wrap">
		<header id="fh5co-header">
			<?php include ('pages/nav-bar.php'); ?>
		</header>

		<div class="fh5co-hero" style="background-image: url(images/0005-baec-painting1-e1448047881412.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1 class="text-center">"Pilipinas: Magbayanihan tayo"</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
<div id="myModal" class="modal">

		  <!-- Modal content -->
		  <div class="modal-content">
		    <span class="close">&times;</span>
		    	<form method="POST" action="adminlogin.php">
		    			Administrator Login
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder=Username required />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-lg" style="width: 100%;" value="Login"/>
                        </div>
                    </form>
		  </div>

		</div>


		

		<div class="fh5co-section">
			<div class="container">

				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<h2><b>Mga listahan ng Palabas<b></h2>
							</div>
						</div>
					</div>
					<div class="col-md-6">


<?php

$con = mysql_connect('localhost','root','');
$sel = mysql_select_db('demo',$con);

	$sql = mysql_query("SELECT * FROM video WHERE status = 1")or die("".mysql_error());
	while ($row = mysql_fetch_array($sql)) {


	echo "

		<h2>@".$row['name']."</h2>
		<p>".$row['caption']."</p>

		<video width='500' height='300' controls>
				<source src='videos/".$row['video_name']."' type='video/mp4'>
				</video>	<br>

				";

			
		}
?>

</div>
<div class="col-md-6">
	<h1>Sign up</h1>

	<!-- 
	<form method="post" action="addaccount.php">

	<input type="text" name="lastname" placeholder="Last name" class="form-control">
	<input type="text" name="firstname" placeholder="First name" class="form-control">
	<input type="text" name="contactno" placeholder="Contact no" class="form-control">
	<input type="text" name="username" placeholder="User name" class="form-control">
	<input type="password" name="password" placeholder="Password" class="form-control">
	<br>
	<input type="submit" class="btn btn-success" value="Create" name="add">
	<a href="#" id="toggle" class="btn btn-primary">Sign in</a>

	</form>



	<div id="show1">
	<form method="post" action="account.php">

	<input type="text" name="username" placeholder="User name" class="form-control">
	<input type="password" name="password" placeholder="Password" class="form-control">
	<input type="submit" class="btn btn-success" value="Login" name="add">



	</form>
	</div>
	 -->
 <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Sign in</a></li>
    <li><a data-toggle="tab" href="#menu1">Sign up</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    
<form method="post" action="login.php">
	<div class="form-group">
		<input type="text" name="username" placeholder="User name" class="form-control">
	</div>
	<div class="form-group">
		<input type="password" name="password" placeholder="Password" class="form-control"><br>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-info" value="Login" name="submit">
	</div>
</form>


    </div>

	    <div id="menu1" class="tab-pane fade">

			<form method="post" action="addaccount.php">

				<div class="form-group">
					<input type="text" name="lastname" placeholder="Last name" class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="firstname" placeholder="First name" class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="contactno" placeholder="Contact no" class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="username" placeholder="User name" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" name="password" placeholder="Password" class="form-control">
				</div>
				<br>
				<div class="form-group">
					<input type="submit" class="btn btn-success" value="Create" name="add">
				<a href="#" id="toggle" class="btn btn-primary">Sign in</a>
				</div>

			</form>

	    </div>

    </div>

	</div>

</div>
	<div class="col-md-6"><br><br>
			<div class="container">
				<img src="images/share-story.jpg" alt="Avatar" style="width:auto; height:250px;"><br><br>
				<p>If you have story . Just <a href="">send to us.</a></p>
			</div>
	</div>
	</div></div>
	</div> <!-- END fh5co-wrap -->


	<footer id="fh5co-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-copyright text-center">
					<h3>About Us</h3>
					<p>This site provides information on how beautiful the Philippines is.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 fh5co-copyright text-center">
					<p><small>&copy; 2018 BLUEHACK . Team FAILED </small> 
				</div>
			</div>
		</div>
	</footer>

	<script>
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal 
	btn.onclick = function() {
	    modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	    modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}
	</script>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

