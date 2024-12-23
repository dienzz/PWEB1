<?php
// submit.php
$servername = "localhost";
$username = "root"; // ganti dengan username database Anda
$password = ""; // ganti dengan password database Anda
$dbname = "tracer_alumni";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$tahun_lulus = $_POST['tahun_lulus'];
$pekerjaan = $_POST['pekerjaan'];

// Siapkan dan jalankan query
$sql = "INSERT INTO alumni (nama, email, tahun_lulus, pekerjaan) VALUES ('$nama', '$email', '$tahun_lulus', '$pekerjaan')";

if ($conn->query($sql) === TRUE) {
    echo "Registrasi berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>