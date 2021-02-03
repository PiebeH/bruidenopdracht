<!DOCTYPE html>
<html lang="en">

<head>
  <title>A Special day</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background-image: url('http://getwallpapers.com/wallpaper/full/f/1/2/1128274-hd-wedding-backgrounds-2560x1600-windows-7.jpg');
      background-blend-mode: color;
      background-position: center;
      background-attachment: fixed;
      background-size: 100% 100%;
    }

    .topnav {
      overflow: auto;
      background-color: transparent;
    }

    .topnav a {
      float: left;
      display: block;
      color: black;
      text-align: center;
      padding: 23px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    .topnav a.active {
      background-color: rgb(255, 0, 21);
      color: white;

    }

    .topnav p {
      text-align: end;
      background-color: white;
    }

    .topnav .signupbttn {
      float: right;
      float: inline-end
    }


    .topnav input[type=text] {
      padding: 6px;
      margin-top: 8px;
      font-size: 17px;
      border: none;
    }

    .topnav.signupbtn {
      float: right;
      padding: 6px;
      margin-top: 8px;
      margin-right: 16px;
      background: #ddd;
      font-size: 17px;
      border: none;
      cursor: pointer;
    }

    .topnav .signupbtn button:hover {
      background: #ccc;
    }

    @media screen and (max-width: 600px) {
      .topnav .signupbtn {
        float: none;
      }

      .topnav a,
      .topnav input[type=text],
      .topnav .signupbtn {
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
      }

      .topnav input[type=text] {
        border: 1px solid #ccc;
      }
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    

    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
      display: none;

      position: fixed;

      z-index: 1;

      left: 0;
      top: 0;
      width: 100%;

      height: 100%;

      overflow: auto;

      background-color: rgb(0, 0, 0);

      background-color: rgba(0, 0, 0, 0.4);

      padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 15% auto 15% auto;
      /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%;
      /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
      from {
        -webkit-transform: scale(0)
      }

      to {
        -webkit-transform: scale(1)
      }
    }

    @keyframes animatezoom {
      from {
        transform: scale(0)
      }

      to {
        transform: scale(1)
      }
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }

      .cancelbtn {
        width: 100%;
      }
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    * {
      box-sizing: border-box;
    }

    /* input fields */
    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    .Inhoud {
      text-align: center
    }

    /* style voor buttons */
    button {
      background-color: rgb(175, 76, 76);
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    button:hover {
      opacity: 1;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
      padding: 14px 20px;
      background-color: #f44336;
    }

    .cancelbtn,
    .signupbtn {
      float: left;
      width: 50%;
    }


    .container {
      padding: 64px;
    }

    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: #474e5d;
      padding-top: 50px;
    }

    /* Modal*/
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto;
      border: 1px solid #888;
      width: 80%;
    }

    /* horizontal ruler */
    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }

    /* close button */
    .close {
      position: absolute;
      right: 35px;
      top: 15px;
      font-size: 40px;
      font-weight: bold;
      color: #f1f1f1;
    }

    .close:hover,
    .close:focus {
      color: #f44336;
      cursor: pointer;
    }

    .clearfix::after {
      content: "";
      clear: both;
      display: table;
    }

    /* styles op small screens */
    @media screen and (max-width: 300px) {

      .cancelbtn,
      .signupbtn {
        width: 100%;
      }
    }
  </style>

</head>

<body>
  <div class="topnav">
    <a class="active" href="./Opdracht_2_webdev.html">Home</a>
    <a href="./Opdracht_2_inloggen.html">Our Wishes</a>
    <div class="signupbttn" data-target=".container">
      <p>A New Wedding Couple?</p><button onclick="document.getElementById('id01').style.display='block'"
        style="width:auto;" aria-hidden="true">Sign Up</button>
      <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;"
        data-target="id02">Login</button>
    </div>
  </div>


  <div id="id02" class="modal">
    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id02').style.display='none'" class="close"
          title="Close Modal">&times;</span>
      </div>

      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id02').style.display='none'"
          class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
  </div>


  <div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close"
      title="Close Modal">&times;</span>
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
          <button type="button" onclick="document.getElementById('id01').style.display='none'"
            class="cancelbtn">Cancel</button>
          <button type="submit" class="signupbtn">Sign Up</button>
        </div>
      </div>
    </form>
  </div>

  <div class="Inhoud" style="padding-left:16px">
    <h1>"Were getting married!"</h1>
    <p></p>
  </div>
  <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // close modal
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</body>

</html>