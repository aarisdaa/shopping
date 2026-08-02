<?php
// var url
$base_url = '';

// var database
$db_host = 'localhost';
$db_user = 'YOUR_USERNAME';
$db_pass = 'YOUR_PASSWORD';
$db_name = 'shoppingcart';

// conenct db
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die('connection failed');
