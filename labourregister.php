<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<title>WELCOME!</title>
<style>

table
{	border-color:solid black;
	 padding:0px;
	 border-spacing:0px;
	 width:700px;
	 
	 margin-top:100px;
	 margin-bottom:50px;
	 margin-left:330px;
	 background-color:#B2FFFF;
	 box-shadow:0 0 3px #999;	
	
	 }
	 </style>
</head>
<body>
<div id="header">

<img src="jps.png" class="logo" > &nbsp
<img src="extended.png" class="banner">
</div>
<div id='cssmenu'>
<hr size="4" COLOR="#47c9af">
<ul>
<li><a href="lay.html">Home</a></li>
<li><a href="company.html">Companies</a></li>
<li><a href="labour.html">Labours</a></li>
<li><a href="aboutus.html">About us</a></li>
<li><a href="contactus.html">contact us</a></li>
</ul>
</div>
<hr>
<br>
<center><h1>LIST OF COMPANIES</h1></center>
<table border="2">
<tr>
<th height="100px"><b>NAME</b></th>
<th ><b>INDUSTRY</b></th>
<th> <b>HEAD OFFICE</b></th>
<th><b>SITE LOCATION</b></th>
<tr>

<tr>
<td height="50px">Tata Steel</td>
<td>Steel Manufacturer</td>
<td>Mumbai</td>
<td>Nagpur</td>
</tr>

<tr>
<td height="50px">Bharti Airtel</td>
<td >Telecomunation</td>
<td >New Delhi</td>
<td >Mumbai</td>
</tr>

<tr>
<td height="50px">DLF</td>
<td>Real Estate</td>
<td>Delhi</td>
<td>Gurgaon</td>
</tr>
<tr>
<td height="50px">Godrej Properties</td>
<td>Real Estate</td>
<td>Mumbai</td>
<td>Mumbai</td>
</tr>

<tr>
<td height="50px">HCC</td>
<td>Construction Company</td>
<td>Mumbai</td>
<td>Pune</td>
</tr>

<tr>
<td height="50px">Idea</td>
<td>Telecomunation</td>
<td>Mumbai</td>
<td>Nashik</td>
</tr>

<tr>
<td height="50px">Lodha</td>
<td>Real Estate</td>
<td>Mumbai</td>
<td>Chennai</td>
</tr>
</table>


<?php
if (isset($_GET['submit1']))
{
$firstname=$_GET['firstname'];
$lastname=$_GET['lastname'];
$email=$_GET['email'];
$date=$_GET['date'];
$sex=$_GET['sex'];
$city=$_GET['city'];
$specialskill=$_GET['specialskill'];
$contactnumber=$_GET['contactnumber'];
$username=$_GET['username'];
$password=$_GET['password'];

mysql_connect('localhost','root','');
mysql_select_db('contract');


mysql_query("INSERT INTO labour VALUES('$firstname','$lastname','$email','$date','$sex','$city','$specialskill','$contactnumber','$username','$password')");
}
else if(isset($_GET['submit2']))
{

$username=$_GET['username'];
$password=$_GET['password'];

mysql_connect('localhost','root','');
mysql_select_db('contract');
mysql_query("INSERT INTO laboursignin VALUES('$username','$password')");	
}

?>
<div id="footer" >
<p>Follow Us On </p>
<a href="http://facebook.com"><img src="fb.png" height="30px" width="30px"></a>&nbsp &nbsp
<a href="http://instagram.com"><img src="insta.png" height="30px" width="30px"></a>&nbsp&nbsp
<a href="http://twitter.com"><img src="twitter.png" height="30px" width="30px"></a>
<p>All rights reserved | JPS PVT LIMITED </p>
</div>
</body>
</html>