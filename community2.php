<!DOCTYPE html>
<html lang="en">
<head>
<title> Community </title>
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
 </style>
 
 <body>
 <div class = "header">
            <h2 style = "color:purple;">
                <img src="vibe.jpg" alt="logo">
				
				<center style="font-size:200%;">
				Community
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
   <a href="Group_Chat.php">Discussion Board</a>
    <a href="Team.html">Join the Team!</a>
</div>

<h2> New Potential </h2>
<?php
$find=$_POST['find'];
$con = mysqli_connect("localhost", "root", "", "ISproject") 
or die( "Connection Failed: " . mysqli_error($con));
$result2 = mysqli_query($con, "SELECT * FROM art WHERE 
skill like'%$find%'");
echo "<table border='2'> <tr>
<th>name</th>
<th>city</th>
<th>skill</th>
<th>socials</th>
<th>bio</th>
</tr>";
while($row =mysqli_fetch_array($result2)) {
 echo "<tr>";
 echo "<td>" . $row[0] . "</td>";
 echo "<td>" . $row[1] . "</td>";
 echo "<td> " . $row[2] . "</td>";
  echo "<td>" . $row[3] . "</td>";
   echo "<td>" . $row[4] . "</td>";
 echo "</tr>";
}
echo "</table>";
?>
<br>
  <button onclick="window.location.href='community.php';">
      Find more
    </button>
<br>

 <div class="footer">
  <p>Vibe.com LLC</p>
</div>
         </body>
</html>