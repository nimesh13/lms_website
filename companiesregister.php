<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<title>LIST!</title>
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
	  text-size="20px";
	 }
	 </style>
</head>
<body>
<div id="header">

<img src="jps.png" class="logo" > &nbsp
<img src="extended.png" class="banner">
</div>
<div id='cssmenu'>
<hr size="4" COLOR="#4cc0000">
<ul>
<li><a href="lay.html">Home</a></li>
<li><a href="company.html">Companies</a></li>
<li><a href="customer.html">Customer</a></li>
<li><a href="labour.html">Labours</a></li>
<li><a href="aboutus.html">About us</a></li>
<li><a href="contactus.html">contact us</a></li>
</ul>
</div>
<hr>
<br>

<center><h1>LIST OF LABOURS</h1></center>
<table border="2">
<tr>
<th height="100px"><h1>NAME</h1></th>
<th ><h2>GENDER</h2></th>
<th> <h3>CITY</h3></th>
<th><h4>SKILL</h4></th>
<tr>

<tr>
<td height="50px">Jai Samtani</td>
<td>Male</td>
<td>Mumbai</td>
<td>Electrician</td>
</tr>

<tr>
<td height="50px">Pratik Sawant</td>
<td >Male</td>
<td >New Delhi</td>
<td >Plumber</td>
</tr>

<tr>
<td height="50px">Sanket Sawant</td>
<td>Male</td>
<td>Gurgaon</td>
<td>Technician</td>
</tr>
<tr>
<td height="50px">Vishal Talreja</td>
<td>Male</td>
<td>Mumbai</td>
<td>Normal Worker</td>
</tr>

<tr>
<td height="50px">Gaurav massand</td>
<td>Male</td>
<td>Pune</td>
<td>Normal Worker</td>


</tr>

<tr>
<td height="50px">Sagar Dung</td>
<td>Male</td>
<td>Nashik</td>
<td>Normal Worker</td>
</tr>

<tr>
<td height="50px">Kevin Shah</td>
<td>Male</td>
<td>mumbai</td>
<td>Electrician</td>
</tr>
</table>


<?php

$companyname=$_POST['companyname'];
$city=$_POST['city'];
$contactnumber=$_POST['contactnumber'];
$companyregistrationnumber=$_POST['companyregistrationnumber'];
$password=$_POST['password'];

mysql_connect('localhost','root','');
mysql_select_db('contract');

mysql_query("INSERT INTO companies VALUES('$companyname','$city','$contactnumber','$companyregistrationnumber','$password')");

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