<!-- /.login-logo -->
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Ganti Password</p>
        <?= $this->session->flashdata('message') ?>
        <form action="<?= base_url('') ?>auth/ganti_pass" method="post">
            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control" value="<?php echo $this->db->query("SELECT email FROM pegawai WHERE email = '$email'")->row()->email ?>" disabled>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password ...">
            </div>
            <div class="input-group mb-3">
                <input type="password" name="k_password" class="form-control" placeholder="Konfirmasi Password ...">
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" value="login" class="btn btn-primary btn-block">Ganti Password</button>
                </div>
                <!-- /.col -->
            </div>

        </form>
        <p class="mb">
            <center><a href="<?= base_url(); ?>">Kembali</a> </center>
        </p>
    </div>
    <!-- /.login-card-body -->
</div>
</div>
<!-- /.login-box -->