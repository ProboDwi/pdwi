

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
    <link rel="stylesheet" href="4.style.css" />
  </head>
  <body>
    <div class="container">
      <form action="3.login.php" method="POST">
        <h2>Welcome</h2>
        <div class="input-field">
          <input type="text" name="username" class="username" placeholder="Username" required />
          <i class="bx bxs-user"></i>
        </div>
        <div class="input-field">
          <input type="password" name="password" class="pw" placeholder="Password" required />
          <i class="bx bxs-lock-alt"></i>
        </div>
        <button type="submit" name="login" class="login">Login</button>
        <a href="3.1login.php">Belum punya akun?</a>
      </form>
    </div>
  </body>
</html>

<?php
include "services/database.php";
session_start();

  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash_password = hash('sha256', $password);

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$hash_password'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
      $data = $result->fetch_assoc();
      $_SESSION['username'] = $data['username'];
      $_SESSION['is_login'] = true;

      header("Location: index.php");
    } else {
      echo "<script>alert('Username atau Password salah')</script>";
    }
    $db->close();
  }
?>