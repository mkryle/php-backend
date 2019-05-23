<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=UTF-8");


 require 'functions.php'; 


$conn = connect();

$getUsers = getAll($conn);

$outprint = $getUsers;

echo json_encode($outprint);

disconnect($conn);

?>