<?php
	
	//Connecting To the DataBase Server

	$dbhost = 'localhost';
	$dbuser = 'user';
	$dbpass = 'Danu9696';
	$dbname = 'doenets';

	$connection = mysqli_connect('sql112.rf.gd', 'rfgd_19758427', 'Esports2016', 'rfgd_19758427_freshers');

	//Checking Errors

	if (mysql_errno()) {
		die('SORRY BRO! Connection to the Database has failed' . mysqli_connect_error());
	}

	

?>