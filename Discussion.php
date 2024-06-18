<!DOCTYPE html>
<html lang="en">
<head>
<title> The VIBE </title>
 <link rel="icon" href="rams.ico" />


<style>

body {
    background: dodgerblue linear-gradient(45deg, aqua, dodgerblue, deeppink) fixed;

}
#comment-box, #post {
    border: none;
    border-radius: 5px;
}
#post:hover{
    background-color: deeppink;
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




</style>
<body>

<div class = "header">
            <h2 style = "color:purple;">
                <img src="vibe.jpg" alt="logo">
				       
        <center style="font-size:200%;">
        Discussion
        </center>
		
            </h2>
        </div>
        <br>
  
		<div class="topnav">
  <a href="MainStream.html">Main Stream</a>
  <a href="Underground.html">Underground</a>
  <a href="MusicVideos.html">Music Videos</a>
  <a href="LivePerformances.html">Live Performances</a>
  <a href="ComingSoon.html">Coming Soon</a>
   <a href="PopCulture.html">PopCulture</a>
   <a href="Team.html">Join the Team!</a>
</div>
<br>

<?php require 'Group_chat.php';?>

</body>
</html>