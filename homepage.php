<?php
session_start();
include 'connect.php';
?>
<!DOCTYPE html>
<html>
  <head>
	  <link rel="stylesheet" href="index1.css">
    <link rel="javascript" href="index1.js">
    <!--for bootstap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	  <!--for icon image-->
	  <link rel="icon" href="/images/icon.jpeg">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Hostpito</title>
  </head>
  <body>
  <header>
     <div class="nav">
		 <div class="app">Get the App</div>
     
     <ul class="nav-bar">
          <li><a target="_self">Add Hospital</a></li>    
          <li>Login</li>
          <!-- Junaid : Creating the signup form-->
          <a class="Signup" href="registrationform.html"><li>Sign up</li></a>
          <li><a class="Signup" style="text-decoration:none;" href="logout.php">Logout</a></li>
     </ul>
     </div> 
     <!--ye h searching box ke liye-->
     <div class="head">
        <img src=" " alt=" "> 
        <h3 style="color:white">Discover hospital in Ranchi</h3>
        <div class="search">
        <!--Searchicon-->
        <p>YWCA ,Bariayatu road</p>
        <input class="text" placeholder="Search for hospital,medical" style="border:none; outline:none;">
        </div>    
     </div>
     <!--babua ye h background image ke liye-->
     <div class="header-image">
            <img src="https://img.freepik.com/free-psd/entrance-emergency-room-hospital-generative-ai_587448-2242.jpg
"> 
     </div> 
  </header>
  <!--header yhi tk tha-->
  <!--ab bnao section-->
  <section class="sec1">
                <div class="box"><img src="images/image.jpeg">
					<div class="child"><span>Book Online Slot</span>
					      
					</div>
                </div>
                 <div class="box"><img src="images/image.jpeg">
					<div class="child"><span>Book Online Slot</span>
					      
					</div>
                </div>
                 <div class="box">
					  <img src="images/image.jpeg">
					<div class="child"><span>Book Online Slot</span>
					     
					</div>
                </div>
                 <div class="box">
					  <img src="images/image.jpeg">
					<div class="child"><span>Book Online Slot</span>
					     
					</div>
                </div>
                
  </section>

  <!-- Junaid Starting here-->
   <!-- Search By Specialization-->
    <section class="sec2">
      <div class="search-by-specialization">
        <h1>Search By Specialization</h1>
        <div class="specialization">
          <a class="specialization-box" href="#">
            <img src="images/image.jpeg" alt="Specialization">
            <p>Cardiologist</p>
          </a>
          <a class="specialization-box" href="#">
            <img src="images/image.jpeg" alt="Specialization">
            <p>Cardiologist</p>
          </a>
          <a class="specialization-box" href="#">
            <img src="images/image.jpeg" alt="Specialization">
            <p>Cardiologist</p>
          </a>
          <div class="specialization-box" style= "text-align: center; padding-top: 12vh;">
            <a href="specialization.html"><button type="button" class="btn btn-info">More</button>
              </a>
        </div>
        </div>
      </div>
    </section>
    <!-- Navin day 2 section for hospital lists-->
    <section class="middle">
      <div class="sec-2">
      <h2>Collectons of Hospital</h2>
      <div>
      <h6>Dummmy I am powerful student Thukra ke pyar mera itekam dekhegi</h6>
      <span>show all list</span>
      <!-- hii Junaid it is test pull request-->
      <div>Junaid Done</div>
      </div>
      </div>
      <div class="sec-3">
      <div class="box1">
         <img src="images/image.jpeg">
      <div><span>Address And About</span></div>
     
      </div>
      <div class="sec-3">
      <div class="box1">
        <img src="images/image.jpeg">
      <div><span>Address And About</span></div>
      
      </div>
      <div class="sec-3">
      <div class="box1"><img src="images/image.jpeg">
      <div><span>Address And About</span></div>
      
      </div>
      <div class="sec-3">
      <div class="box1">
         <img src="images/image.jpeg">
      <div><span>Address And About</span></div>
     
      </div>
      </div>
     </section>   
     <!--Navin Footer-->
     <footer>
      <div class="footer-content">
        <p>&copy; 2025 UniqueProjectsHospital. All Rights Reserved.</p>
        <ul class="footer-links">
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </footer>
  </body>
 </html>
