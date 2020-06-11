<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:validation.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>CTS Student Club</title>
<link rel="stylesheet" type="text/css" href="styleforindex.css">
 <link href="/main/includes/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body data-spy="scroll" data-target="#collapsenavbar">
<div class="bgimg">
<nav class="navbar navbar-expand-md navbar-dark fixed-top" >
<div class="container">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar"> 
<span class="navbar-toggler-icon">
</span>
                </button>
                <div class="collapse navbar-collapse" id="collapsenavbar">
                <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                <a href="#home" class="nav-link text-white">HOME</a>
                </li>

                <li class="nav-item">
                <a href="#ec" class="nav-link text-white">EVENTS CONDUCTED</a>
                
                </li>
               
                <li class="nav-item">
                <a href="#gallery" class="nav-link text-white">GALLERY</a>
                </li>
				               
                <li class="nav-item">
                <a href="#contact" class="nav-link text-white">CONTACT</a>
                </li>
				 <li class="nav-item">
                <a href="map.html" class="nav-link text-white">LOCATION</a>
                </li> 
                </ul>
                </div>
</div>
</nav>
<div class="container text-center  text-white hearderset">
<h2 class="hh">VELAMMAL ENGINEERING COLLEGE</h2>
<h1 class="nn">CTS STUDENT CLUB!</h1>
<h2 class="hh">WELCOME <?php echo $_SESSION['username']; ?>  </h2>
<button id="cc" class="btn btn-primary text-white btn-lg"><a class="no"href="login.php">LOGIN</a></button>
</div>

</div>
<div id="home" class="container text-center"><br><br><br>
<br>
<h1>ABOUT</h1>
<img src="clglogo.jpg" width="50%">
<p class="para">

   

The Velammal Educational Trust is a registered non-minority service organization established in the year 1986 by Thiru. M.V. Muthuramalingam to inculcate among the youth a sense of discipline which is important to mould them into useful and capable citizens.The watch wossrds of the Trust are "Dedication, Determination and Distinction".
 Velammal engineeing college tie up with cognizant technology solution.They form a student club to find the innovation and active participation among student and change the worlsd as innoative with new things.
</p>

</div >

<section class="container text-center" id ="ec"><br><br><br>
<h1>EVENTS</h1>
<div class="row rowsetting">
<div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
<img class="ima" src="code.jpeg"/>
<h2>Online Coding Contest</h2>
<p>The online coding contest had taken place from 2nd February to 5th February 2020 on the hackerrank platform.The event had 5 questions with different levels of complexity.All problems are purely based on logical thinking.</p>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
<img class="ima" src="apt.png"/>
<h2>Aptitude Contest:</h2>
<p>The aptitude contest had taken place on 4th Feburary and it was extended till February 10th.To complete the Aptitude assignment we used a new platform called classmarker.They had conducted the test on different topics like Ages,Boats and Streams ,Compound Interest and Simple Interest. </p>

</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
<img class="ima" src="ppt.png"/>
<h2>Paper Presentation Contest</h2>
<p>The paper presentation contest held on 14th February 2020.The papers was thoroughly based on new technologies and projects.It had covered several topics like  The Game DUGOUT!,COognitive Computing,Bit Coins.</p>

</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
<img class="ima" src="crossword.png"/>
<h2>Crossword Puzzle</h2>
<p>The crossword puzzle taken place on 14th February 2020.The puzzle was purely based on technical.It had covered several topics like CN,OS,DBMS etc. </p>

</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
<img class="ima" src="mock.jpg"/>
<h2>Mock Interview</h2>
<p>The mock interview held on 15 February 2020. This mock interview provides students with an oppurtunity to practice the student's interviewskills in the enivironment similar to the actual interview.This interview helps the students to learn how to answer difficult questions, develop interview strategies improve the communication skills. </p>

</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
<img class="ima" src="quiz.png"/>
<h2>Technical Quiz</h2>
<p>The technical quiz contest had taken place on 17th Feburary and it was extended till 19th February 2020.They had conducted the technical quiz based on different topics like Operating system, Database management system and Programming in C.  </p>

</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
<img class="ima" src="turn.jpeg"/>
<h2>Turn Coat</h2>
<p>The turncoat held on 15 February 2020. The participants where given an onspot technical topics like database management system,Computer Network etc.The time for switch to an opposite party is 2 minutes.  </p>

</div>
</section>
<section class="portfolio bg-light" id="gallery">
<div class="container text-center">
<h1>IMAGE GALLARY</h1>

              
              <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
              <div class="card">
              <img src="ospc.jpeg" class="card-img img-fluid">
              <div class="card-body">
              <h2 class="card-title">Online Coding Contest</h2>
              
              
              </div>
              
              </div>
              
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
              <div class="card">
              <img src="aptitude.jpeg" class="card-img img-fluid">
              <div class="card-body">
              <h2 class="card-title">Aptitude</h2>
             
              
              </div>
              
              </div>
              
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
              <div class="card">
              <img src="paper persentation.jpeg" class="card-img img-fluid">
              <div class="card-body">
              <h2 class="card-title">Paper Persentation</h2>
              
              
              </div>
              
              </div>
              
              </div>
              </div>
              <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
              <div class="card">
              <img src="puzzle.jpeg" class="card-img img-fluid">
              <div class="card-body">
              <h2 class="card-title">Crossword Puzzle</h2>
              
              
              </div>
              
              </div>
              
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
              <div class="card">
              <img src="mock interview.jpeg" class="card-img img-fluid">
              <div class="card-body">
              <h2 class="card-title">Mock Interview</h2>
              
              
              </div>
              
              </div>
              
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
              <div class="card">
              <img src="technical quize.jpeg" class="card-img img-fluid">
              <div class="card-body">
              <h2 class="card-title">Technical Quiz</h2>
              
              
              </div>
              
              </div>
              
              </div>
              
              </div>
</div>
</section>
<div id="contact" class="container text-center">
<section >

<br><br><br>
<h2 class="text-center">CONTACT US</h2>
<div class="text-center">
<div class="te">
<p>REPRESENTATIVE: &nbsp SATHAPPAN CT</p>
<p>VELAMMAL ENGINEERING COLLEGE</p>
 <p>9487100253</p>
<p>sathappan2000cms@gmail.com</p>
 <a href="map.html">To reach Us!</a>
 
</div>

</div>

</section>
</div>
<div class="container text-center">
<section >

<br><br><br>
<h2 class="text-center">DEVELOPERS</h2>
<div class="text-center">
<div class="te">
<p>NIRMALA V</p>

<p>SUSHMEERA B</p>
 <p>VAISHNAVI SR</p>
<p>VAISHALI V</p>
 
</div>

</div>

</section>
</div>
</body>
</html>