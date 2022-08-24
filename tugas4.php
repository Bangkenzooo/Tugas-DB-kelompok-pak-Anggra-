<?php
include  'database.php';
$rz = new database();
$rz->Connect();
$pegawai = $rz->GetData_All("SELECT * FROM d_pegawai WHERE status ='B'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
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
</body>
</html>