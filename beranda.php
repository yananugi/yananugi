<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Aplikasi PKL</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body{
    margin:0;
    font-family: Arial, Helvetica, sans-serif;
    background:#f4f6f9;
    scroll-behavior:smooth;
}

/* HEADER */
.header{
    background:#0a63d8;
    color:white;
    text-align:center;
    padding:25px;
    font-size:32px;
    font-weight:bold;
    border-bottom-left-radius:30px;
    border-bottom-right-radius:30px;
}

/* NAVBAR */
.navbar{
    display:flex;
    justify-content:space-around;
    background:#e5e5e5;
    padding:15px 0;
    position:sticky;
    top:0;
    z-index:100;
}

.navbar a{
    text-decoration:none;
    color:black;
    font-weight:bold;
    text-align:center;
}

.navbar i{
    font-size:26px;
    display:block;
}

/* CONTENT */
.content{
    padding:25px;
}

.section{
    margin-bottom:60px;
}

.section-title{
    font-size:24px;
    font-weight:bold;
    margin-bottom:20px;
}

/* TABLE */
.table{
    width:100%;
    border-collapse:collapse;
    background:white;
    border-radius:10px;
    overflow:hidden;
}

.table th{
    background:#ddd;
    padding:15px;
}

.table td{
    padding:15px;
    border-bottom:1px solid #eee;
    text-align:center;
    font-weight:bold;
}

.status{
    background:#0a63d8;
    color:white;
    padding:6px 14px;
    border-radius:6px;
}

/* CARD */
.card{
    background:white;
    padding:25px;
    border-radius:12px;
    box-shadow:0 4px 10px rgba(0,0,0,.1);
    text-align:center;
}

.card i{
    font-size:70px;
    margin-bottom:15px;
}

.btn{
    display:inline-block;
    margin-top:15px;
    padding:10px 18px;
    background:#0a63d8;
    color:white;
    border-radius:6px;
    text-decoration:none;
    font-weight:bold;
}

.red{color:#ff4d4d;}
.blue{color:#0a63d8;}
.green{color:#00b050;}
</style>
</head>

<body>

<!-- HEADER -->
<div class="header">
    Aplikasi PKL
</div>

<!-- NAVBAR -->
<div class="navbar">
    <a href="#home"><i class="fa-solid fa-house"></i>Home</a>
    <a href="#nilai"><i class="fa-solid fa-clipboard"></i>Nilai</a>
    <a href="#sertifikat"><i class="fa-solid fa-certificate"></i>Sertifikat</a>
    <a href="#sidang"><i class="fa-solid fa-calendar-days"></i>Sidang</a>
</div>

<div class="content">

<!-- HOME -->
<div class="section" id="home">
    <div class="section-title"> PKL Siswa</div>
    <table class="table">
        <tr>
            <th>Tempat PKL</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>PT. Timur Jaya</td>
            <td>02-07-2026</td>
            <td>30-09-2026</td>
            <td><span class="status">Berlangsung</span></td>
        </tr>
    </table>
</div>

<!-- NILAI LAPORAN -->
<div class="section" id="nilai">
    <div class="section-title">Nilai Laporan PKL</div>
    <table class="table">
        <tr>
            <th>Komponen</th>
            <th>Nilai</th>
        </tr>
        <tr>
            <td>Laporan Harian</td>
            <td>90</td>
        </tr>
        <tr>
            <td>Laporan Akhir</td>
            <td>88</td>
        </tr>
        <tr>
            <td>Sidang PKL</td>
            <td>92</td>
        </tr>
        <tr>
            <th>Nilai Akhir</th>
            <th>90 (A)</th>
        </tr>
    </table>
</div>

<!-- SERTIFIKAT -->
<div class="section" id="sertifikat">
    <div class="section-title">Sertifikat PKL</div>
    <div class="card">
        <i class="fa-solid fa-certificate green"></i>
        <h3>Sertifikat PKL</h3>
        <p>Sertifikat PKL sudah tersedia dan bisa diunduh.</p>
        <a href="#" class="btn">Download Sertifikat</a>
    </div>
</div>

<!-- JADWAL SIDANG -->
<div class="section" id="sidang">
    <div class="section-title">Jadwal Sidang PKL</div>
    <div class="card">
        <i class="fa-solid fa-calendar-days blue"></i>
        <p><b>Tanggal:</b> 10 Juli 2026</p>
        <p><b>Jam:</b> 07.00 WIB</p>
        <p><b>Tempat:</b> Ruang Multimedia</p>
        <p><b>Penguji:</b> Bpk. Andi, S.Kom</p>
    </div>
</div>

</div>

</body>
</html>