<?php include "head.php" ?>
<?php include "navbar.php" ?>
<div class="main__wrapper">
    <div class="container pt-5">
        <h4>Bagian</h4>
        <nav class="mb-5" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="<?php echo base_url(); ?>welcome">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bagian</li>
            </ol>
        </nav>
        <div class="table__action">
            <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>bagian_create">Tambah</a>
        </div>
        <table class="table table-light table-stripped">
            <thead>
                <tr>
                    <th class="text-center" style="width:50px;">#</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($bagian) : ?>
                    <?php $no = 1;
                    foreach ($bagian as $role) : ?>
                        <tr id="bagian_id_<?php echo $role->id_bagian; ?>">
                            <td class="text-center" style="width:50px;"><?php echo $no; ?></td>
                            <td><?php echo $role->nama_bagian; ?></td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-outline-warning btn-sm" href="<?php echo base_url('bagian_edit/' . $role->id_bagian) ?>">Ubah</a>
                                    <form class="ms-2" action="<?php echo base_url('bagian_delete/' . $role->id_bagian) ?>" method="post">
                                        <button class="btn btn-outline-danger btn-sm" type="submit">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php $no++;
                    endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    $('#mainMenu').find('.nav-link').removeClass('active');
    $('#bagian-nav').addClass('active');
</script>
<?php include "footer.php" ?>