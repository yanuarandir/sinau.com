<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SINAU - Login</title>
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
    <div class="center">
      <h1>LOGIN</h1>
      <form class="" action="http://localhost/userregistration/validation.php" method="post">
        <div class="text_field">
          <input type="email" name="email" required>
          <span></span>
          <label for="Email">Email</label>
        </div>

        <div class="text_field">
          <input type="password" name="password" required>
          <span></span>
          <label for="Password">Password</label>
        </div>

        <div class="pass">Lupa Password ?</div>

        <input type="submit" name="" value="Login">

        <div class="signup"> Belum punya akun?
          <a href="http://localhost/userregistration/daftar.php">Sign Up</a>

        </div>


      </form>

    </div>
  </body>
</html>
