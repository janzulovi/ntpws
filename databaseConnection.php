<?php

	$hostname = "DESKTOP-5T6E0JH";
	$username = "DESKTOP-5T6E0JH\Jerko";
	$password = "";
	$dbName = "Ntpws";
	$port = 1433;
	
	$dbc = odbc_connect("Server={$hostname};Database={$dbName}; Port={$port};String Types=Unicode", $user, $password) or 
			die("Greška pri spajanju na bazu!");
?>