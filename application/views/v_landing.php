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
          <a class="nav-link active" aria-current="page" href="<?php echo base_url();?>">Beranda</a>
          <a class="nav-link" href="<?php echo base_url();?>produk">Produk</a>
          <a class="nav-link" href="<?php echo base_url();?>auth/register">Register</a>
          <a class="nav-link" href="<?php echo base_url();?>auth">Login</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm">
        <h1>PetshopQu</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id sapien venenatis, ultricies enim quis,
          blandit mauris. Curabitur leo urna, auctor vel ullamcorper in, consequat sed erat. Morbi sit amet lacus eget
          nisi feugiat ultricies euismod vel dui. Aenean erat quam, vehicula nec blandit sed, bibendum vitae est. Donec
          sollicitudin turpis nulla. In convallis venenatis nunc, id vestibulum sem aliquet ac. Aliquam ac placerat leo,
          sed egestas odio.
          Suspendisse potenti. Ut lacinia ligula malesuada erat laoreet, nec placerat dui commodo. Donec eleifend
          rhoncus turpis at euismod. Sed eu nisl eros. Ut purus nunc, blandit id tempus sed, blandit sit amet libero.
          Nulla facilisi. Nam dapibus nibh enim. Ut eu ullamcorper tellus, vel pellentesque erat. Sed tempus viverra
          sagittis. Vestibulum ultrices tellus quam, nec venenatis mauris volutpat elementum. Proin eget libero semper,
          ultricies leo ultrices, cursus justo.</p>
      </div>
      <div class="col-sm">
        <img src="https://http.cat/200.jpg"/>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</body>

</html>