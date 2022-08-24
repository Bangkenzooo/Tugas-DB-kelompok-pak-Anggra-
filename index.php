<?php
include  'database.php';
$rz = new database();
$rz->Connect();
$pegawai = $rz->GetData_All("SELECT * FROM d_pegawai");
$pegawai2 = $rz->GetData_All("SELECT * FROM d_pegawai WHERE jns_kel = 'L'");
$pegawai3 = $rz->GetData_All("SELECT * FROM d_pegawai WHERE status ='M'");
$pegawai4 = $rz->GetData_All("SELECT * FROM d_pegawai WHERE status ='B'");
$pegawai5 = $rz->GetData_All("SELECT * FROM `d_pegawai` WHERE tgl_lahir >='1992-01-01' AND tgl_lahir <='2002-01-01';");
$pegawai6 = $rz->GetData_All("SELECT * FROM `d_pegawai` WHERE tgl_lahir >='1977-01-01' AND tgl_lahir <='1991-01-01';");
$pegawai7 = $rz->GetData_All("SELECT * FROM `d_pegawai` WHERE mulai_kerja >='2017-01-01'AND mulai_kerja <='2021-01-01';");
$pegawai8 = $rz->GetData_All("SELECT * FROM `d_pegawai` WHERE mulai_kerja >='2012-01-01'AND mulai_kerja <='2016-01-01';");
$pegawai9 = $rz->GetData_All("SELECT * FROM `d_pegawai` WHERE mulai_kerja >='1997-01-01'AND mulai_kerja <='2011-01-01';");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h2>DATA PEGAWAI</h2>
<table style= "border-collapse:collapse; " border="2" align="center" width="100%">
        <thead>
            <tr style="background-color:lightskyblue;" align = "center">
                <td>Nip</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>tanggal Lahir</td> 
                <td>status</td>   
                <td>mulai kerja</td>            
            </tr>
        </thead>
        
        <?php foreach ($pegawai as $value) {
        ?>
        
        
        <tr style="background-color:lightgreen;" align = "center">
            
            <td><?= $value['nip']?></td>
            <td><?= $value['nama']?></td>
            <td><?= $value['jns_kel']?></td>
            <td><?= $value['tgl_lahir']?></td>
            <td><?= $value['status']?></td>
            <td><?= $value['mulai_kerja']?></td>
        </tr>

        <?php } ?>
    </table>

    <h2>DATA PEGAWAI LAKI-LAKI</h2>
<table style= "border-collapse:collapse; " border="2" align="center" width="100%">
        <thead>
            <tr style="background-color:lightskyblue;" align = "center">
                <td>Nip</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>tanggal Lahir</td> 
                <td>status</td>   
                <td>mulai kerja</td>            
            </tr>
        </thead>
        
        <?php foreach ($pegawai2 as $s) {
        ?>
        
        
        <tr style="background-color:lightgreen;" align = "center">
            
            <td><?= $s['nip']?></td>
            <td><?= $s['nama']?></td>
            <td><?= $s['jns_kel']?></td>
            <td><?= $s['tgl_lahir']?></td>
            <td><?= $s['status']?></td>
            <td><?= $s['mulai_kerja']?></td>
        </tr>

        <?php } ?>
    </table>

    <h2>DATA PEGAWAI YANG SUDAH MENIKAH</h2>
<table style= "border-collapse:collapse; " border="2" align="center" width="100%">
        <thead>
            <tr style="background-color:lightskyblue;" align = "center">
                <td>Nip</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>tanggal Lahir</td> 
                <td>status</td>   
                <td>mulai kerja</td>            
            </tr>
        </thead>
        
        <?php foreach ($pegawai3 as $value) {
        ?>
        
        
        <tr style="background-color:lightgreen;" align = "center">
            
            <td><?= $value['nip']?></td>
            <td><?= $value['nama']?></td>
            <td><?= $value['jns_kel']?></td>
            <td><?= $value['tgl_lahir']?></td>
            <td><?= $value['status']?></td>
            <td><?= $value['mulai_kerja']?></td>
        </tr>

        <?php } ?>
    </table>
    
    <h2>DATA PEGAWAI YANG BELUM MENIKAH</h2>
