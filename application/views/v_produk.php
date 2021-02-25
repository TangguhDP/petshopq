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
  <?php $this->load->view('v_menu'); ?>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <h1 class="text-center">Daftar produk yang dijual</h1>
      <div class="col col-8">
      <?php echo $this->session->flashdata('message') ?>
        <form method="get" action="<?php echo site_url('Produk/index') ?>" class="col-9">
            <div style="max-width: 550px;" class="input-group mb-3">
                <input type="text" class="form-control" name="nama" placeholder="Cari Produk" aria-label="Cari Produk"
                    aria-describedby="cari" value="<?php echo (isset($params['nama'])) ? $params['nama'] : '' ?>" >
                <button class="btn btn-primary" type="submit" id="cari">Cari</button>
            </div>
        </form>
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
          <?php if($produk){ ?>
                <?php for ($i=0; $i <count($produk) ; $i++) { ?>
                    <tr>
                        <th scope="row"><?php echo ($i+1) ?></th>
                        <td><?php echo $produk[$i]->nama ?></td>
                        <td><?php echo $produk[$i]->deskripsi ?></td>
                        <td>Rp. <?php echo number_format($produk[$i]->harga,2,',','.') ?></td>
                        <td><?php echo $produk[$i]->stok ?></td>
                        <?php if($this->session->userdata('id_user')){ ?>
                          <td>
                            <form action="<?php echo site_url('Produk/checkout') ?>" method="POST">
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="id_produk" value="<?php echo $produk[$i]->id_produk ?>">
                            <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user') ?>">
                            <button type="submit" class="btn btn-success">Beli</button>
                            </form>
                          </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            <?php }else{ ?>
                <tr><th colspan="6" style="text-align:center;"> Produk tidak ditemukan </th>
            <?php } ?>
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