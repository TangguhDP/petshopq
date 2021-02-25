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
            <h1 class="text-center">Daftar User</h1>
            <div class="col col-8">
                <?php echo $this->session->flashdata('message') ?>
                <button type="button" class="btn btn-primary mb-2" onclick="location.href='<?php echo base_url();?>Admin/form_user'">Tambah Data</button>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Role</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if($users){ ?>
                            <?php for ($i=0; $i <count($users) ; $i++) { ?>
                                <tr>
                                    <th scope="row"><?php echo ($i+1) ?></th>
                                    <td><?php echo $users[$i]->nama ?></td>
                                    <td><?php echo $users[$i]->email ?></td>
                                    <td><?php echo $users[$i]->alamat ?></td>
                                    <td><?php echo ($users[0]->role == '1') ? 'Admin' : 'Customer'; ?></td>
                                    <td>
                                        <a class="btn btn-warning" href="<?php echo site_url('Admin/edit_user/'.$users[$i]->id_user) ?>">
                                            <ion-icon class="text-light" name="create-outline"></ion-icon>
                                        </a> | <a href="<?php echo site_url('Admin/delete_user/'.$users[$i]->id_user) ?>" class="btn btn-danger">
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