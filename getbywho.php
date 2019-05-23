<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=UTF-8");


require 'functions.php'; 


$conn = connect();



if(isset($_GET['namn']) && $_GET['namn'] !== "" ) {

    $result = getbywho($conn, $_GET['namn']);
    $outprint = $result;
    echo json_encode($outprint);
} 
else {
    echo "hittar ingen data";
}


disconnect($conn);

?>


