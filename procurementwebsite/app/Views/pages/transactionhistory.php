<section style="background-color: #eee;">
    <div class="container py-5">

<div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="/pages">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">History</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="cart text-decoration-none" id=" ">
            <div class=" menu shadow  w-100">
                <ul class="d-flex mb-3 text-decoration-none gap-5 align-items-center justify-content-between fw-bold">
                    <li class="menu-item mt-2"><span>History</span></li>
                    <li class="menu-item mt-2"><span class ="text-danger">Files has been Downloaded</span></li>
                    <li class="menu-item text-dark mt-2"><span class="text-success">Completed</span></li>
                </ul>
            </div>


            <div class="cart text-decoration-none mt-2" id="">
                <div class=" menu shadow  w-100">
                    <?php foreach ($cartData as $cartitem) : ?>
                        <?php if ($cartitem['user_id'] == $userInfo['id']) : ?>
                            <div class="col-12 col-md-12 mt-4 ">
                                <div class="card shadow-0 border rounded-3">
                                    <div class="card-body">
                                        <div class="row">

                                            

                                            <div class="col-md-6 col-lg-6 col-xl-6">
                                                <div class="d-flex flex-row">
                                                    <span class="font-weight-bold"> <?= $cartitem['item_name']; ?> </span>
                                                </div>
                                                <div class="mt-1 mb-0 text-muted small">
                                                    <span><?= $cartitem['date_created']; ?> <br /><?= $cartitem['item_description']; ?> </span>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                                <div class="d-flex flex-row align-items-center mb-1">

                                                    
                                                    <h4 class="mb-1 me-1 ">₱ <?= $cartitem['item_price']; ?></h4>

                                                </div>

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else : ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                            
                    </div>
                </div>
            </div>

          
       

</section>