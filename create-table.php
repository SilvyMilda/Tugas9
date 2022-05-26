<?php
//perintah memuat isi koneksi.inc.php ke dalam file create-table.php 
include "koneksi.inc.php";

//query untuk membuat tabel kontak 
$sql = "CREATE TABLE kontak (
id INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(30) NOT NULL,
jenis_kelamin VARCHAR(10),
email VARCHAR (40),
alamat VARCHAR (50),
kota VARCHAR(20),
pesan TEXT)";

//Mengecek apakah terjadi eror ketika pembuatan tabel
if (mysqli_query($conn, $sql)) {
    echo "New Record Succesfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//Menutup koneksi
mysqli_close($conn);
?>