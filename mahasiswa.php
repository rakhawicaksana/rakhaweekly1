```php
<?php

require 'fungsi.php';

$query = "SELECT * FROM mahasiswa";
$mahasiswas = tampildata($query);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>
<body>

<h1 align="center">WEB TI RAKHA - 2026</h1>

<table border="1" align="center" cellpadding="10" cellspacing="0">
    <tr>
        <td><a href="index.php">Home</a></td>
        <td><a href="about.php">Profile</a></td>
        <td><a href="contact.php">Contact</a></td>
        <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
    </tr>
</table>

<br>

<h2>Data Mahasiswa</h2>

<p>
    <a href="tambahdata.php">
        <button>Tambah Data</button>
    </a>
</p>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Prodi</th>
        <th>Email</th>
        <th>No HP</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    foreach($mahasiswas as $mhs){
    ?>

    <tr>

        <td><?= $no++; ?></td>

        <td><?= $mhs['nama']; ?></td>

        <td><?= $mhs['nim']; ?></td>

        <td><?= $mhs['prodi']; ?></td>

        <td><?= $mhs['email']; ?></td>

        <td><?= $mhs['no_hp']; ?></td>

        <td>

            <?php if(!empty($mhs['foto'])){ ?>

                <img src="asset/<?= $mhs['foto']; ?>" width="60">

            <?php }else{ ?>

                Tidak ada foto

            <?php } ?>

        </td>

        <td>

            <a href="editdata.php?id=<?= $mhs['id']; ?>">
                <button>Edit</button>
            </a>

            <a href="deletedata.php?id=<?= $mhs['id']; ?>"
               onclick="return confirm('Yakin ingin menghapus data ini?')">
                <button>Hapus</button>
            </a>

        </td>

    </tr>

    <?php } ?>

</table>

</body>
</html>
```
