<?php

$koneksi = mysqli_connect("localhost","root","","rkhweekly");

function tampildata($query){
    global $koneksi;

    $result = mysqli_query($koneksi,$query);

    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

//====================
// TAMBAH
//====================

function tambah($data,$files){

    global $koneksi;

    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["nohp"]);
    
    $namafoto= $files["name"];
    $tmpfoto = $files["tmp_name"];
    $path= "asset/$namafoto";
    if(move_uploaded_file($tmpfoto,$path))

   { $query = "INSERT INTO mahasiswa
    (nama,nim,prodi,email,no_hp,foto)
    VALUES
    ('$nama','$nim','$prodi','$email','$no_hp','$namafoto')";

    mysqli_query($koneksi,$query);
   }

    return mysqli_affected_rows($koneksi);
}

//====================
// EDIT
//====================

function edit($data){

    global $koneksi;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["nohp"]);
    $foto = htmlspecialchars($data["foto"]);

    $query = "UPDATE mahasiswa SET
            nama='$nama',
            nim='$nim',
            prodi='$prodi',
            email='$email',
            no_hp='$no_hp',
            foto='$foto'
            WHERE id='$id'";

    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);
}

//====================
// HAPUS
//====================

function deletedata($id){

    global $koneksi;

    mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE id='$id'");

    return mysqli_affected_rows($koneksi);

}

?>