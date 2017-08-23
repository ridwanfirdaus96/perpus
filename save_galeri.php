<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "foto";

$conn = new mysqli($servername, $username, $password);

mysqli_select_db('pendaftaran');
if(!empty($_FILES) && $_FILES['size']['file'] > 0 && $_FILES['file']['error'] == 0) {
    $filename = $_FILES['file']['name'];
    $move = move_uploaded_file($_FILES['file']['tmp_name'], 'upload/'.$filename);
    if($move){
        $sql = "insert into foto (nama_file, deskripsi) values
				('$fileName', '".$_POST['deskripsi']."')";
		mysqli_query($sql);
		header("Location: galeri.php");
		exit;
    }
}

?>