<table style= "border-collapse:collapse; " border="2" align="center" width="100%">
        <thead>
            <tr style="background-color:lightskyblue;" align = "center">
                <td>Nip</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>tanggal Lahir</td> 
                <td>status</td>   
                <td>mulai kerja</td>            
            </tr>
        </thead>
        
        <?php foreach ($pegawai4 as $value) {
        ?>
        
        
        <tr style="background-color:lightgreen;" align = "center">
            
            <td><?= $value['nip']?></td>
            <td><?= $value['nama']?></td>
            <td><?= $value['jns_kel']?></td>
            <td><?= $value['tgl_lahir']?></td>
            <td><?= $value['status']?></td>
            <td><?= $value['mulai_kerja']?></td>
        </tr>

        <?php } ?>
    </table>

    <h2>TUGAS 5</h2>
<table style= "border-collapse:collapse; " border="2" align="center" width="100%">
        <thead>
            <tr style="background-color:lightskyblue;" align = "center">
                <td>Nip</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>tanggal Lahir</td> 
                <td>status</td>   
                <td>mulai kerja</td>            
            </tr>
        </thead>
        
        <?php foreach ($pegawai5 as $value) {
        ?>
        
        
        <tr style="background-color:lightgreen;" align = "center">
            
            <td><?= $value['nip']?></td>
            <td><?= $value['nama']?></td>
            <td><?= $value['jns_kel']?></td>
            <td><?= $value['tgl_lahir']?></td>
            <td><?= $value['status']?></td>
            <td><?= $value['mulai_kerja']?></td>
        </tr>

        <?php } ?>
    </table>

    <h2>TUGAS 6</h2>
<table style= "border-collapse:collapse; " border="2" align="center" width="100%">
        <thead>
            <tr style="background-color:lightskyblue;" align = "center">
                <td>Nip</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>tanggal Lahir</td> 
                <td>status</td>   
                <td>mulai kerja</td>            
            </tr>
        </thead>
        
        <?php foreach ($pegawai6 as $value) {
        ?>
        
        
        <tr style="background-color:lightgreen;" align = "center">
            
            <td><?= $value['nip']?></td>
            <td><?= $value['nama']?></td>
            <td><?= $value['jns_kel']?></td>
            <td><?= $value['tgl_lahir']?></td>
            <td><?= $value['status']?></td>
            <td><?= $value['mulai_kerja']?></td>
        </tr>

        <?php } ?>
    </table>

    <h2>TUGAS 7</h2>
<table style= "border-collapse:collapse; " border="2" align="center" width="100%">
        <thead>
            <tr style="background-color:lightskyblue;" align = "center">
                <td>Nip</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>tanggal Lahir</td> 
                <td>status</td>   
                <td>mulai kerja</td>            
            </tr>
        </thead>
        
        <?php foreach ($pegawai7 as $value) {
        ?>
        
        
        <tr style="background-color:lightgreen;" align = "center">
            
            <td><?= $value['nip']?></td>
            <td><?= $value['nama']?></td>
            <td><?= $value['jns_kel']?></td>
            <td><?= $value['tgl_lahir']?></td>
            <td><?= $value['status']?></td>
            <td><?= $value['mulai_kerja']?></td>
        </tr>

        <?php } ?>
    </table>

    <h2>TUGAS 8</h2>
<table style= "border-collapse:collapse; " border="2" align="center" width="100%">
        <thead>
            <tr style="background-color:lightskyblue;" align = "center">
                <td>Nip</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>tanggal Lahir</td> 
                <td>status</td>   
                <td>mulai kerja</td>            
            </tr>
        </thead>
        
        <?php foreach ($pegawai8 as $value) {
        ?>
        
        
        <tr style="background-color:lightgreen;" align = "center">
            
            <td><?= $value['nip']?></td>
            <td><?= $value['nama']?></td>
            <td><?= $value['jns_kel']?></td>
            <td><?= $value['tgl_lahir']?></td>
            <td><?= $value['status']?></td>
            <td><?= $value['mulai_kerja']?></td>
        </tr>

        <?php } ?>
    </table>

    <h2>TUGAS 9</h2>
<table style= "border-collapse:collapse; " border="2" align="center" width="100%">
        <thead>
            <tr style="background-color:lightskyblue;" align = "center">
                <td>Nip</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>tanggal Lahir</td> 
                <td>status</td>   
                <td>mulai kerja</td>            
            </tr>
        </thead>
        
        <?php foreach ($pegawai9 as $value) {
        ?>
        
        
        <tr style="background-color:lightgreen;" align = "center">
            
            <td><?= $value['nip']?></td>
            <td><?= $value['nama']?></td>
            <td><?= $value['jns_kel']?></td>
            <td><?= $value['tgl_lahir']?></td>
            <td><?= $value['status']?></td>
            <td><?= $value['mulai_kerja']?></td>
        </tr>

        <?php } ?>
    </table>
</body>
</html>