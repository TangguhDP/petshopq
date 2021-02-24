<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <title>Petshop Qu</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PetshopQu</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link" href="<?php echo base_url(); ?>">Beranda</a>
          <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>produk">Produk</a>
          <a class="nav-link" href="<?php echo base_url(); ?>auth/register">Register</a>
          <a class="nav-link" href="<?php echo base_url(); ?>auth">Login</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <h1 class="text-center">Daftar produk yang dijual</h1>
      <div class="col col-8">
        <div style="max-width: 550px;" class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari Produk" aria-label="Cari Produk"
            aria-describedby="cari">
          <button class="btn btn-primary" type="button" id="cari">Button</button>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Produk</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Harga</th>
              <th scope="col">Stok</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Meo Creamy</td>
              <td>Cemilan Kucing</td>
              <td>Rp 20.000</td>
              <td>20</td>
              <td>
                <button type="button" class="btn btn-success">Beli</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</body>

</html>