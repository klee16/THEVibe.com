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
  <a href="ComingSoon.html">Coming Soon</a>
   <a href="PopCulture.html">PopCulture</a>
  <a href="Group_chat.php">Discussion Board</a>
   <a href="Team.html">Join the Team!</a>
</div>
<script>
function myFunction() {
  alert("You have been added to the Network!");
}
</script>
<h1> Connect with Creatives </h1>
<div><form action="community.php" method="post">
Name: <input type="text" size="25" maxlength="50" name = "name"/> <br><br>
Where you From: <input type="text" size="25" maxlength="100"  name = "city" /> <br><br>
Skill: <input type="text" size="25" maxlength="35" name = "skill" /> <br><br>
Where can we find you <br> <textarea id="social" name="social" placeholder="Social media/website links" style="height:100px"></textarea><br><br>
Who are you : <br> <textarea id="bio" name="bio" placeholder="Bio" style="height:100px"></textarea><br><br>
<input type="submit" value="Add" onclick="myFunction()" />
</form>
</div>
<br>

<h2> The community </h2>

<div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$nam=$_POST["name"];
$cit=$_POST["city"];
$ski=$_POST["skill"];
$soc=$_POST["social"];
$bi=$_POST["bio"];

$con = mysqli_connect("localhost", "root", "", "ISproject") 
or die( "Connection Failed: " . mysqli_error($con));

$name = mysqli_real_escape_string($con, $nam);
$city = mysqli_real_escape_string($con, $cit);
$skill = mysqli_real_escape_string($con, $ski);
$social = mysqli_real_escape_string($con, $soc);
$bio = mysqli_real_escape_string($con, $bi);
mysqli_query($con, "INSERT INTO art (name,city,skill,social,bio) 
VALUES ('$name','$city','$skill','$social','$bio')")
or die("Application failed. Please Try again" . mysqli_error($con)); 
mysqli_close($con);
}
$con = mysqli_connect("localhost", "root", "", "ISproject") 
or die( "Connection Failed: " . mysqli_error($con));
$result = mysqli_query($con, "SELECT * FROM art ");
echo "<table border='2'> <tr>
<th>name</th>
<th>city</th>
<th>skill</th>
<th>socials</th>
<th>bio</th>
</tr>";
while($row =mysqli_fetch_array($result)) {
 echo "<tr>";
 echo "<td>" . $row[0] . "</td>";
 echo "<td>" . $row[1] . "</td>";
 echo "<td> " . $row[2] . "</td>";
  echo "<td>" . $row[3] . "</td>";
   echo "<td>" . $row[4] . "</td>";
 echo "</tr>";
}
echo "</table>";

mysqli_close($con);

?>
</div>
<br>

<h3> Who are you looking for. Search by Skill. <h3>
<form action="community2.php" method="post">
Skill : <input type="text" size="25" maxlength="50" name = "find"/> <br><br>
<input type="submit" value="search" />
</form>




 <div class="footer">
  <p>Vibe.com LLC</p>
</div>
         </body>
</html>