<?php

    $nosurat = 1;
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $judul = $_POST['judul'];
    $alamat2 = nl2br($alamat);
    $splitted = explode("<br />", $alamat2);
    $resultAlamat = "\line ".$splitted[0]."\line".$splitted[1]."\line".$splitted[2]."\line".$splitted[3];

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
    foreach ($splitted as $val) {
        $resultAlamat."\line ".$val;
    }
    // membaca data dari form
    while( $nosurat <= 1000){
        // membaca isi dokumen tempate surat.rtf
        // isi dokumen dinyatakan dalam bentuk string
        
        $document = file_get_contents("cth riset1.rtf");
        
        $document = str_replace("#NOSURAT", $nosurat, $document);
        $document = str_replace("#NOJRSAN", $nojrsan, $document);
        $document = str_replace("#NAMA", $nama, $document);
        $document = str_replace("#NIM", $nim, $document);
        $document = str_replace("#JURUSAN", $jurusan, $document);
        $document = str_replace("#ALAMAT", $resultAlamat, $document);
        $document = str_replace("#JUDUL", $judul, $document);
        
        header("Content-type: application/msword");
        header("Content-disposition: inline; filename=suratriset.doc");
        header("Content-length: ".strlen($document));
        echo $document;
        $nosurat++;
    }
    
 
?>