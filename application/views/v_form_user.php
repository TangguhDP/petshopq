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
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <h1 class="text-center">Form <?php echo (isset($user)) ? 'Edit' : '' ; ?> User</h1>
            <form class="col-6" action="<?php echo (isset($user)) ? site_url('Admin/edit_user/'.$user[0]->id_user) : site_url('Admin/form_user'); ?>" method="POST">
                <?php echo $this->session->flashdata('message') ?>
                <?php echo (isset($user)) ? '<input type="hidden" name="id_user" value="'.$user[0]->id_user.'">' : '' ;?>    
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required placeholder="Nama" value="<?php echo (isset($user)) ? $user[0]->nama : '' ;?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="name@example.com" value="<?php echo (isset($user)) ? $user[0]->email : '' ;?>">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea style="resize: none;" class="form-control" id="alamat" name="alamat" rows="3"
                        placeholder="alamat"><?php echo (isset($user)) ? $user[0]->alamat : '' ;?></textarea>
                </div>
                <div class="mb-3">
                    <label for="passowrd" class="form-label"><?php echo (isset($user)) ? 'New' : '' ; ?> Password</label>
                    <input type="password" class="form-control" id="passowrd" placeholder="<?php echo (isset($user)) ? 'New' : '' ; ?> Password" name="password" <?php echo (isset($user)) ? '' : 'required' ; ?> >
                </div>
                <div class="mb-3">
                    <label for="passowrd" class="form-label">Role</label>
                    <select name="role" required class="form-control">
                        <option value="2" <?php echo ((isset($user)) && ($user[0]->role == '2')) ? 'selected' : '' ; ?>> Customer </option>
                        <option value="1" <?php echo ((isset($user)) && ($user[0]->role == '1')) ? 'selected' : '' ; ?>> Admin </option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary"><?php echo (isset($user)) ? 'Save' : 'Register' ; ?></button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>

</html>