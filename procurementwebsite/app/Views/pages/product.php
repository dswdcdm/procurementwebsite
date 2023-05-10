<nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 ">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/pages">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Products</li>
    </ol>
    <form method="get" action="<?php echo htmlspecialchars(base_url('Product/searchProduct')); ?>" autocomplete="off">
        <div class="input-group mt-4">
            <input type="search" name="query" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon"  required/>
            <button type="submit" class="btn btn-outline-primary">search</button>
        </div>
      
    </form>
    <div class="py-4 mx-auto text-center"> <a href="https://gsets.dswd.gov.ph/users/login" target="_blank" class="btn btn-outline-primary ">REQUEST ITEM SPECIFICATION</a></div>
</nav>
</section>
<?php foreach ($producttb as $product) : ?>
    <div class="col-12 col-md-12 pl-4 pr-4 mt-4">
        <div class="card shadow-0 border rounded-3 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0 ">
                        <div class="bg-image hover-zoom ripple rounded ripple-surface">
                            <img src="<?= $product['image']; ?>" width="50%" height="60%" alt="logo" />
                            <a href="#">
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <h5><?= $product['name']; ?></h5>
                        <div class="d-flex flex-row">

                            <div class="text-danger mb-1 me-2">
                                <?php
                                /*  for ($i = 1; $i <= $product['ratings']; $i++) { */
                                echo '  <i class="fa fa-download"></i> DOWNLOADS';
                                /*   } */
                                ?>
                            </div>
                            <span class="font-weight-bold"><?= $product['ratings']; ?></span>
                        </div>
                        <div class="mt-1 mb-0 text-muted small">
                            <span> <?= $product['description']; ?></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                        <div class="d-flex flex-row align-items-center mb-1">
                            <h4 class="mb-1 me-1">₱ <?= $product['price']; ?></h4>
                            <!-- <span class="text-danger"><s>₱ 4,010</s></span> -->
                        </div>
                        <?php if ($product['status'] == "ACTIVE") : ?>
                            <h6 class="text-success"> <?= $product['status']; ?> </h6>
                        <?php else : ?>
                            <h6 class="text-danger"> <?= $product['status']; ?> </h6>
                        <?php endif; ?>

                        <div class="d-flex flex-column mt-4">
                            <a href="/Product/productItem/<?= $product['id']; ?>" class="btn btn-primary btn-sm" type="button">Details</a>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>