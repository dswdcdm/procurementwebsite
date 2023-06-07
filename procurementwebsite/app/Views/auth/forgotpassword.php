<div class="container p-4" id="login">
    <div class="col-lg-6 col-md-12 mb-4 mb-md-0  m-auto">
        <form class="form_container" action="<?= site_url('user/sendResetPasswordEmail') ?>" method="POST" autocomplete="off">

            <img src="<?php echo base_url('assets/images/logob.png'); ?>" width="50%" height="60%" alt="logo" />
            <?= csrf_field(); ?>
            <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
            <?php endif ?>
            <div class="title_container">
                <p class="title">Recover your Account</p>
                <span class="subtitle">just create an account and enjoy the experience.</span>
            </div>
            <br>

            <div class="input_container">
                <label class="input_label" for="email_field">Email</label>
                <svg fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg" class="icon">
                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#141B34" d="M7 8.5L9.94202 10.2394C11.6572 11.2535 12.3428 11.2535 14.058 10.2394L17 8.5"></path>
                    <path stroke-linejoin="round" stroke-width="1.5" stroke="#141B34" d="M2.01577 13.4756C2.08114 16.5412 2.11383 18.0739 3.24496 19.2094C4.37608 20.3448 5.95033 20.3843 9.09883 20.4634C11.0393 20.5122 12.9607 20.5122 14.9012 20.4634C18.0497 20.3843 19.6239 20.3448 20.7551 19.2094C21.8862 18.0739 21.9189 16.5412 21.9842 13.4756C22.0053 12.4899 22.0053 11.5101 21.9842 10.5244C21.9189 7.45886 21.8862 5.92609 20.7551 4.79066C19.6239 3.65523 18.0497 3.61568 14.9012 3.53657C12.9607 3.48781 11.0393 3.48781 9.09882 3.53656C5.95033 3.61566 4.37608 3.65521 3.24495 4.79065C2.11382 5.92608 2.08114 7.45885 2.01576 10.5244C1.99474 11.5101 1.99475 12.4899 2.01577 13.4756Z"></path>
                </svg>
                <input placeholder="name@mail.com" name="email" type="email" class="input_field" id="email_field" value="<?= set_value('email'); ?>">
                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
            </div>

            <button type="submit" class="sign-in_btn">
                <span class="text-decoration-none"> Change password</span>
            </button>

            <div class="separator">
                <hr class="line">
                <span>Or</span>
                <hr class="line">
            </div>
            <button title="Sign In" type="submit" class="sign-in_ggl">
                <span><a href="/auth"> Login</a></span>
            </button>

            <a href="register" class="note">don't have an account ?</p>
        </form>
    </div>
</div>
</div> 
