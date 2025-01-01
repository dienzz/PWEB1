<?php
include 'Latihan_09_config.php'; // Memasukkan file konfigurasi untuk koneksi database

// Menangani pengiriman form buku tamu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $pesan = $_POST['pesan'];

  // Menyimpan data ke database
  $sql = "INSERT INTO buku_tamu (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
  if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success'>Pesan berhasil dikirim.</div>";
  } else {
    echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
  }

  $conn->close();
}
?>

<div class="container mt-5">
  <h2 class="mb-4">Buku Tamu</h2>
  <!-- Form buku tamu -->
  <form method="POST" action="">
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
      <label for="pesan" class="form-label">Pesan</label>
      <textarea class="form-control" id="pesan" name="pesan" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
  </form>
</div>