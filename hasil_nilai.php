<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h1>Hasil Nilai Siswa</h1>
        <?php
        // Memeriksa apakah data telah dikirim melalui metode GET
        if(isset($_GET['submit'])) {
            // Mengambil nilai-nilai dari form
            $nama = $_GET['nama'];
            $matkul = $_GET['matkul'];
            $nilai_uts = $_GET['Nilai_uts'];
            $nilai_uas = $_GET['Nilai_uas'];
            $nilai_praktikum = $_GET['Nilai_praktikum'];

            // Melakukan pengolahan nilai
            $nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_praktikum) / 3;

            // Menampilkan hasil
            echo "<p>Nama: $nama</p>";
            echo "<p>Mata Kuliah: $matkul</p>";
            echo "<p>Nilai UTS: $nilai_uts</p>";
            echo "<p>Nilai UAS: $nilai_uas</p>";
            echo "<p>Nilai Tugas/Praktikum: $nilai_praktikum</p>";
            echo "<p>Nilai Akhir: $nilai_akhir</p>";
        } else {
            // Jika data belum dikirimkan, tampilkan pesan
            echo "<p>Data belum diisi.</p>";
        }
        ?>
    </div>
</body>
</html>
