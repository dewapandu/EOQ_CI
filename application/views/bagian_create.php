<?php include "head.php" ?>
<?php include "navbar.php" ?>
<div class="main__wrapper">
    <div class="container pt-5">
        <h4>Tambah Bagian</h4>
        <nav class="mb-5" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="<?php echo base_url(); ?>bagian_index">Bagian</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah</li>
            </ol>
        </nav>
        <form action="<?php echo base_url('bagian_store') ?>" method="POST" name="create_bagian">
            <input type="hidden" name="id_bagian" />
            <div class="row gy-3">
                <div class="col-6">
                    <label class="form-label">Nama Bagian</label>
                    <input type="text" class="form-control" name="nama_bagian" placeholder="Masukkan nama bagian" required />
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
    $('#bagian-nav').addClass('active');
</script>
<?php include "footer.php" ?>