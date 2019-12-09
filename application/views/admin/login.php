<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/login.css"> 
<title>Masuk Admin</title>
</head>
<body>

<div class="bg-img">
  <form action="<?php echo base_url('admin'); ?>" class="container" method="post">
    <h1>Login</h1>
    <label for="email"><b>Nama Pengguna</b></label>
    <input type="text" placeholder="Masukkan Nama Pengguna" name="username" required autocomplete="off">
    <label for="psw"><b>Kata Sandi</b></label>
    <input type="password" placeholder="Masukkan Kata Sandi" name="password" required>
    <button type="submit" class="btn">Masuk</button>
  </form>
</div>

</body>
</html>
