```php id="b9x7qm"
<?php

require 'fungsi.php';

// Jika tombol submit ditekan
if(isset($_POST["submit"]))
{

    if(tambah($_POST,$_FILES["foto"]) > 0){

        echo "
        <script>
            alert('Data berhasil ditambahkan!');
            document.location.href='mahasiswa.php';
        </script>
        ";

    }else{

        echo "
        <script>
            alert('Data gagal ditambahkan!');
            document.location.href='tambahdata.php';
        </script>
        ";

    }

}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>

<h2>Tambah Data Mahasiswa</h2>

<form action="" method="post" enctype="multipart/form-data">

<table>

    <tr>
        <td>Nama</td>
        <td>
            <input type="text" name="nama" required>
        </td>
    </tr>

    <tr>
        <td>NIM</td>
        <td>
            <input type="number" name="nim" required>
        </td>
    </tr>

    <tr>
        <td>Prodi</td>
        <td>
            <input type="text" name="prodi" required>
        </td>
    </tr>

    <tr>
        <td>Email</td>
        <td>
            <input type="email" name="email" required>
        </td>
    </tr>

    <tr>
        <td>No HP</td>
        <td>
            <input type="text" name="nohp" required>
        </td>
    </tr>

    <tr>
        <td>Foto</td>
        <td>
            <input type="file" name="foto" >
        </td>
    </tr>

    <tr>
        <td></td>
        <td>
            <button type="submit" name="submit">Simpan Data</button>

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
