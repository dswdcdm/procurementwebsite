<section class="page-content">
    <section class="search-and-user">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/pages">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="/Product">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products Item</li>
                </ol>
            </nav>
        </div>
    </section>
    <div class="blog-single gray-bg">
        <?php foreach ($producttb as $product) : ?>
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-lg-8 m-15px-tb">
                        <article class="article">
                            <div class="article-img">
                                <img src="<?= $product['image']; ?>" width="50%" height="60%" alt="logo" />
                            </div>
                            <div class="article-title">
                                <h6><a href="#">Product Overview</a> <?php if ($product['status'] == "ACTIVE") : ?>
                                        <h6 class="text-success"> <?= $product['status']; ?> </h6>
                                    <?php else : ?>
                                        <h6 class="text-danger"> <?= $product['status']; ?> </h6>
                                    <?php endif; ?>
                                </h6>

                                <h2><?= $product['name']; ?></h2>
                                <div class="media">
                                    <div class="avatar">
                                        <img src="<?php echo base_url('assets/images/logob.png   '); ?>" width="100%" height="60%" alt="logo" />
                                    </div>
                                    <div class="media-body">
                                        <label> ₱3,480</label>
                                        <span>26 APRIL 2023 - 26 MAY 2023</span>
                                    </div>
                                </div>
                            </div>
                            <div class="article-content">
                                <p class="font-weight-bold"><span class="font-weight-bolder text-info">TA</span> <?= $product['tasub']; ?></p>
                                <hr />
                                <p> <?= $product['description']; ?></p>

                            </div>

                        </article>

                        <?php if ($product['status'] == "ACTIVE") : ?>
                            <div class="contact-form article-comment">
                                <h4> Leave a comment</h4>
                                <form id="contact-form" method="POST">
                                    <div class="row">


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" id="message" placeholder="Your message *" rows="4" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="send">
                                                <button class="px-btn theme w-100 btn btn-primary"><span>Submit</span> <i class="arrow"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        <?php else : ?>
                           
                        <?php endif; ?>



                    </div>
                    <div class="col-lg-4 m-15px-tb blog-aside">
                        <!-- Author -->
                        <div class="widget widget-author">
                            <div class="widget-title">
                                <h3>NOTE</h3>

                            </div>
                            <div class="widget-body">
                                <div class="media align-items-center">
                                    <div class="avatar">
                                        <img src="<?php echo base_url('assets/images/logob.png   '); ?>" width="100%" height="60%" alt="logo" />

                                    </div>
                                    <div class="media-body">
                                        <h6>Hello, I'm<br>admin</h6>
                                    </div>
                                </div>
                                <p><?= $product['note']; ?></p>
                            </div>
                        </div>
                        <div class="widget widget-tags">
                            <div class="widget-title">
                                <h3>DOWNLOAD FILES</h3>
                            </div>
                            <div class="widget-body">
                                <div class="nav tag-cloud">
                                    <a href="<?= $product['ta']; ?>" target="_blank">SPECIFICATION TA</a>
                                    <a href="<?= $product['ta']; ?>" target="_blank">MARKET SCANNING</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>