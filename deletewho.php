<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=UTF-8");


require 'functions.php'; 


$conn = connect();



if(isset($_GET['namn']) && $_GET['namn'] !== "" ) {

    $result = deletewho($conn, $_GET['namn']);
    $outprint = $result;
    echo $outprint;
} 
else {
    echo "hittar ingen data";
}


disconnect($conn);

?>
