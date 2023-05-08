<h1 class="text-center pt-2 fw-bold">AS - BGMD DIRECTORY OF OFFICERS</h1>

<div class="teamWrapper">
    <div class="section-container">
        <div class="topgrid">
            <div class="colmun pl-5 pr-5">
                <div class="teamcol">
                    <div class="teamcolinner">
                        <div class="card-body">
                            <div class="row">
                                <?php foreach ($employee as $employee) : ?>
                                    <?php if ($employee['id'] == 1) : ?>
                                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0 ">
                                            <div class="bg-image text-center hover-zoom ripple rounded ripple-surface">
                                                <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="rounded-circle img-fluid" style="width: 180px;" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <h5>I'M <?= $employee['name']; ?></h5>
                                            <div class="d-flex flex-row">
                                                <span class="font-weight-bold"><?= $employee['about']; ?></span>
                                            </div>
                                            <div class="mt-1 mb-0 text-muted small">
                                                <span> <?= $employee['email']; ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                            <div class="d-flex flex-row align-items-center mb-1">
                                                <h4 class="mb-1 me-1"> <?= $employee['name']; ?></h4>
                                            </div>
                                            <?php if ($employee['status'] == "PERMANENT") : ?>
                                                <h6 class="text-success"> <?= $employee['status']; ?> </h6>
                                            <?php else : ?>
                                                <h6 class="text-danger"> <?= $employee['status']; ?> </h6>
                                            <?php endif; ?>

                                            <div class="d-flex flex-column mt-4">
                                                <a href="/Product/productItem/<?= $employee['id']; ?>" class="btn btn-primary btn-sm" type="button">Contact</a>

                                            </div>
                                        </div>
                                    <?php else : ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 offset-md-3 offset-2">
        <div class="teamcol">
            <div class="teamcolinner">
                <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                <div class="member-name">
                    <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                    <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-md-between ">
            <div class="col-12 col-lg-3">
                <div class="teamcol">
                    <div class="teamcolinner">
                        <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class=" img-fluid" /></div>
                        <div class="member-name">
                            <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                            <p style="font-size:0.8em;"><?= $employee['about']; ?></p>

                        </div>
                    </div>

                </div>
                <div class="d-flex" style="height: 10px;">
                    <div class="vr offset-6"></div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="teamcol">
                    <div class="teamcolinner">
                        <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class=" img-fluid" /></div>
                        <div class="member-name">
                            <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                            <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="d-flex" style="height: 10px;">
                    <div class="vr offset-6"></div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="teamcol">
                    <div class="teamcolinner">
                        <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class=" img-fluid" /></div>
                        <div class="member-name">
                            <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                            <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="d-flex" style="height: 10px;">
                    <div class="vr offset-6"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-evenly gap-4 ">
            <div class="col-12 col-lg-3">
                <div class="teamcol">
                    <div class="teamcolinner">
                        <div class="avatar"> <img src="<?php echo base_url('assets/images/vacantimage.png'); ?> " alt="profile" class=" img-fluid" /></div>
                        <div class="member-name">
                            <h2 style="font-size:1rem;">VACANT</h2>
                            <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="teamcol">
                    <div class="teamcolinner">
                        <div class="avatar"> <img src="<?php echo base_url('assets/images/vacantimage.png'); ?> " alt="profile" class="img-fluid" /></div>
                        <div class="member-name">
                            <h2 style="font-size:1rem;">VACANT</h2>
                            <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid ">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4  div">
                <div class="row  justify-content-evenly">
                    <div class="col-12 col-lg-12 col-xl-4 div">
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                    <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                    <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                    <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                    <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                    <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                    <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                    <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                    <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                    <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                    <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                    <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-4  div">

                <div class="col-12 col-lg-12 col-xl-4 div offset-xl-2">
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-4  div">

                <div class="col-12 col-lg-12 col-xl-4 div">
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>