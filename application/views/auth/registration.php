    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Register an Account</div>
            <div class="card-body">
                <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="name" class="form-control" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                            <label for="name">Full name</label>
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="email" class="form-control" name="email" placeholder="Email address" value="<?= set_value('email'); ?>">
                            <label for="email">Email address</label>
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="password" id="password1" name="password1" class="form-control" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    <label for="password1">Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="password" id="password2" name="password2" class="form-control" placeholder="Confirm password">
                                    <label for="password2">Confirm password</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Register</button>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="<?= base_url('auth'); ?>">Login Page</a>
                    <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>