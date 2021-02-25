<?php if($this->session->userdata('id_user')){ ?>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">

        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url() ?>">PetshopQu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link <?php echo ($page=='home') ? 'active' : '' ?>" <?php echo ($page=='home') ? 'aria-current="page"' : '' ?> href="<?php echo base_url();?>">Beranda</a>
                    <?php if($this->session->userdata('role') == '1'){ ?>
                        <a class="nav-link <?php echo ($page=='produk') ? 'active' : '' ?>" <?php echo ($page=='produk') ? 'aria-current="page"' : '' ?> href="<?php echo base_url();?>Admin/produk">Produk</a>
                        <a class="nav-link <?php echo ($page=='user') ? 'active' : '' ?>" <?php echo ($page=='user') ? 'aria-current="page"' : '' ?> href="<?php echo base_url(); ?>Admin/user">User</a>
                    <?php }else{ ?>
                        <a class="nav-link <?php echo ($page=='produk') ? 'active' : '' ?>" <?php echo ($page=='produk') ? 'aria-current="page"' : '' ?> href="<?php echo base_url();?>produk">Produk</a>
                    <?php } ?>
                    <a class="nav-link" href="<?php echo base_url(); ?>auth/logout">Logout</a>
                </div>
            </div>
        </div>
    </nav>
<?php }else{ ?>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">

        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url() ?>">PetshopQu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link <?php echo ($page=='home') ? 'active' : '' ?>" <?php echo ($page=='home') ? 'aria-current="page"' : '' ?> href="<?php echo base_url();?>">Beranda</a>
                    <a class="nav-link <?php echo ($page=='produk') ? 'active' : '' ?>" <?php echo ($page=='produk') ? 'aria-current="page"' : '' ?> href="<?php echo base_url();?>produk">Produk</a>
                    <a class="nav-link <?php echo ($page=='register') ? 'active' : '' ?>" <?php echo ($page=='register') ? 'aria-current="page"' : '' ?> href="<?php echo base_url();?>auth/register">Register</a>
                    <a class="nav-link <?php echo ($page=='login') ? 'active' : '' ?>" <?php echo ($page=='login') ? 'aria-current="page"' : '' ?> href="<?php echo base_url();?>auth">Login</a>
                </div>
            </div>
        </div>
    </nav>
<?php } ?>