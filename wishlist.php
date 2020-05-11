<!DOCTYPE html>
<html lang="en">

<head>
  <title>A Special Day</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
  <script data-require="bootstrap@*" data-semver="3.1.1"
    src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <link data-require="bootstrap-css@3.1.1" data-semver="3.1.1" rel="stylesheet"
    href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css" />
  <script src="script.js"></script>
  <style>
    body {
      margin: 0;
      min-width: 250px;
    }

    .topnav {
      overflow: hidden;
      background-color: #ffefef;
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

    /* Include the padding and border in an element's total width and height */
    * {
      box-sizing: border-box;
    }

   
    ul {
      margin: 0;
      padding: 0;
    }

    /* Style the list items */
    ul li {
      cursor: pointer;
      position: relative;
      padding: 12px 8px 12px 40px;
      list-style-type: none;
      background: rgb(250, 240, 240);
      font-size: 18px;
      transition: 0.2s;

      /* make the list items unselectable */
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    
    ul li:nth-child(odd) {
      background: #f9f9f9;
    }

   
    ul li:hover {
      background: #ddd;
    }

   
    ul li.checked {
      background: #888;
      color: rgb(12, 9, 9);
      text-decoration: line-through;
    }

   
    

    /* Style the close button */
    .close {
      position: absolute;
      right: 0;
      top: 0;
      padding: 12px 16px 12px 16px;
    }

    .close:hover {
      background-color: #a78c8a;
      color: white;
    }

    /* Style the header */
    .header {
      background-color: #70605f;
      padding: 30px 40px;
      color: rgb(22, 19, 19);
      text-align: center;
    }

    /* Clear floats after the header */
    .header:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Style the input */
    input {
      margin: 0;
      border: none;
      border-radius: 0;
      width: 75%;
      padding: 10px;
      float: left;
      font-size: 16px;
    }

    /* Style the "Add" button */
    .addBtn {
      padding: 10px;
      width: 25%;
      background: #d9d9d9;
      color: #555;
      float: left;
      text-align: center;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
      border-radius: 0;
    }

    .addBtn:hover {
      background-color: #bbb;
    }
  </style>
</head>

<body>
  <div class="topnav">
    <a class="active" href="./Opdracht_2_webdev.html">Home</a>
    <a href="./Opdracht_2_inloggen.html">Our Wishes</a>
  </div>

  <div id="myDIV" class="header">
    <h2 style="margin:5px">Your wishlist</h2>
    <input type="text" id="myInput" placeholder="Gift..." />
    <span onclick="newElement()" class="addBtn">Add</span>
  </div>

  <ul id="myUL">
    <li> Unique engagement pebble art</li>
    <li>Glass panel with wedding quote</li>
    <li>Basket with a wine collection</li>
    <li>Basket full of nice things</li>
    <li>Shower and bathing set</li>
    <li>Pillow with your own wedding date</li>
  </ul>




  <script>
    // Create a "close" button and append it to each list item
    var myNodelist = document.getElementsByTagName("li");
    var i;
    for (i = 0; i < myNodelist.length; i++) {
      var span = document.createElement("Span");
      var txt = document.createTextNode("delete");
      span.className = "close";
      span.appendChild(txt);
     
      
      myNodelist[i].appendChild(span);
    }

    // Click on a close button to hide the current list item
    var close = document.getElementsByClassName("close");
    var i;
    for (i = 0; i <close.length; i++) {
      close[i].onclick = function(){
        var result = confirm("Want to delete?");
if (result) { 
    //Logic to delete the item
}
        var div = this.parentElement;
        div.style.display = "none";
        
      }
    }

    // Create a new list item when clicking on the "Add" button
    function newElement() {
      var li = document.createElement("li");
      var inputValue = document.getElementById("myInput").value;
      var t = document.createTextNode(inputValue);
      li.appendChild(t);
      if (inputValue === "") {
        alert("You must write something!");
      } else {
        document.getElementById("myUL").appendChild(li);
      }
      document.getElementById("myInput").value = "";

      var span = document.createElement("SPAN");
      var txt = document.createTextNode("delete");
      span.className = "close";
      span.appendChild(txt);
      li.appendChild(span);

      for (i = 0; i < close.length; i++) {
        close[i].onclick = function () {
          var result = confirm("Want to delete?");
if (result){
    //Logic to delete the item
}
          var div = this.parentElement;
          div.style.display = "none";
        };
      }
    }
    $("#confirm-delete").on("show.bs.modal", function (e) {
      $(this)
        .find(".btn-ok")
        .attr("href", $(e.relatedTarget).data("href"));

      $(".debug-url").html(
        "Delete URL: <strong>" +
        $(this)
          .find(".btn-ok")
          .attr("href") +
        "</strong>"
      );
    });
  </script>
</body>

</html>