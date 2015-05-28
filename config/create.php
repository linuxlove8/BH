<?php 
/*
Creating MySQL databases 
*/

//Connect to MySQL
$dbc = mysqli_connect('localhost', 'dev', 'qwe123') OR die('Check your server connection and try again...');

//Create the main database if not exist
$create = mysqli_query($dbc, "CREATE DATABASE IF NOT EXISTS blackhat") OR die(mysqli_error());

//Make sure recently created database is active one
mysqli_select_db('blackhat');














?>