<?php

require 'fungsi.php';

// Cek apakah parameter id ada
if(isset($_GET['id'])){

    $id = $_GET['id'];

    // Jalankan fungsi hapus
    if(deletedata($id) > 0){

        echo "
        <script>
            alert('Data berhasil dihapus!');
            window.location.href='mahasiswa.php';
        </script>
        ";

    }else{

        echo "
        <script>
            alert('Data gagal dihapus!');
            window.location.href='mahasiswa.php';
        </script>
        ";

    }

}else{

    echo "
    <script>
        alert('ID tidak ditemukan!');
        window.location.href='mahasiswa.php';
    </script>
    ";

}

?>