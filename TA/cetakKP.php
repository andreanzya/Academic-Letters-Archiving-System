<?php

    $nosurat = 1;
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $alamat2 = nl2br($alamat);
    $splitted = explode("<br />", $alamat2);
    $resultAlamat = "\line ".$splitted[0]."\line".$splitted[1]."\line".$splitted[2]."\line".$splitted[3]."\line";

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
    foreach ($splitted as $val) {
        $resultAlamat."\line ".$val;
    }
    while( $nosurat <= 1000){
        // membaca isi dokumen tempate surat.rtf
        // isi dokumen dinyatakan dalam bentuk string
        
        $document = file_get_contents("cth KP.rtf");
        
        $document = str_replace("#NOSURAT", $nosurat, $document);
        $document = str_replace("#NOJRSAN", $nojrsan, $document);
        $document = str_replace("#NAMA", $nama, $document);
        $document = str_replace("#NIM", $nim, $document);
        $document = str_replace("#JURUSAN", $jurusan, $document);
        $document = str_replace("#ALAMAT", $resultAlamat, $document);
        
        header("Content-type: application/msword");
        header("Content-disposition: inline; filename=suratkkp.doc");
        header("Content-length: ".strlen($document));
        echo $document;
        $nosurat++;
    }
    
 
?>