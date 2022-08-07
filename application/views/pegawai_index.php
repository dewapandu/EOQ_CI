<?php include "head.php" ?>
<?php include "navbar.php" ?>
<div class="main__wrapper">
    <div class="container pt-5">
        <h4>Pegawai</h4>
        <nav class="mb-5" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="<?php echo base_url(); ?>welcome">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pegawai</li>
            </ol>
        </nav>
        <div class="table__action">
            <a class="btn btn-outline-primary" href="#">Tambah</a>
        </div>
        <table class="table table-light table-stripped">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Nomor Handphone</th>
                    <th>Bagian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($pegawai) : ?>
                    <?php $no=1; foreach ($pegawai as $pgw) : ?>
                        <tr id="bagian_id_<?php echo $pgw->id_pegawai; ?>">
                            <td class="text-center"><?php echo $no ?></td>
                            <td><?php echo $pgw->nama_pegawai; ?></td>
                            <td><?php echo $pgw->username; ?></td>
                            <td><?php echo $pgw->alamat_pegawai; ?></td>
                            <td><?php echo $pgw->hp_pegawai; ?></td>
                            <td>
                                <?php
                                $roleName = '';
                                switch ($pgw->id_bagian) {
                                    case '7':
                                        $roleName = 'Administrator';
                                        break;
                                    case '12':
                                        $roleName = 'Gudang';
                                        break;
                                    case '8':
                                        $roleName = 'Manajer';
                                        break;
                                    case '9':
                                        $roleName = 'Pesan ke Supplier';
                                        break;
                                    default;
                                        break;
                                }
                                echo $roleName;
                                ?>

                            </td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-outline-warning btn-sm" href="#">Ubah</a>
                                    <form class="ms-2" action="<?php echo base_url('pegawai_delete/' . $pgw->id_pegawai) ?>" method="post">
                                        <button class="btn btn-outline-danger btn-sm" type="submit">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php $no++; endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    $('#mainMenu').find('.nav-link').removeClass('active');
    $('#pegawai-nav').addClass('active');
</script>
<?php include "footer.php" ?>