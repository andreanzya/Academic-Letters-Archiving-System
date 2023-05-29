<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Database Arsip Surat Akademik</title>
<link rel="shortcut icon" href="https://fasilkom.esaunggul.ac.id/wp-content/uploads/2018/04/esa-unggul-e1523265875745.png" type="image/x-icon">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #566787;
    background: #ff7300;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 15px;
    background: #299be4;
    color: #fff;
    padding: 16px 30px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.table-title .btn {
    color: #566787;
    float: right;
    font-size: 13px;
    background: #fff;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
}
.table-title .btn:hover, .table-title .btn:focus {
    color: #566787;
    background: #f2f2f2;
}
.table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
}
.table-title .btn span {
    float: left;
    margin-top: 2px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
}
table.table tr th:first-child {
    width: 60px;
}
table.table tr th:last-child {
    width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}	
table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
    margin: 0 5px;
}
table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
}
table.table td a:hover {
    color: #2196F3;
}
table.table td a.settings {
    color: #2196F3;
}
table.table td a.delete {
    color: #F44336;
}
table.table td i {
    font-size: 19px;
}
table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
}
.status {
    font-size: 30px;
    margin: 2px 2px 0 0;
    display: inline-block;
    vertical-align: middle;
    line-height: 10px;
}
.text-success {
    color: #10c469;
}
.text-info {
    color: #62c9e8;
}
.text-warning {
    color: #FFC107;
}
.text-danger {
    color: #ff5b5b;
}
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 2px !important;
    text-align: center;
    padding: 0 6px;
}
.pagination li a:hover {
    color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
}
</style>

</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>ARSIP SURAT MAGANG</h2>
                    </div>
                    <div class="col-sm-7">
                        <a href="#" class="btn btn-secondary"><span>Arsip Surat Magang</span></a>
                        <a href="#" class="btn btn-secondary"><span>Arsip Surat Penelitian</span></a>						
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>						
                        <th>NIM</th>
                        <th>No.HP</th>
                        <th>E-mail</th>
                        <th>Jurusan</th>
                        <th>Nama Perusahaan/Institusi</th>
                        <th>Alamat Perusahaan/Institusi</th>
                        <th>Tanggal diterima</th>
                    </tr>
                </thead>
                <tbody>
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
				    $entry = 10;
				    $page = isset($_GET['page'])?(int)$_GET['page'] : 1;
				    $firstpage = ($page>1) ? ($page * $entry) - $entry : 0;	
 
				    $previous = $page - 1;
				    $next = $page + 1;
				
				    $data = mysqli_query($conn,"select * from surat_masuk");
				    $total_data = mysqli_num_rows($data);
				    $total_page = ceil($total_data / $entry);
 
				    $data_surat = mysqli_query($conn,"select * from surat_masuk limit $firstpage, $entry");
			    	$pagenum = $firstpage+1;

                    while($row = mysqli_fetch_array($data_surat)){
                        echo "<tr>
                            <td>" . $row["ID"] . "</td>
                            <td>" . $row["nama"] . "</td>
                            <td>" . $row["nim"] . "</td>
                            <td>" . $row["noHP"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["jurusan"] . "</td>
                            <td>" . $row["perusahaan"] . "</td>
                            <td>" . $row["alamatTujuan"] . "</td>
                            <td>" . $row["tanggal"] . "</td>
                            
                        </tr>";    
                    };
                    ?>
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b><?php echo "$entry"?></b> out of <b><?php echo "$total_data"?></b> entries</div>
                <ul class="pagination">
                <li class="page-item">
					<a class="page-link" <?php if($page > 1){ echo "href='?page=$previous'"; } ?>>Previous</a>
				</li>
				<?php 
				for($x=1;$x<=$total_page;$x++){
					?> 
					<li class="page-item"><a class="page-link" href="?page=<?php echo $x ?>"><?php echo $x; ?></a></li>
					<?php
				}
				?>				
				<li class="page-item">
					<a  class="page-link" <?php if($page < $total_page) { echo "href='?page=$next'"; } ?>>Next</a>
				</li>
                </ul>
            </div>
        </div>
    </div>
</div>     
</body>
</html>