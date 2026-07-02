<?php
require 'fungsi.php';
if (isset($_POST["submit"]))
    {

        $nama = $_POST["nama"];
        $nim =$_POST["nim"];
        $prodi =$_POST["prodi"];
        $email= $_POST["email"];
        $nohp = $_POST["nohp"];
        $foto = $_POST["foto"];

        $query = "INSERT INTO mahasiswa (nama,nim,prodi,email,nohp,foto) VALUES ('$nama')";
    }
    
?>