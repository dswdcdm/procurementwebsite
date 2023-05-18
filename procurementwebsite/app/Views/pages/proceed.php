<?php foreach ($cartData as $cartitem) : ?>
    <?php if ($cartitem['user_id'] == $userInfo['id']) : ?>
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
                                    <input class="form-check-input checkbox " type="checkbox" id="flexCheckDefault"> &#xe242;
                                </div>
                                <span class="font-weight-bold"> <?= $cartitem['item_name']; ?> </span>

                            </div>
                            <div class="mt-1 mb-0 text-muted small">
                                <span><?= $cartitem['date_created']; ?> <br /><?= $cartitem['item_description']; ?> </span>
                            </div>
                        </div>


                        <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                            <div class="d-flex flex-row align-items-center mb-1">
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    <?= $cartitem['quantity']; ?>
                                </span>
                                <h4 class="mb-1 me-1">₱ <?= $cartitem['item_price']; ?></h4>
                            </div>
                            <!--    <h6 class="text-danger">   <?= $cartitem['quantity']; ?>  </h6> -->
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