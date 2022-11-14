<?php
// allow cross domain requests
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');


$_POST = file_get_contents('php://input');

// $_POST = json_decode($_POST, true);


echo "<pre>";

print_r($_FILES);
