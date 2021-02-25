<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Petshop Qu</title>
</head>

<body>
    <?php $this->load->view('v_menu'); ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <h1 class="text-center">Form <?php echo (isset($produk)) ? 'Edit' : '' ; ?> Produk</h1>
            <form action="<?php echo (isset($produk)) ? site_url('Admin/edit_produk/'.$produk[0]->id_produk) : site_url('Admin/form_produk'); ?>" method="POST" class="col-6">
                <?php echo $this->session->flashdata('message') ?>
                <?php echo (isset($produk)) ? '<input type="hidden" name="id_produk" value="'.$produk[0]->id_produk.'">' : '' ;?>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required value="<?php echo (isset($produk)) ? $produk[0]->nama : '' ;?>">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" min="0" id="stok" placeholder="Stok" name="stok" required value="<?php echo (isset($produk)) ? $produk[0]->stok : '' ;?>">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Harga</label>
                    <input type="number" min="0" class="form-control" id="harga" placeholder="harga" name="harga" required value="<?php echo (isset($produk)) ? $produk[0]->harga : '' ;?>">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea style="resize: none;" class="form-control" id="deskripsi" rows="3" name="deskripsi" placeholder="Deskripsi"><?php echo (isset($produk)) ? $produk[0]->deskripsi : '' ;?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>