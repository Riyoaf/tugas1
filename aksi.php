<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Formulir Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Mengubah latar belakang menjadi abu-abu muda */
            text-align: center;
        }

        .container {
            background-color: #ffffff; /* Mengubah latar belakang kontainer menjadi putih */
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
        }

        h1 {
            color: #007BFF; /* Mengubah warna judul menjadi biru */
        }

        p {
            text-align: left;
            margin: 10px 0; /* Mengubah jarak antar paragraf */
            color: #333; /* Mengubah warna teks paragraf menjadi abu-abu lebih gelap */
        }

        strong {
            color: #007BFF; /* Mengubah warna teks yang ditebalkan menjadi biru */
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $nim = $_POST["nim"];
            $alamat = $_POST["alamat"];
            $jenis_kelamin = $_POST["jenis_kelamin"];
            $jurusan = $_POST["jurusan"];
            $email = $_POST["email"];

            echo "<h1>Hasil Formulir Biodata</h1>";
            echo "<p><strong>Nama Lengkap:</strong> $nama</p>";
            echo "<p><strong>NIM:</strong> $nim</p>";
            echo "<p><strong>Alamat:</strong> $alamat</p>";
            echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
            echo "<p><strong>Jurusan:</strong> $jurusan</p>";
            echo "<p><strong>Email:</strong> $email</p>";
        } else {
            echo "<p>Terjadi kesalahan dalam pengiriman formulir.</p>";
        }
        ?>
    </div>
</body>
</html>
