```php
<?php

require 'fungsi.php';

// Cek apakah id dikirim
if(!isset($_GET["id"])){
    header("Location: mahasiswa.php");
    exit;
}

$id = $_GET["id"];

// Ambil data mahasiswa berdasarkan id
$mhs = tampildata("SELECT * FROM mahasiswa WHERE id = $id")[0];

// Jika tombol submit ditekan
if(isset($_POST["submit"])){

    if(edit($_POST) > 0){

        echo "
        <script>
            alert('Data berhasil diubah!');
            document.location.href='mahasiswa.php';
        </script>
        ";

    }else{

        echo "
        <script>
            alert('Data gagal diubah!');
            document.location.href='mahasiswa.php';
        </script>
        ";

    }

}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
</head>
<body>

<h2>Edit Data Mahasiswa</h2>

<form action="" method="post">

    <input type="hidden" name="id" value="<?= $mhs['id']; ?>">

    <table>

        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="nama" value="<?= $mhs['nama']; ?>" required>
            </td>
        </tr>

        <tr>
            <td>NIM</td>
            <td>
                <input type="number" name="nim" value="<?= $mhs['nim']; ?>" required>
            </td>
        </tr>

        <tr>
            <td>Prodi</td>
            <td>
                <input type="text" name="prodi" value="<?= $mhs['prodi']; ?>" required>
            </td>
        </tr>

        <tr>
            <td>Email</td>
            <td>
                <input type="email" name="email" value="<?= $mhs['email']; ?>" required>
            </td>
        </tr>

        <tr>
            <td>No HP</td>
            <td>
                <input type="text" name="nohp" value="<?= $mhs['no_hp']; ?>" required>
            </td>
        </tr>

        <tr>
            <td>Foto</td>
            <td>
                <input type="text" name="foto" value="<?= $mhs['foto']; ?>">
            </td>
        </tr>

        <tr>
            <td>Foto Saat Ini</td>
            <td>
                <?php if(!empty($mhs['foto'])){ ?>
                    <img src="asset/<?= $mhs['foto']; ?>" width="80">
                <?php }else{ ?>
                    Tidak ada foto
                <?php } ?>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <button type="submit" name="submit">Update Data</button>
                <a href="mahasiswa.php">
                    <button type="button">Kembali</button>
                </a>
            </td>
        </tr>

    </table>

</form>

</body>
</html>
```
