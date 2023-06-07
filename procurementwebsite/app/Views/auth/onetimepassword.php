<div class="container p-4" id="login">
    <div class="col-lg-6 col-md-12 mb-4 mb-md-0  m-auto">
        <form class="form_container" action="<?= site_url('auth/check') ?>" method="POST" autocomplete="off">

            <img src="<?php echo base_url('assets/images/logob.png'); ?>" width="50%" height="60%" alt="logo" />
            <?= csrf_field(); ?>
            <?php if (!empty(session()->getFlashdata('fail'))): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('fail'); ?>
                </div>
            <?php endif ?>
            <div class="title_container">
                <p class="title">Enter the OTP</p>
                <span class="subtitle">We have sent a verification code to your Email.</span>
            </div>
            <br>
            <div class="d-flex align-items-center justify-content-between mt-2 mb-4 ">
                <input id="input1" class="form-control mr-sm-5 " type="text" maxlength="1">
                <input id="input2" class="form-control mr-sm-5 " type="text" maxlength="1">
                <input id="input3" class="form-control mr-sm-5 " type="text" maxlength="1">
                <input id="input4" class="form-control " type="text" maxlength="1">
            </div>
            <button type="submit" class="sign-in_btn">
                <span id="Login-button"> Verify </span>
            </button>
          

           
            <button title="Sign In" type="submit" class="sign-in_ggl">
                <span> Cancel </span>
            </button>

            <a href="#" class="note">didn't get the code?</p>
        </form>
    </div>
</div>
</div>