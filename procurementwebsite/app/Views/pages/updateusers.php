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
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update User</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                

                <div class="col-lg-8 mx-auto">
                    <div class="card mb-4">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        <input placeholder="Name" name="name" type="text" class="input_field" id="name" value="">
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
                                        <input placeholder="Email" name="email" type="email" class="input_field" id="email" value="">
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Position</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        <input placeholder="Position" name="Phone" type="text" class="input_field" id="Phone" value="">
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'Phone') : '' ?></span>
                                    </p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Status</p>
                                </div>
                                <div class="col-sm-9">
                                    <input placeholder="Status" name="address" type="text" class="input_field" id="address" value="">
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'address  ') : '' ?></span>
                                    </p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Date Registered</p>
                                </div>
                                <div class="col-sm-9">
                                    <input placeholder="Date" name="address" type="text" class="input_field" id="address" value="">
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'address  ') : '' ?></span>
                                    </p>
                                </div>
                            </div>
                            <hr>
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