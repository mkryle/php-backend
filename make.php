<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=UTF-8");


 require 'functions.php'; 


$conn = connect();

if (isset($_POST['namn']) && $_POST['namn'] !== ""){
    $name = $_POST['namn'];
} 
else {
    echo "Var gor ange namn !";
    die();
}

if (isset($_POST['kategori'])  && $_POST['kategori'] !== ""){
    $kategori = $_POST['kategori'];
}
else {
    echo "Var gor ange kategori !";
    die();
}

if (isset($_POST['createdby']) && $_POST['createdby'] !== ""){
    $email = $_POST['createdby'];
}
else {
    echo "Var god ange skapad av !";
    die();
}

$make = make($conn);

if(isset($make) && $make > 0 ) {
    $result = getbyid($conn, $make);
    $outprint = $result;
    echo json_encode($outprint);
}

disconnect($conn);

?>