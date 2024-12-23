<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Alumni</title>
    <style>
      body {
        background-color: #f4f4f4;
      }
      h1 {
          color: #333;
      }
      #message {
          margin-top: 20px;
          font-weight: bold;
      }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Registrasi Alumni</h1>
        <form id="registerForm">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="tahun_lulus">Tahun Lulus:</label>
                <input type="number" class="form-control" id="tahun_lulus" name="tahun_lulus" required>
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan:</label>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
        <div id="message" class="mt-3"></div>
    </div>

    <!-- jQuery and Bootstrap JS -->
     <script>
        $(document).ready(function() {
            $('#registerForm').on('submit', function(e) {
                e.preventDefault();
                
                $.ajax({
                    type: 'POST',
                    url: 'submit.php',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#message').html('<div class="alert alert-success">' + response + '</div>');
                        $('#registerForm')[0].reset();
                    },
                    error: function() {
                        $('#message').html('<div class="alert alert-danger">Terjadi kesalahan. Silakan coba lagi.</div>');
                    }
                });
            });
        });
     </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>