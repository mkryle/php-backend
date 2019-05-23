<?php

// connect
function connect(){
	$conn = mysqli_connect("localhost", "root", "", "mydb")
        or die("Could not connect");
    mysqli_select_db($conn,"mydb") or die("Could not select database");
	return $conn;
}

// dc
function disconnect($conn){
	mysqli_close($conn);
}


// skapa
function make($conn){

    $namn = htmlspecialchars($_POST['namn']);
    $kategori = htmlspecialchars($_POST['kategori']);
    $createdby = htmlspecialchars($_POST['createdby']);
  
    $sql = "INSERT INTO products (namn, chategory, skapadav)
              VALUES('$namn','$kategori','$createdby')";
              
    $result = mysqli_query($conn,$sql) or die("error: $sql");

    $insId = mysqli_insert_id($conn);

    return $insId;
}


// get all
function getAll($conn){
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn,$sql) or die("Query failed: $sql");
    $row = mysqli_fetch_all($result);
    
    return $row;
}


// get by id
function getbyid($conn, $theID){
    $sql = "SELECT * FROM products WHERE id=".$theID;
    $result = mysqli_query($conn, $sql) or die("error: $sql");
    $row = mysqli_fetch_all($result);

    return $row;
}


// get by who
function getbywho($conn, $bywho){
    $sql = "SELECT * FROM products WHERE skapadav='$bywho'";
    $result = mysqli_query($conn, $sql) or die("error: $sql");
    $row = mysqli_fetch_all($result);

    return $row;
}


// get by who
function getbykategori($conn, $bykategori){
    $sql = "SELECT * FROM products WHERE chategory='$bykategori'";
    $result = mysqli_query($conn, $sql) or die("error: $sql");
    $row = mysqli_fetch_all($result);

    return $row;
}


// ta bort
function delete($conn, $theID){
    $sql = "DELETE FROM products WHERE id=". $theID;
    $result = mysqli_query($conn, $sql) or die("error: $sql");

    return $theID . " Togs bort !";
}


function deletewho($conn, $bywho){
    $sql = "DELETE FROM products WHERE skapadav='$bywho'";
    $result = mysqli_query($conn, $sql) or die("error: $sql");

    return  "alla inlägg från " . $bywho . " Togs bort !";
}


// update


function update($conn){
    
    $namn = htmlspecialchars($_POST['namn']);
    $kategori = htmlspecialchars($_POST['kategori']);
    $createdby = htmlspecialchars($_POST['createdby']);

    $theID = $_POST['theID'];

    $query = "UPDATE products SET namn='$namn', chategory='$kategori', skapadav='$createdby'
			  WHERE id=". $theID;

    $result = mysqli_query($conn,$query) or die("error: $query");
}
?>