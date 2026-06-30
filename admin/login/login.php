<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="login-card" autocomplete="off">
    <p class="eyebrow">Selamat Datang</p>
    <h1 class="title">Masuk ke akun</h1>
 
    <div class="field">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Masukkan username" required>
    </div>
 
    <div class="field">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Masukkan password" required>
    </div>
 
    <div class="field field--row">
      <label class="remember" for="remember">
        <input type="checkbox" id="remember" name="remember">
        <span class="checkbox-box">
          <svg viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12"></polyline>
          </svg>
        </span>
        <span class="label-text">Ingat saya</span>
      </label>
    </div>
 
    <button type="submit" class="btn-submit">Masuk</button>
  </form>
</body>
</html>