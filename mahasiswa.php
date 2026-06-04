<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1 align="center">
    WEB TI RAKHA - 2026
    </h1>
    <table border="1" align="center" cellspacing="0" cellpadding="10px">
    <tr>
        <td><a href="index.html">Home</a></td>
        <td><a href="about.html">Profile</a></td>
        <td><a href="contact.html">Contact</a></td>
        <td> <a href="mahasiswa.html">Data mahasiswa</a></td>
    </tr>
    </table>
    <br><br>
    <h2>Data Mahasiswa</h2>
    <table border="1" cellpadding="5px">
    <tr>
        <td rowspan="2">Baris 1 kolom 1&2</td>
        <td colspan="2">Baris 1, Kolom 1&2</td>
        <!-- <td>Baris 1, Kolom 2</td> -->
    </tr>
        <tr>
        <td>Baris 2, Kolom 1</td>
        <td>Baris 2, Kolom 2</td>
        <!-- <td>Baris 2, Kolom 3</td> -->
    </tr>
    </table>
    <br><br>
    <table border="1" cellpadding="5px">
        <tr>
            <td>b1k1</td>
            <td>b1k2</td>
            <td>b1k3</td>
            <td>b1k4</td>
        </tr>
         <tr>
            <td>b2k1</td>
            <td rowspan="2"colspan="2">b2k2</td>
            <td colspan="2">b2k3</td>
            
        </tr>
         <tr>
            <td>b3k1</td>
            <td>b3k2</td>
            
           
            
        </tr>
         <tr>
            <td>b4k1</td>
            <td>b4k2</td>
            <td>b4k3</td>
            <td>b4k4</td>
        </tr>
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #111;
            color: #fff;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #222;
            padding: 20px;
            border-radius: 10px;
        }
        h2 {
            text-align: center;
            color: silver;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: none;
        }
        .radio-group, .checkbox-group {
            margin-top: 5px;
        }
        .radio-group input, .checkbox-group input {
            width: auto;
        }
        button {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            background: silver;
            border: none;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background: gray;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Data Mahasiswa</h2>

    <form>
        <!-- Nama -->
        <label>Nama:</label>
        <input type="text" name="nama">

        <!-- NIM -->
        <label>NIM:</label>
        <input type="number" name="nim">

        <!-- Password -->
        <label>Password:</label>
        <input type="password" name="password">

        <!-- Email -->
        <label>Email:</label>
        <input type="email" name="email">

        <!-- No HP -->
        <label>No HP:</label>
        <input type="tel" name="nohp">

        <!-- Website -->
        <label>Website Pribadi:</label>
        <input type="url" name="website">

        <!-- Tanggal Lahir -->
        <label>Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir">

        <!-- Warna Favorit -->
        <label>Warna Favorit:</label>
        <input type="color" name="warna">

        <!-- Range -->
        <label>Tingkat Kepuasan:</label>
        <input type="range" name="kepuasan" min="0" max="100">

        <!-- Jenis Kelamin -->
        <label>Jenis Kelamin:</label>
        <div class="radio-group">
            <input type="radio" name="jk" value="laki"> Laki-laki
            <input type="radio" name="jk" value="perempuan"> Perempuan
        </div>

        <!-- Hobi -->
        <label>Hobi:</label>
        <div class="checkbox-group">
            <input type="checkbox" name="hobi" value="musik"> Musik
            <input type="checkbox" name="hobi" value="olahraga"> Olahraga
            <input type="checkbox" name="hobi" value="game"> Game
        </div>

        <!-- Upload -->
        <label>Upload Foto:</label>
        <input type="file" name="foto">

        <!-- Alamat -->
        <label>Alamat:</label>
        <textarea name="alamat"></textarea>

        <!-- Jurusan -->
        <label>Jurusan:</label>
        <select name="jurusan">
            <option>Teknik Informatika</option>
            <option>Sistem Informasi</option>
            <option>Manajemen</option>
            <option>Akuntansi</option>
        </select>

        <!-- Submit -->
        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>