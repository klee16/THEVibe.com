<!DOCTYPE html>
<html lang="en">
<head>
<title> Team-app </title>
 <link rel="icon" href="rams.ico" />


<style>

body {
  background-color: Grey;
}
        .header {
                background-color: Black;
                padding: 15px;
                text-align: center;
            }
			
			/* The navbar container */
.topnav {
  overflow: hidden;
  background-color: black;
   
}

/* Navbar links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Links - change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three equal columns that float next to each other */
.column {
  float: left;
  width: 33.33%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other on smaller screens (600px wide or less) */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

.footer {
  background-color: black;
  text-align: center;
  padding: 10px;
  color: grey;
}

<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>


</style>
<body>

<div class = "header">
            <h2 style = "color:purple;">
                <img src="vibe.jpg" alt="logo">
				       
        <center style="font-size:200%;">
         Welcome to "the VIBE.com" Discover the Wave !
        </center>
		
            </h2>
        </div>
        <br>
  
		<div class="topnav">
		 <a href="CST3605.html">Home</a>
  <a href="MainStream.html">Main Stream</a>
  <a href="Underground.html">Underground</a>
  <a href="MusicVideos.html">Music Videos</a>
  <a href="LivePerformances.html">Live Performances</a>
  <a href="ComingSoon.html">Coming Soon</a>
   <a href="PopCulture.html">PopCulture</a>
  <a href="Group_chat.php">Discussion Board</a>
  <a href="community.php">Community</a>
   <a href="Team.html">Join the Team!</a>
</div>

<h1>Keep Exploring the Site!</h1>

<?php
$nam=$_POST["name"];
$emal=$_POST["email"];
$surv=$_POST["survey"];
$sub=$_POST["subject"];
$con = mysqli_connect("localhost", "root", "", "ISproject") 
or die( "Connection Failed: " . mysqli_error($con));
$name = mysqli_real_escape_string($con, $nam);
$email = mysqli_real_escape_string($con, $emal);
$survey = mysqli_real_escape_string($con, $surv);
$subject = mysqli_real_escape_string($con, $sub);
mysqli_query($con, "INSERT INTO apps (Name, Email,Survey, Subject) 
VALUES ('$name','$email','$survey','$subject')")
or die("Application failed. Please Try again" . mysqli_error($con)); 
echo "Application will be reviewed by a Team member. <br>";
mysqli_close($con);
?>


         </body>
</html>