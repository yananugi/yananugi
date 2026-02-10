<?php
// =============================
// APLIKASI PKL SISWA SEDERHANA
// Tech: PHP Native + MySQL
// =============================

// koneksi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "pkl_db";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// tambah data siswa
if (isset($_POST['simpan'])) {
    $nama   = $_POST['nama'];
    $kelas  = $_POST['kelas'];
    $jurusan= $_POST['jurusan'];
    $tempat = $_POST['tempat_pkl'];
    $mulai  = $_POST['tgl_mulai'];
    $selesai= $_POST['tgl_selesai'];

    mysqli_query($conn, "INSERT INTO siswa VALUES('', '$nama', '$kelas', '$jurusan', '$tempat', '$mulai', '$selesai')");
}

// hapus data
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM siswa WHERE id='$id'");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi PKL Siswa</title>
    <style>
        body { font-family: Arial; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #000; padding: 8px; }
    </style>
</head>
<body>

<h2>Input Data PKL Siswa</h2>
<form method="post">
    <input type="text" name="nama" placeholder="Nama Siswa" required><br><br>
    <input type="text" name="kelas" placeholder="Kelas" required><br><br>
    <input type="text" name="jurusan" placeholder="Jurusan" required><br><br>
    <input type="text" name="tempat_pkl" placeholder="Tempat PKL" required><br><br>
    <input type="date" name="tgl_mulai" required>
    <input type="date" name="tgl_selesai" required><br><br>
    <button type="submit" name="simpan">Simpan</button>
</form>

<h2>Data Siswa PKL</h2>
<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Tempat PKL</th>
        <th>Mulai</th>
        <th>Selesai</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    $data = mysqli_query($conn, "SELECT * FROM siswa");
    while ($d = mysqli_fetch_array($data)) {
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $d['nama'] ?></td>
        <td><?= $d['kelas'] ?></td>
        <td><?= $d['jurusan'] ?></td>
        <td><?= $d['tempat_pkl'] ?></td>
        <td><?= $d['tgl_mulai'] ?></td>
        <td><?= $d['tgl_selesai'] ?></td>
        <td>
            <a href="?hapus=<?= $d['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>

