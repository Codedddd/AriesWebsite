<?php

//Set variables:

$Username = $_POST["Username"];
$Email = $_POST["Email"];
$Password = $_POST["Password"];
$Age = $_POST["Age"];

//Open and read "BlacklistedWords.json":

$Blacklisted_Words = file_get_contents("BlacklistedWords.json");

//Validate Username:

if (str_contains($Username , $Blacklisted_Words)) {

    echo '<script type=\text/javascript\ src="ErrorAlerts.js">usernameBlacklistAlert();</script>';

}