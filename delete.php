<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=UTF-8");


require 'functions.php'; 


$conn = connect();



if(isset($_GET['theID']) && $_GET['theID'] > 0 ) {

    $result = delete($conn, $_GET['theID']);
    $outprint = $result;
    echo $outprint;
} 
else {
    echo "hittar ingen data";
}


disconnect($conn);

?>
