<?php include "head.php" ?>
<?php include "navbar.php" ?>
<div class="main__wrapper">
    <div class="container pt-5">
        <h4>Barang</h4>
        <nav class="mb-5" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="<?php echo base_url(); ?>welcome">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Barang</li>
            </ol>
        </nav>
        <div class="table__action">
            <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>barang_create">Tambah</a>
        </div>
        <table class="table table-light table-stripped">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Biaya Penyimpanan</th>
                    <th>Periode Permintaan</th>
                    <th>Satuan</th>
                    <th>Konversi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($barang) : ?>
                    <?php $no=1; foreach ($barang as $brng) : ?>
                        <tr id="bagian_id_<?php echo $brng->id_barang; ?>">
                            <td class="text-center"><?php echo $no; ?></td>
                            <td><?php echo $brng->nama_barang; ?></td>
                            <td><?php echo $brng->harga_barang; ?></td>
                            <td><?php echo $brng->biaya_penyimpanan; ?></td>
                            <td><?php echo $brng->periode_permintaan; ?></td>
                            <td><?php echo $brng->satuan; ?></td>
                            <td><?php echo $brng->konversi; ?></td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-outline-warning btn-sm" href="<?php echo base_url('barang_edit/' . $brng->id_barang) ?>">Ubah</a>
                                    <form class="ms-2" action="<?php echo base_url('barang_delete/' . $brng->id_barang) ?>" method="post">
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
    $('#barang-nav').addClass('active');
</script>
<?php include "footer.php" ?>