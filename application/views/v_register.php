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
            <h1 class="text-center">Register</h1>
            <form class="col-6" action="<?php echo site_url('Auth/register') ?>" method="POST">
                <?php echo $this->session->flashdata('message'); ?>
                <input type="hidden" name="role" value="2">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                </div>
                <div class="mb-3">
                    <label for="passowrd" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="passowrd" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea style="resize: none;" class="form-control" name="alamat" id="alamat" rows="3" placeholder="alamat"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>