<!DOCTYPE html>
<html>
  <head>
	  <link rel="stylesheet" href="index1.css">
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
		 <div class="app">Get the App
           </div>
     <div>

     <!-- Error Message -->
     <div id="error-message" style="color: red; display: none;"></div>

     
     <!--Sign Up Form-->
     <div class="signup-form" style="display: none" id="signup-form">
     <h2>Sign Up</h2>
          <form action="register.php" method="post">
              <label>Name: </label>
              <input type="text" name="name" id="name" placeholder="Name"><br>
              <label>Email:  </label>
              <input type="email" name="email" id="email" placeholder="Email"><br>
              <label>Password: </label>
              <input type="password" name="password" id="password" placeholder="Password"><br>
              <label>Confirm Password: </label>
              <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password">
              <button type="submit" name="signup">Sign Up</button>
          </form>
          <div class="or">
                -----------------OR-----------------
            </div>
            <div class="bi-google">
            <i class="bi-facebook"></i>
            </div>
            <div class="links">
                <p>Already have an account?</p>
                <button class="btn btn-secondary" style="background-color:turquoise;" id="signInButton">Sign In</button>
            </div>
     </div>  


     <!--Sign IN Form-->
     <div class="signin-form" id="signin-form">
          <h2>Sign In</h2>
          <form action="register.php" method="post">
              <label>Email:  </label>
              <input type="email" name="email" id="email" placeholder="Email"><br>
              <label>Password: </label>
              <input type="password" name="password" id="password" placeholder="Password"><br>
              <button type="submit" name="signin">Sign In</button>

          </form>
          <div class="or">
                -----------------OR-----------------
            </div>
            <div class="bi-google">
            <i class="bi-facebook"></i>
            </div>
            <div class="links">
                <p>New User, not registered Yet?</p>
                <button class="btn btn-secondary" style="background-color:turquoise;" id="signUpButton">Sign Up</button>
            </div>
     </div>  
     <!--babua ye h background image ke liye-->
     <div class="header-image">
            <img src="https://img.freepik.com/free-psd/entrance-emergency-room-hospital-generative-ai_587448-2242.jpg
"> 
     </div>
     </header>
     <script src="script.js"></script>
     </body>
     </html>
