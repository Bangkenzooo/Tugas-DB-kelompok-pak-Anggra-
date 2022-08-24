<?php
include  'database.php';
$rz = new database();
$rz->Connect();
$pegawai = $rz->GetData_All("SELECT * FROM `d_pegawai` WHERE mulai_kerja >='2012-01-01'AND mulai_kerja <='2016-01-01';");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<h2>Tugas 8</h2>
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