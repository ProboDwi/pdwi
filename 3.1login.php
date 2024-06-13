


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="4.1style.css" />
  </head>
  <body>
    <div class="container">
      <form action="3.1login.php" method="POST">
        <h2>Welcome</h2>
        <div class="input-field">
          <input type="text" name="username" class="username" placeholder="Username" required />
          <!-- <i class="bx bxs-user"></i> -->
          <div class="input-field">
            <input type="email" name="email" class="email" placeholder="Email" required />
            <!-- <i class="bx bxs-lock-alt"></i> -->
          </div>
        </div>
        <div class="input-field">
          <input type="password" name="password" class="pw" placeholder="Password" required />
          <!-- <i class="bx bxs-lock-alt"></i> -->
        </div>
        <button type="submit" name="signup" class="login">Daftar</button>
        <a href="3.login.php">Sudah punya akun?</a>
      </form>
    </div>
  </body>
</html>

<?php
include "services/database.php";

  if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash_password = hash('sha256', $password);

    try {
      $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hash_password')";

    if ($db->query($sql)){
      header("Location: 3.login.php");
    } else {
      echo "<script>alert('Daftar gagal, silakan coba lagi.')</script>";
    }
    } catch (mysqli_sql_exception) {
      echo "<script>alert('Username sudah digunakan, silakan coba lagi.')</script>";
    }
    $db->close();
  }
?> 