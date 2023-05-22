<?php
$servername = "localhost";
$database = "arsip_surat_penelitian";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$perusahaan = $_POST['perusahaan'];
$alamat = $_POST['alamat'];
$judul = $_POST['judul'];

$sql = "INSERT INTO surat_masuk (nama, nim, noHP, email, jurusan, perusahaan, alamatTujuan, judul) VALUES ('$nama', '$nim', '$nohp', '$email', '$jurusan', '$perusahaan', '$alamat', '$judul')";

if (mysqli_query($conn, $sql)) {
    echo "Entry Surat Akademik diterima.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>