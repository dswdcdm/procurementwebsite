<section style="background-color: #eee;">
    <div class="container py-5">


        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="/pages">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">

                        <img src="<?php echo base_url('uploads/user.png'); ?> " width="60%" height="60%" alt="logo" class="rounded-circle img-fluid" alt="avatar" style="width: 150px;" />
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
                                <p class="text-muted mb-0"><?= ucfirst($userInfo['name']); ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $userInfo['email']; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Phone</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $userInfo['phone']; ?></p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $userInfo['address']; ?></p>
                            </div>
                        </div>
                        <div class="d-flex flex-column mt-4">
                            <a href="/pages/updateProfile" class="btn btn-primary btn-sm" type="button">UPDATE</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="cart text-decoration-none" id=" ">
            <div class=" menu shadow  w-100">
                <ul class="d-flex mb-3 text-decoration-none gap-5 align-items-center fw-bold">


                    <li class="menu-item hidden  p-2"><span>Product</span></li>
                    <li class="menu-item hidden me-auto p-2"><span>Description</span></li>
                    <li class="menu-item hidden p-2 "><span>Unit Price</span></li>
                    <li class="menu-item hidden p-2 "><span>Quantity</span></li>
                    <li class="menu-item hidden p-2 "><span>Total</span></li>
                    <li class="menu-item hidden p-2 "><span>Action</span></li>

                    </li>
                </ul>
            </div>

            <div class="cart text-decoration-none mt-2" id=" ">
                <div class=" menu shadow  w-100">
                    <?php foreach ($cartData as $cartitem) : ?>
                        <?php if ($cartitem['user_id'] == $userInfo['id']) : ?>

                            <ul class="d-flex mb-2 text-decoration-none gap-5 align-items-center">

                                <input class="form-check-input checkbox" type="checkbox" id="flexCheckDefault">
                                <li class="menu-item hidden p-2"><img src="<?= $cartitem['item_image']; ?> " width="10%" height="10%" alt="logo" class="rounded-circle img-fluid" alt="avatar" style="width: 70px;" /></li>
                                <li class="menu-item hidden me-auto p-2">
                                    <p> <?= $cartitem['item_name']; ?></p>
                                </li>

                                <li class="menu-item hidden p-2 "><span>₱ <?php $cartPrice = floatVal($cartitem['item_price']);
                                                                            echo $cartPrice; ?></span></li>
                                <li class="menu-item hidden p-2 "><button class="btn btn-primary btn-sm mr-2">-</button> <input class="align-middle " id ="input-quantity"value="<?= $cartitem['quantity']; ?>"><button class="btn btn-primary btn-sm mr-2 ml-2">+</button></li>
                                <li class="menu-item hidden p-2 "><span>₱ <?= $totalPrice; ?></span></li>
                                <li class="menu-item hidden p-2 "><span>
                                        <form method="POST" class="" action="<?= site_url('itemcart/delete/' . $cartitem['id']) ?>">
                                            <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                                        </form>
                                    </span></li>

                                </li>
                            </ul>
                        <?php else : ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <div class=" menu shadow  w-100">
                    <ul class="d-flex mb-3 text-decoration-none gap-5 align-items-center">
                        <input class="form-check-input " type="checkbox" value="" id="masterCheckbox">
                        <li class="menu-item hidden  p-2"><span>SELECT ALL</span></li>
                        <li class="menu-item hidden me-auto p-2"><button class="btn btn-danger btn-sm">Delete</button></li>
                        <li class="menu-item hidden p-2 "><span>Total :</span></li>
                        <li class="menu-item hidden p-2 "><span>₱ <?= $totalPrice; ?> </span></li>
                        <li class="menu-item hidden p-2 "><button class="btn btn-info btn-sm">PROCEED</button></li>

                        </li>
                    </ul>
                </div>
            </div>
</section>