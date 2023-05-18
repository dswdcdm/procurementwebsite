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

                            <!--  <ul class="d-flex mb-2 text-decoration-none gap-5 align-items-center">

                                <input class="form-check-input checkbox" type="checkbox" id="flexCheckDefault">
                                <li class="menu-item hidden p-2"><img src="<?= $cartitem['item_image']; ?> " width="10%" height="10%" alt="logo" class="rounded-circle img-fluid" alt="avatar" style="width: 70px;" /></li>
                                <li class="menu-item hidden me-auto p-2">
                                    <p> <?= $cartitem['item_name']; ?></p>
                                </li>

                                <li class="menu-item hidden p-2 "><span>₱<?php $cartPrice = floatVal($cartitem['item_price']);
                                                                            echo $cartPrice; ?></span></li>
                                <li class="menu-item hidden p-2 "><button class="btn btn-primary btn-sm mr-1" id="deccrementButton">-</button> <span class="align-middle " id="input-quantity" ><?php echo $cartitem['quantity']; ?></span><button class="btn btn-primary btn-sm mr-2 ml-2">+</button></li>
                                <li class="menu-item hidden p-2 "><span>₱ <?= $totalPrice; ?></span></li>
                                <li class="menu-item hidden p-2 "><span>
                                        <form method="POST" class="" action="<?= site_url('itemcart/delete/' . $cartitem['id']) ?>">
                                            <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                                        </form>
                                    </span></li>

                                </li>
                            </ul> -->

                            <div class="col-12 col-md-12  ">
                                <div class="card shadow-0 border rounded-3">
                                    <div class="card-body">
                                        <div class="row">
                                    
                                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0 ">
                                                
                                                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                                    
                                                    <img src="<?= $cartitem['item_image']; ?>" width="50%" height="60%" alt="logo" />
                                                    <a href="#">
                                                        <div class="hover-overlay">
                                                            <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xl-6">
                                                <h5></h5>
                                                <div class="d-flex flex-row">

                                                    <div class="text-dark mb-1 me-2">
                                                    <input class="form-check-input checkbox " type="checkbox" id="flexCheckDefault">        &#xe242;<?= $cartitem['item_price']; ?>
                                                    </div>
                                                    <span class="font-weight-bold"> <?= $cartitem['item_name']; ?> </span>

                                                    <span class="font-weight-bold">DOWNLOADS</span>
                                                </div>
                                                <div class="mt-1 mb-0 text-muted small">
                                                    <span><?= $cartitem['item_name']; ?> <br/><?= $cartitem['item_description']; ?>  </span>
                                                </div>
                                            </div>


                                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                                <div class="d-flex flex-row align-items-center mb-1">
                                                    <h4 class="mb-1 me-1">₱ <?= $cartitem['item_price']; ?></h4>
                                                    
                                                    <!-- <span class="text-danger"><s>₱ 4,010</s></span> -->
                                                </div>

                                                <h6 class="text-danger">     </h6>
                                                <form method="POST" class="" action="<?= site_url('itemcart/delete/' . $cartitem['id']) ?>">
                                                    <div class="d-flex flex-column mt-4">
                                                        <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                                                    </div>
                                                </form>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        <li class="menu-item hidden p-2 "><span>₱ 100 </span></li>
                        <li class="menu-item hidden p-2 "><button class="btn btn-info btn-sm">PROCEED</button></li>

                        </li>
                    </ul>
                </div>
            </div>
</section>