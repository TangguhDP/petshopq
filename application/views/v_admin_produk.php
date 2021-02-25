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
            <h1 class="text-center">Daftar Produk</h1>
            <div class="col col-8">
                <?php echo $this->session->flashdata('message') ?>
                <div class="row">
                    <form method="get" action="<?php echo site_url('Admin/produk') ?>" class="col-9">
                        <div style="max-width: 550px;" class="input-group mb-3">
                            <input type="text" class="form-control" name="nama" placeholder="Cari Produk" aria-label="Cari Produk"
                                aria-describedby="cari" required value="<?php echo (isset($params['nama'])) ? $params['nama'] : '' ?>" >
                            <button class="btn btn-primary" type="submit" id="cari">Cari</button>
                        </div>
                    </form>
                    <div class="col-3">
                        <button type="button" class="btn btn-primary mb-2" onclick="location.href='<?php echo base_url();?>admin/form_produk'">Tambah Data</button>
                    </div>
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
                        <?php if($produk){ ?>
                            <?php for ($i=0; $i <count($produk) ; $i++) { ?>
                                <tr>
                                    <th scope="row"><?php echo ($i+1) ?></th>
                                    <td><?php echo $produk[$i]->nama ?></td>
                                    <td><?php echo $produk[$i]->deskripsi ?></td>
                                    <td>Rp. <?php echo number_format($produk[$i]->harga,2,',','.') ?></td>
                                    <td><?php echo $produk[$i]->stok ?></td>
                                    <td>
                                        <a class="btn btn-warning" href="<?php echo site_url('Admin/edit_produk/'.$produk[$i]->id_produk) ?>">
                                            <ion-icon class="text-light" name="create-outline"></ion-icon>
                                        </a> | <a href="<?php echo site_url('Admin/delete_produk/'.$produk[$i]->id_produk) ?>" class="btn btn-danger">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </td>
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
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>

</html>