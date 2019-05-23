<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=UTF-8");


require 'functions.php'; 


$conn = connect();



if(isset($_GET['kategori']) && $_GET['kategori'] !== "" ) {

    $result = getbykategori($conn, $_GET['kategori']);
    $outprint = $result;
    echo json_encode($outprint);
} 
else {
    echo "hittar ingen data";
}


disconnect($conn);

?>


