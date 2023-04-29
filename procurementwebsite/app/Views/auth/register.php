<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Registration</h2>
            <form action="<?= site_url('auth/submitRegister') ?>" method="POST">
                <?= csrf_field(); ?>
                <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php endif ?>
                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                <?php endif ?>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="name" placeholder="Enter username" value="<?= set_value('name'); ?>">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'name') : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?= set_value('email'); ?>">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" value="<?= set_value('password'); ?>">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="cpassword" placeholder="Confirm password" value="<?= set_value('cpassword'); ?>">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'cpassword') : '' ?></span>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
        </div>
    </div>
</div>