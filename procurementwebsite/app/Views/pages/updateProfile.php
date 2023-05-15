<section style="background-color: #eee;">
    <form action="<?php echo htmlspecialchars(site_url('auth/submitRegister'));  ?>" method="POST" autocomplete="off">
        <?= csrf_field(); ?>
        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
        <?php endif ?>
        <?php if (!empty(session()->getFlashdata('success'))) : ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
        <?php endif ?>
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/pages">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="/pages/profile">User Profile</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " width="60%" height="60%" alt="logo" class="rounded-circle img-fluid" alt="avatar" style="width: 150px;" />
                            <p class="text-muted mb-1"><?= $userInfo['email']; ?></p>
                            <p class="text-muted mb-4"><?= $userInfo['address']; ?></p>
                            <div class="d-flex justify-content-center mb-2">
                                <?= $userInfo['is_admin']; ?>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        <input placeholder="Enter Full Name" name="name" type="text" class="input_field" id="name" value="<?= $userInfo['name']; ?>">
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'name') : '' ?></span>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        <input placeholder="Enter Email" name="email" type="email" class="input_field" id="email" value="<?= $userInfo['email']; ?>">
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        <input placeholder="Enter Phone" name="Phone" type="text" class="input_field" id="Phone" value="<?= $userInfo['phone']; ?>">
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'Phone') : '' ?></span>
                                    </p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <input placeholder="Enter Address" name="address" type="text" class="input_field" id="address" value="<?= $userInfo['address']; ?>">
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'address  ') : '' ?></span>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex flex-column mt-4">
                                <a href="/pages/profile" class="btn btn-primary btn-sm" type="button">UPDATE</a>
                            </div>
                        </div>
                    </div>

                </div>

    </form>
    </div>
    </div>
    </form>
</section>