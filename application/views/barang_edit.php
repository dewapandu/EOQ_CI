<?php include "head.php" ?>
<?php include "navbar.php" ?>
<div class="main__wrapper">
    <div class="container pt-5">
        <h4>Barang</h4>
        <nav class="mb-5" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="<?php echo base_url(); ?>barang_index">Barang</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah</li>
            </ol>
        </nav>
        <form action="<?php echo base_url('barang_store') ?>" method="POST" name="create_barang">
            <input type="hidden" name="id_barang" value="<?php echo $barang->id_barang ?>" />
            <div class="row gy-3">
                <div class="col-6">
                    <label class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan nama barang" value="<?php echo $barang->nama_barang ?>" required />
                </div>
                <div class="col-6">
                    <label class="form-label">Harga Barang</label>
                    <input type="text" class="form-control" name="harga_barang" placeholder="Masukkan harga barang" value="<?php echo $barang->harga_barang ?>" required />
                </div>
                <div class="col-6">
                    <label class="form-label">Biaya Penyimpanan</label>
                    <input type="text" class="form-control" name="biaya_penyimpanan" placeholder="Masukkan biaya penyimpanan" value="<?php echo $barang->biaya_penyimpanan ?>" required />
                </div>
                <div class="col-6">
                    <label class="form-label">Periode Permintaan</label>
                    <input type="text" class="form-control" name="periode_permintaan" placeholder="Masukkan periode permintaan" value="<?php echo $barang->periode_permintaan ?>" required />
                </div>
                <div class="col-6">
                    <label class="form-label">Satuan</label>
                    <input type="text" class="form-control" name="satuan" placeholder="Masukkan satuan" value="<?php echo $barang->satuan ?>" required />
                </div>
                <div class="col-6">
                    <label class="form-label">Konversi</label>
                    <input type="text" class="form-control" name="konversi" placeholder="Masukkan konversi" value="<?php echo $barang->konversi ?>" required />
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $('#mainMenu').find('.nav-link').removeClass('active');
    $('#barang-nav').addClass('active');
</script>
<?php include "footer.php" ?>