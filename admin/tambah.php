<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Tambah Data</h2>
  <p>Silahkan menambah data mahasiswa pada form dibawah ini...!</p>
  <form action="/tambah-fungsi.php" method="POST" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="nama">Nama :</label>
      <input type="text" class="form-control" id="nama" placeholder= "Nama lengkap anda" name="nama" required>
      <div class="valid-feedback">OK</div>
      <div class="invalid-feedback">Nama harus diisi...!</div>
    </div>
    <div class="form-group">
      <label for="pwd">NIM :</label>
      <input type="number" class="form-control" id="nim" placeholder="NIM tanpa titik" name="nim" required>
      <div class="valid-feedback">OK</div>
      <div class="invalid-feedback">NIM harus angka atau tidak boleh kosong...!</div>
    </div>
    <label for="jk">jenis kelamin :</label>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="jk" value="Laki-laki" checked>Laki-laki
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="jk" value="Perempuan">Perempuan
      </label>
    </div>
    <div class="form-group">
      <label for="sel1">Kelas :</label>
      <select class="form-control" id="sel1" name="id_kelas" required>
        <option value="">--Pilih kelas--</option>
        <option value="kelas">Kelas</option>";
      </select>
    </div>
    <div class="form-group">
      <label for="email">Email :</label>
      <input type="email" class="form-control" id="email" placeholder= "email aktif anda" name="email" required>
      <div class="valid-feedback">OK</div>
      <div class="invalid-feedback">Format email salah atau data tidak boleh kosong...!</div>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <button type="button" class="btn btn-secondary" onclick="self.history.back()">Cancel</button>
  </form>
</div> 
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>
