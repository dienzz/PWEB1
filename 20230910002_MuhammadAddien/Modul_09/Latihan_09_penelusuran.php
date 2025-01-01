<?php
include 'Latihan_09_config.php'; // Memasukkan file konfigurasi untuk koneksi database

// Menangani pencarian alumni
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['nama'];
  
  // Mencari alumni berdasarkan nama
  $sql = "SELECT * FROM alumni WHERE nama LIKE '%$nama%'";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    echo "<table class='table table-bordered'>
    <tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Tahun Lulus</th>
    <th>Jurusan</th>
    <th>Foto</th>
    </tr>";
    while($row = $result->fetch_assoc()){
      echo "<tr>
      <td>".$row["id"]."</td>
      <td>".$row["nama"]."</td>
      <td>".$row["tahun_lulus"]."</td>
      <td>".$row["jurusan"]."</td>
      <td><img src='".$row["foto"]."' width='50'></td>
      </tr>";
    }
    echo "</table>";
  } else {
    echo "<div class='alert alert-danger'>Alumni tidak ditemukan.</div>";
  }
  
  $conn->close();
}
?>

<div class="container mt-5">
  <h2 class="mb-4">Penelusuran Alumni</h2>
  <!-- Form pencarian alumni -->
  <form method="POST" action="">
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Alumni</label>
      <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <button type="submit" class="btn btn-primary">Cari Alumni</button>
  </form>
</div>