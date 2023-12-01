<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&family=Poppins:ital,wght@0,500;1,400&family=Roboto:wght@500&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login user</title>
    <link rel="stylesheet" href="masuk.css" />
  </head>
  <body>
    <main>
      <div class="container">
        <img src="img/foto-toko.jpg" alt="Gedung SMK" class="bg" />
        <form action="operator/ceklogin.php" method="POST" class="card">
          <img src="img/foto-logo.png" alt="logo" width="250px" />
          <!-- <h2><center>Masuk dengan akun Toko</center></h2> -->
          <div class="input">
            <label for="email">Ussername</label>
            <input
              type="text"
              name="username"
              placeholder="Ussername"
              required
              oninvalid="this.setCustomValidity('Masukan Email kamu')"
              oninput="this.setCustomValidity('')"
            />
          </div>
          <div class="input">
            <label for="Password">Password</label>
            <input
              type="password"
              name="password"
              placeholder="Password"
              required
              oninvalid="this.setCustomValidity('Masukan Password Dengan benar')"
              oninput="this.setCustomValidity('')"
            />
          </div>
          <button>Login</button>
          <p style="font-size: 10px; margin-top: -10px">Dapatkan akun toko dengan melakukan pembelian di maulana store</p>
        </form>
      </div>
    </main>
  </body>
</html>
