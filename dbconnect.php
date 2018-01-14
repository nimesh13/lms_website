<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="wt";
if(!mysql_connect($dbhost,$dbuser,$dbpass))
{
die('oops connection problem '.mysql_error());
}
if(!mysql_select_db($db))
{
die('oops coonection problem '.mysql_error());
 }
 ?> 