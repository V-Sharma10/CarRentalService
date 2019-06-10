<?php
session_start();

session_destroy();

?>



<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Home | Toxotes Rental Serrice  </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/carlogo3.png">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script src="scrolltop.js"></script>

	<style type="text/css">

	html , body{
		width: 100%;
		overflow-x: hidden;
	}
	/* .back-link a {
		color: #4ca340;
		text-decoration: none; 
		border-bottom: 1px #4ca340 solid;
	}
	.back-link a:hover,
	.back-link a:focus {
		color: #408536; 
		text-decoration: none;
		border-bottom: 1px #408536 solid;
	} */

	.entry-header {
		text-align: left;
		margin: 0 auto 50px auto;
		width: 80%;
        max-width: 978px;
		position: relative;
		z-index: 10001;
	}
	#demo-content {
		padding-top: 100px;
	}
	.qual{
		align-content: center;
		/* text-align: center;
		align-items: center;
		align-self: center; */
		margin-right: 10%;
    margin-left: 10%;    
		background-color: #46464675;
		padding-top: 30px;
    margin-bottom: 0px;
    padding-bottom: 10px;
	}
	.pospts{
		margin-left:10%;
	}
	ul i{
		width:2%;
		padding: 0;
		margin: 0;
	}
	.fa-2x{
		font-size: 25px;
	}
	.p-5{
padding:0 35px 0 20px!important;

	}
	.top{
		position: fixed;
		top:90%;
		right:5%;
		z-index: 1500;
	}
	</style>
