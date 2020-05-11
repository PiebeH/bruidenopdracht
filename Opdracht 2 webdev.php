<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loginpage</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">


</head>
  <body>
      <div class="topnav">
          <a class="active" href="./Opdracht 2 webdev.html">Home</a>
          <a href="./Opdracht 2 inloggen.html">Our Wishes</a>
          <div class="signupbttn">
            <p>A New Wedding Couple?</p><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"  aria-hidden="true">Sign Up</button>
          </div>
      </div>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>When you sign up, you will get a special code to give to your wedding guests.
         With this special code they can find your wishlist!</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>
        
        <div class="Inhoud" style="padding-left:16px">
          <h1>We're getting married!</h1>
          <p></p>
        </div>
  
  </body>
  </html>