<!-- /.login-logo -->
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Lupa Akun</p>
        <?= $this->session->flashdata('message') ?>
        <form action="<?= base_url('') ?>auth/cek_akun" method="post">
            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control">
                <div class="input-group-append">
                    <div class="input-group-text">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" value="login" class="btn btn-primary btn-block">Cek Akun</button>
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