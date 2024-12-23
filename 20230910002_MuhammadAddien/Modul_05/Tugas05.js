$(document).ready(function () {
  // 1. Efek fade-in untuk gambar pada saat halaman dimuat
  $(".gallery-item").fadeTo(1000, 1);

  // 2. Ketika gambar diklik, tampilkan modal dengan gambar penuh
  $(".gallery-item").click(function () {
    const imgSrc = $(this).attr("src");
    $("#modalImage").attr("src", imgSrc);
    $("#modal").fadeIn(300); // Menampilkan modal dengan efek fade
  });

  // 3. Tutup modal ketika klik pada tombol close atau area di luar gambar
  $(".close-btn, #modal").click(function (event) {
    if ($(event.target).is("#modal") || $(event.target).is(".close-btn")) {
      $("#modal").fadeOut(300); // Menyembunyikan modal dengan efek fade
    }
  });
});
