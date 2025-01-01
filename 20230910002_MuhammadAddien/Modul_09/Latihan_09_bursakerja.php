<?php
include 'Latihan_09_config.php'; // Memasukkan file konfigurasi untuk koneksi database

// Menangani pengiriman form lowongan kerja
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $judul = $_POST['judul'];
  $perusahaan = $_POST['perusahaan'];
  $lokasi = $_POST['lokasi'];
  $deskripsi = $_POST['deskripsi'];

  // Menyimpan data ke database
  $sql = "INSERT INTO bursa_kerja (judul, perusahaan, lokasi, deskripsi) VALUES ('$judul', '$perusahaan', '$lokasi', '$deskripsi')";
  if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success'>Lowongan kerja berhasil ditambahkan.</div>";
  } else {
    echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
  }

  $conn->close();
}
?>

<div class="container mt-5">
  <h2 class="mb-4">Bursa Kerja</h2>
  <!-- Form tambah lowongan kerja -->
  <form method="POST" action="">
    <div class="mb-3">
      <label for="judul" class="form-label">Judul Lowongan</label>
      <input type="text" class="form-control" id="judul" name="judul" required>
    </div>
    <div class="mb-3">
      <label for="perusahaan" class="form-label">Perusahaan</label>
      <input type="text" class="form-control" id="perusahaan" name="perusahaan" required>
    </div>
    <div class="mb-3">
      <label for="lokasi" class="form-label">Lokasi</label>
      <input type="text" class="form-control" id="lokasi" name="lokasi" required>
    </div>
    <div class="mb-3">
      <label for="deskripsi" class="form-label">Deskripsi</label>
      <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Tambah Lowongan</button>
  </form>
</div>