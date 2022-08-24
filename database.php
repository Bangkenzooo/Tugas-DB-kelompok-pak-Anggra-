<?php
//koneksi database
class database {

    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "data_pegawai";
    var $connection;
    
     //property
        var $con;
        var $query;
        var $data;
 
    

        //method
        function Connect(){
            $this->connection=mysqli_connect($this->host, $this->uname, $this->pass,$this->db);
            return $this->connection;
        }
    
    //method untuk mengambil semua data dari table
        function GetData_All ($q){
            $result = [];
            //membuat objek dari class database
            //include 'database.php';
            $this->db = new Database();
            $this->con=$this->db->Connect();
    
            //perintah get data
            $this->query=mysqli_query($this->con,$q);
            while($this->data=mysqli_fetch_array($this->query)){
                $result[] = $this->data;
            }
            return $result;
        }
    
    

     
 }  
//crud pegawai

?>