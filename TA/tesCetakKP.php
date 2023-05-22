<?php

    $nama = $_POST['nama'];
    $email = $_POST['alamat'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    // membaca data dari form
    if($jurusan == 'Jurnalistik'){
        $nojrsan = 'JUR';
    }elseif($jurusan == 'Komunikasi Marketing'){
        $nojrsan = 'MK';
    }elseif($jurusan == 'Broadcasting'){
        $nojrsan = 'BC';
    }elseif($jurusan == 'Hubungan Masyarakat'){
        $nojrsan = 'PR';
    }else{
        $nojrsan = 'error';
    }

    

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

    $sql = "INSERT INTO surat_masuk (nama, nim, jurusan, alamatTujuan) VALUES ('$nama','$nim','$jurusan','$alamat')";

    if (mysqli_query($conn, $sql)) {
        echo "Entry Surat Akademik diterima.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

 
?>