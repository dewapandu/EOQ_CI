<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid justify-content-between">
        <a class="navbar-brand h1 pb-0" href="#">Thesis</a>
        <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" id="home-nav" href="<?php echo base_url(); ?>welcome">Home</a>
                </li>
                <?php if ($this->session->userdata('role') == '7') { ?>
                    <li class="nav-item">
                        <a class="nav-link" id="bagian-nav" href="<?php echo base_url(); ?>bagian_index">Bagian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="barang-nav" href="<?php echo base_url(); ?>barang_index">Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pegawai-nav" href="<?php echo base_url(); ?>pegawai_index">Pegawai</a>
                    </li>
                <?php } else if ($this->session->userdata('role') == '9') { ?>
                    <li class="nav-item">
                        <a class="nav-link" id="pesan_barang-nav" href="<?php echo base_url(); ?>">Pesan Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="barang_baru-nav" href="<?php echo base_url(); ?>">Barang Baru</a>
                    </li>
                <?php } else if ($this->session->userdata('role') == '8') { ?>
                    <li class="nav-item">
                        <a class="nav-link" id="eoq-nav" href="<?php echo base_url(); ?>">EOQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="rop-nav" href="<?php echo base_url(); ?>">ROP</a>
                    </li>
                <?php } else if ($this->session->userdata('role') == '12') { ?>
                    <li class="nav-item">
                        <a class="nav-link" id="stok_barang-nav" href="<?php echo base_url(); ?>">Stok Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pengambilan-nav" href="<?php echo base_url(); ?>">Pengambilan</a>
                    </li>
                <?php } else {
                } ?>
            </ul>
            <ul class="nav navbar-nav navbar-right d-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link me-3 text-capitalize" aria-current="page" href="javascript:void(0)"> <?php echo $this->session->userdata('name'); ?> </a>
                </li>
                <li><a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>logout"> Log out </a></li>
            </ul>
        </div>
    </div>
</nav>