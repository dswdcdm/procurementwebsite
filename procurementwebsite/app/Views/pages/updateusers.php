<?php foreach ($users as $user) : ?>
    <?php if ($user['id'] == $userid) : ?>

<section style="background-color: #eee;">
    <form action="<?php echo htmlspecialchars(site_url('admin/adminUpdateUsers/'.$userInfo['id']));  ?>" method="POST" autocomplete="off" enctype="multipart/form-data" >
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
                                        <input placeholder="Name" name="name" type="text" class="input_field w-50 " id="name" disabled = "disabled" value="<?= $user['name']; ?>">
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
                                        <input placeholder="Email" name="email" type="email" class="input_field w-50" id="email" disabled = "disabled" value="<?= $user['email']; ?>">
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
                                    <select name="Position"  id="position" type = "text" class="w-50" value="<?= $user['is_admin']; ?>">
                                        <option value="ADMIN"><?= $user['is_admin']; ?></option>
                                        <option value="ADMIN">ADMIN</option>
                                        <option value="USER">USER</option>
                                    </select>
                                        
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'is_admin') : '' ?></span>
                                    </p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Status</p>
                                </div>
                                <div class="col-sm-9">
                                    <select name="status" id="status"   type = "text" class="w-50" value="<?= $user['status']; ?>">
                                    <option value="ACTIVE"><?= $user['status']; ?></option>
                                        <option value="ACTIVE">ACTIVE</option>
                                        <option value="INACTIVE">IN ACTIVE</option>
                                    </select>
                                    
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'status  ') : '' ?></span>
                                    </p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Date Registered</p>
                                </div>
                                <div class="col-sm-9">
                                    <input placeholder="Date" name="date" type="text" class="input_field w-50" id="date" disabled = "disabled" value="<?= $user['date_created']; ?>">
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'date_created  ') : '' ?></span>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex flex-column mt-4">
                                <button class="btn btn-primary btn-sm" type="submit">UPDATE</button>
                            </div>
                        </div>
                    </div>

                </div>

    </form>
    </div>
    </div>
    </form>
</section>
<?php endif; ?>
<?php endforeach; ?>