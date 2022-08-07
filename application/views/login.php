<?php include "head.php" ?>
<div class="container-fluid">
    <div class="login__wrapper">
        <div class="row w-25">
            <div class="col-12">
                <h1>Sign In</h1>
                <?php
                if ($this->session->flashdata('message')) {
                    echo '
                    <div class="alert alert-danger">
                        ' . $this->session->flashdata("message") . '
                    </div>
                    ';
                }
                ?>
                <form action="<?php echo base_url(); ?>login_validation" method="post">
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Email address</label>
                        <input type="text" name="username" placeholder="Masukkan Username Anda" class="form-control" id="InputForEmail" value="<?= set_value('username')?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" placeholder="Masukkan Password Anda" class="form-control" id="InputForPassword" value="<?= set_value('username')?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php" ?>