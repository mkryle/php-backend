<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=UTF-8");


 require 'functions.php'; 


$conn = connect();



//getid
if(isset($_POST['theID']) && $_POST['theID'] > 0 ) {
    $theID = $_POST['theID'];

} //if ends
else {
    echo "hittar inget id";
    die();
} // end getid


//inside 1st  if
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

$make = update($conn);

    $result = getbyid($conn, $theID);
    $outprint = $result;
    echo json_encode($outprint);











disconnect($conn);

?>