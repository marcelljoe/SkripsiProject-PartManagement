<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header text-center">
        PT. Galih Ayom Paramesti
        <br>Warehouse | Raw Material Control
        </div>
        <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
            <form class="user" method="post" action="<?= base_url('auth'); ?>">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="email" name='email' class="form-control" placeholder="Email address" value="<?= set_value('email'); ?>">
                        <label for="email">Email Address</label>
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" id="password" name='password' class="form-control" placeholder="Password">
                        <label for="password">Password</label>
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            </div>
    </div>
</div>