</head>
<body class="demo">	
	<div id="demo-content">

		<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>
 
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="main-nav">
		<div class="container">
		  <a href="index.php" class="navbar-brand"><img class="mb-4" src="img/carlogo3.png" alt="" width="72" height="72">
        <img class="mb-4" src="img/head2.png" alt="" width="150" height="40"></a>
		  <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item">
				<a href="index.php" class="nav-link">Home &nbsp;&nbsp;</a>
			  </li>
			  <!-- <li class="nav-item">
				<a href="#explore-head-section" class="nav-link">Explore</a>
			  </li>
			  <li class="nav-item">
				<a href="#create-head-section" class="nav-link">Create</a>
			  </li> -->
			  <li class="nav-item">
				<button class="btn btn-danger" data-toggle="modal" data-target="#contactModal">Login</button>
			  </li>
	
			</ul>
		  </div>
		</div>
	  </nav>
	
	  <!-- HOME SECTION -->
	  <header id="home-section">
		<div class="dark-overlay">
		  <div class="home-inner ">
			<center>	<h1 class="display-4" style="font-family: 'Pacifico', cursive;padding: 0 1%;">Toxotes Rental Service <br></h1></center><br><br>
		
			  <div class="jumbotron qual">
				<h3 class="" style="align-self: center;align-content: center;text-align: center;">
				  <strong>The Right Car Only For
				  You</strong>
				</h3>
				<br>
				<div class="pospts">
				  <!-- <div class="p-4 align-self-start"> -->
					<i class="fas fa-check fa-2x"></i>
				  <!-- </div> -->
				  <!-- <div class="p-4 align-self-end"> -->
					&nbsp;&nbsp; We have more than a thousand cars for you to choose.<br>
				  <!-- </div> -->
				</div><br>

			
				<div class="pospts">
				  <!-- <div class="p-4 align-self-start"> -->
					<i class="fas fa-check fa-2x"></i>
				  <!-- </div> -->
				  <!-- <div class="p-4 align-self-end"> -->
						&nbsp;&nbsp;	We have thousands of satisfied customers.<br>
				  <!-- </div> -->
				</div><br>

			
				
				<div class="pospts">
				  <!-- <div class="p-4 align-self-start"> -->
					<i class="fas fa-check fa-2x"></i>
				  <!-- </div> -->
				  <!-- <div class="p-4 align-self-end"> -->
						&nbsp;&nbsp;	We Best in class cars with jaw dropping prices.<br>
				  <!-- </div> -->
				</div><br>
	
	
			</div>
			</div>
			</div>
	
	  </header>
	  <div class="p-4 align-self-end" >
		<div class="col-list-2">
			<div class="recent-car-list">
			<center>
			  <div class="car-info-box"> <a href="#"><img src="img/car7.png" class="img-responsive" alt="image" height='50%' width="50%"></a>
				<center><h3>Audi Q5</h3></center>
			  <center>
					<ul style="    display: inline-flex;
					list-style-type: none;padding-left:0;">
					<li><i class="fa fa-car fa-2x p-5 " aria-hidden="true"></i>CNG</li>
					<li>	<i class="fa fa-calendar fa-2x p-5" aria-hidden="true"></i>2015 Model</li>
						<li><i class="fa fa-user fa-2x p-5" aria-hidden="true"></i>7 seats</li>
					</ul>
			  </center>
			  </div>
			</center>
			</div>
			</div>
			</div>
			<hr color="white">  
	</div>
	
	
	
		  <div class="p-4 align-self-end" >
			  <div class="col-list-2">
				  <div class="recent-car-list">
				  <center>
					<div class="car-info-box "> <a href="#"><img src="img/car10.png" class="img-responsive" alt="image" height='50%' width="50%"></a>
					  <center><h3>Innova Crysta</h3></center>
					<center>
					  <ul style="    display: inline-flex;
						list-style-type: none; padding-left:0;">
						<li><i class="fa fa-car fa-2x p-5 " aria-hidden="true"></i>CNG</li>
						<li>	<i class="fa fa-calendar fa-2x p-5" aria-hidden="true"></i>2015 Model</li>
							<li><i class="fa fa-user fa-2x p-5" aria-hidden="true"></i>7 seats</li>
						</ul>
					</center>
					</div>
				  </center>
				  </div>
				  </div>
				  </div>
				  <hr color="white">
		  </div>
		
	
	
	
		<div class="p-4 align-self-end" >
			<div class="col-list-2">
				<div class="recent-car-list">
				  <center>
					<div class="car-info-box "> <a href="#"><img src="img/car6.png" class="img-responsive" alt="image" height='50%' width="50%"></a>
					  <center><h3>Ferrari 499</h3></center>
					<center>
					  <ul style="    display: inline-flex;
						list-style-type: none;padding-left:0;">
						<li><i class="fa fa-car fa-2x p-5 " aria-hidden="true"></i>CNG</li>
						<li>	<i class="fa fa-calendar fa-2x p-5" aria-hidden="true"></i>2015 Model</li>
							<li><i class="fa fa-user fa-2x p-5" aria-hidden="true"></i>7 seats</li>
						</ul>
					</center>
					</div>
				  </center>
				</div>
				</div>
				</div>
		</div>
		<hr color="white">
	  </div>
	
	
	  <div class="p-4 align-self-end" >
		<div class="col-list-2">
			<div class="recent-car-list">
			  <center>
				<div class="car-info-box "> <a href="#"><img src="img/car8.png" class="img-responsive" alt="image" height='50%' width="50%"></a>
				  <center><h3>Jaguar F-type</h3></center>
				<center>
					<ul style="    display: inline-flex;
					list-style-type: none;padding-left:0;">
					<li><i class="fa fa-car fa-2x p-5 " aria-hidden="true"></i>CNG</li>
					<li>	<i class="fa fa-calendar fa-2x p-5" aria-hidden="true"></i>2015 Model</li>
						<li><i class="fa fa-user fa-2x p-5" aria-hidden="true"></i>7 seats</li>
					</ul>
				</center>
				</div>
			  </center>
			</div>
			</div>
			</div>
			
	</div>
	</div>
	
	
	<!-- top button -->
	
	<button  class="btn btn btn-outline-danger btn-sm top" id="topbtn" onclick="scrollToTop()" >Top</button>
	
	<!--   top button -->
	
	  <!-- FOOTER -->
	  <footer id="main-footer" class="bg-dark">
		<div class="container" width="100%">
		  <div class="row">
			<div class="col text-center py-4">
			  <h3>DBMS Project,4th Sem,N.I.T. JSR, </h3>
			  <p>Copyright &copy; Group 17 :)
				<span id="year"></span>
			  </p>
			  <!-- <button class="btn btn-primary" data-toggle="modal" data-target="">Contact Us</button> -->
			</div>
		  </div>
		</div>
	  </footer>
	
	  <!-- CONTACT MODAL -->
	  <div class="modal fade text-dark" id="contactModal">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Login</h3>
			  <button class="close" data-dismiss="modal">
				<span>&times;</span>
			  </button>
			</div>
			<div class="modal-body">
			  <div class="col-lg-13">
				
				<div class="card bg-primary text-center card-form">
				  <div class="card-body">
					<h3>Agent Login</h3>
					<p>Please enter login credentials</p>
					<form action="login_confi.php"  method="post">
					  <div class="form-group">
						<input type="text" class="form-control form-control-lg" name="userid" placeholder="Username">
					  </div>
					  
					  <div class="form-group">
						<input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
					  </div>
					  
					  <input type="submit" name="login" value="Login" class="btn btn-outline-light btn-block">
					</form>
				  </div>
				</div>
			  </div>
			</div>
			
		  </div>
		</div>
	  </div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/main.js"></script>
	  
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
  crossorigin="anonymous"></script>
	<script>
			$(document).ready(function(){
				$(window).scroll(function(){
		
		var scrollTop=$(window).scrollTop();
		
				// console.log(scrollTop);
				if(scrollTop< 250){
					$("#topbtn").fadeOut();
				}
				else{
					$("#topbtn").fadeIn();
				}
				
				}).triggerHandler("scroll");
			});
		</script>


<script>
  

  // Init Scrollspy
  $('body').scrollspy({ target: '#main-nav' });

  // Smooth Scrolling
  $("#main-nav a").on('click', function (event) {
	if (this.hash !== "") {
	  event.preventDefault();

	  const hash = this.hash;

	  $('html, body').animate({
		scrollTop: $(hash).offset().top
	  }, 800, function () {

		window.location.hash = hash;
	  });
	}
  });
</script>
</body>
</html>
