<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      Sistem Informasi Poliklinik
    </a>
    <button class="navbar-toggler"
    type="button" data-bs-toggle="collapse"
    data-bs-target="#navbarNavDropdown"
    aria-controls="navbarNavDropdown" aria-expanded="false"
    aria-label="Toggle navigation">
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="berandawal.php">
            Home
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button"
          data-bs-toggle="dropdown" aria-expanded="false">
            Data Master
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="dokter.php?page=dokter">
                Dokter
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="pasien.php?page=pasien">
                Pasien
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" 
          href="periksa.php?page=periksa">
            Periksa
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto" style="position: absolute; right: 0;">
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-5">
    <h1 class="text-center">Selamat Datang di Sistem Informasi Poliklinik</h1>
    <p class="text-center lead">Tempat yang nyaman untuk merawat kesehatan Anda.</p>
    </div>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-4 mx-auto text-center">
      <h2>Dokter</h2>
      <img src="pct/dokter.png" height="200" width="150" alt="Dokter Image"> 
      <p>jika ingin melihat data dokter silahkan login terlebih dahulu.</p>
    </div>
    <div class="col-md-4 mx-auto text-center">
      <h2>Pasien</h2>
      <img src="pct/pasien.png" height="200" width="150" alt="Pasien Image">
      <p>jika sudah mempunyai akun silahkan ke halaman login.</p>
    </div>
    <div class="col-md-4 mx-auto text-center">
      <h2>Periksa</h2>
      <img src="pct/periksa.png" height="200" width="150" alt="Periksa Image">
      <p> data periksa pada poliklinik.</p>
      
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>