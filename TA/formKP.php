<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Pengajuan Surat Akademik</title>
    </head>
    <body>
        <div class="workHeader">
            <div style="width:1010px; margin:0 auto;">
                <ul class="topnav" style="float:left" >
                    <li>
                        <a href="https://siakad.esaunggul.ac.id">Menu</a>&nbsp;
                    </li>
                    <li>
                        <a href="https://siakad.esaunggul.ac.id">Data</a>&nbsp;
                    </li>
                    <li>
                        <a href="https://siakad.esaunggul.ac.id">Perkuliahan(Adm)</a>&nbsp;
                    </li>
                    <li>
                        <a href="https://siakad.esaunggul.ac.id">Registrasi Semester</a>&nbsp;
                    </li>
                    <li>
                        <a href="https://siakad.esaunggul.ac.id">Daftar Nilai</a>&nbsp;
                    </li>
                </ul>
                <img src="logosim.png" style="vertical-align:top;float:right;position:relative;">
            </div>
        </div>

        <div id="main_content">
            <div id="wrapper">
                <div id="SideItem" class="SideItem">
                    <center>
                        <header style="width: 600px;">
                            <div class="inner">
                                <div class="left title">
                                    <h1>Surat Pengantar KKP</h1>
                                </div>         
                            </div>
                        </header>
                        
                        <div class="box-content" style="width: 578px;">
                            <br><br>
                            <form method="post" action="cetakKP.php" id="formsurat">
                                <table>
                                    <tr><td>Nama</td><td><input type="text" name="nama"><br></td></tr>
                                    <tr><td>NIM</td><td><input type="text" name="nim"></td></tr>
                                    <tr><td>Jurusan</td></tr>
                                    <tr><td><input type="radio" id="Jurnalistik" name="jurusan" value="Jurnalistik">Jurnalistik</td></tr>
                                    <tr><td><input type="radio" id="Komunikasi Marketing" name="jurusan" value="Komunikasi Marketing">Komunikasi Marketing</td></tr>
                                    <tr><td><input type="radio" id="Broadcasting" name="jurusan" value="Broadcasting">Broadcasting</td></tr>
                                    <tr><td><input type="radio" id="humas" name="jurusan" value="Hubungan Masyarakat">Hubungan Masyarakat</td></tr>
                                    <tr><td>Alamat Lengkap</td><td><textarea rows="5" cols="30" style="left: auto;" name="alamat" placeholder="Contoh :
PT. Sepeda Maju Bersama
Ruko North Goldfinch No. 62,
Cihuni, Padegangan, Kecamatan Gading Serpong,
Tangerang, Banten, 15332"></textarea></td></tr>
                                    <tr><td></td><td><input type="submit" name="submit" value="Submit"></td></tr>
                                </table>
                            </form>
                        </div>
                    </center> 
                </div>   
            </div>
        </div>
    </body>
</html>