<?php
$servername = "localhost";
$database = "arsip_surat_magang";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$nama = mysqli_real_escape_string($conn, $_POST['nama']); 
$nohp = mysqli_real_escape_string($conn, $_POST['nohp']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$nim = mysqli_real_escape_string($conn, $_POST['nim']);
$jurusan = mysqli_real_escape_string($conn, $_POST['jurusan']);
$perusahaan = mysqli_real_escape_string($conn, $_POST['perusahaan']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamat']);

$sql = "INSERT INTO surat_masuk (nama, nim, noHP, email, jurusan, perusahaan, alamatTujuan) VALUES ('".$nama."', '".$nim."', '".$nohp."', '".$email."', '".$jurusan."', '".$perusahaan."', '".$alamat."')";

if (mysqli_query($conn, $sql)) {
    echo "Entry Surat Akademik diterima.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>