<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Login</h3>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('auth/check') ?>" method="POST">

                        <?= csrf_field(); ?>
                        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                        <?php endif ?>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required value="<?= set_value('email'); ?>">
                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required value="<?= set_value('password'); ?>">
                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>