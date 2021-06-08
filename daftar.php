<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SINAU - SIGN UP</title>
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
    <div class="center">
      <h1>SIGN UP</h1>
      <form class="" action="registration.php" method="post">
        <div class="text_field">
          <input type="text" name="nama" required>
          <span></span>
          <label for="Name">Masukkan Nama</label>
        </div>

        <div class="text_field">
          <input type="text" name="sekolah" required>
          <span></span>
          <label for="Sekolah">Masukkan Nama Sekolah</label>
          </div>

        <div class="text_field">
        <span></span>
          <label for="Jurusan"></label>
          <select required>
            <option value="">Pilih Jurusan</option>
            <option value="">RPL</option>
            <option value="">TKJ</option>
            <option value="">Multimedia</option>
          </select>
        </div>

        <div class="text_field">
          <input type="email" name="email" required>
          <span></span>
          <label for="Email">Masukkan Email</label>
        </div>

        <div class="text_field">
          <input type="password" name="password" required>
          <span></span>
          <label for="Password">Buat Password</label>
        </div>

        <input type="submit" name="" value="Daftar">

        <div class="signup"> Sudah punya akun?
          <a href="login.html">Login</a>

        </div>


      </form>

    </div>
  </body>
</html>
