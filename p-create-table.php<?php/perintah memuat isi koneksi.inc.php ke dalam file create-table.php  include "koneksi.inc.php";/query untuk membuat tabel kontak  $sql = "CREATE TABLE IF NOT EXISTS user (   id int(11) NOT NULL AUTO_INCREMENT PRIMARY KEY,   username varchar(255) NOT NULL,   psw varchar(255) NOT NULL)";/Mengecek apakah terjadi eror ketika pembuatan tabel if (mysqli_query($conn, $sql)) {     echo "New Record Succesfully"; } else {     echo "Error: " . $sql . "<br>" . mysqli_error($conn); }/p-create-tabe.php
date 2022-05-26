<?php
//perintah memuat isi koneksi.inc.php ke dalam file create-table.php 
include "koneksi.inc.php";

//query untuk membuat tabel kontak 
$sql = "CREATE TABLE IF NOT EXISTS user (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username varchar(255) NOT NULL,
  psw varchar(255) NOT NULL)";

//Mengecek apakah terjadi eror ketika pembuatan tabel
if (mysqli_query($conn, $sql)) {
    echo "New Record Succesfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//Menutup koneksi
mysqli_close($conn);
?>
