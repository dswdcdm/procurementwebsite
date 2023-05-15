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
            <?php if ($product['id'] == $productId) : ?>
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-8 m-15px-tb">
                            <article class="article">
                                <div class="article-img">
                                    <img src="<?= $product['image']; ?>" width="50%" height="60%" alt="logo" />
                                </div>
                                <div class="article-title">
                                    <h6><a href="#">Product Overview</a></h6>
                                    <h2><?= $product['name']; ?></h2>
                                    <div class="media">
                                        <div class="item-avatar">
                                            <img src="<?php echo base_url('assets/images/logob.png   '); ?>" width="100%" height="60%" alt="logo" />
                                        </div>
                                        <div class="media-body">
                                            <label> ₱<?= $product['price']; ?> </label>
                                            <?php if ($product['status'] == "ACTIVE") : ?>
                                                <h6 class="text-success"> <?= $product['status']; ?> </h6>
                                            <?php else : ?>
                                                <h6 class="text-danger"> <?= $product['status']; ?> </h6>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <p class="font-weight-bold">
                                        <span class="font-weight-bolder text-info">TA</span> <?= $product['tasub']; ?>
                                    </p>
                                    <hr />
                                    <p> <?= $product['description']; ?></p>
                                </div>
                            </article>

                            <?php if ($product['status'] == "ACTIVE") : ?>
                                <h2>Comments</h2>

                                <?php foreach ($comments  as $comment) : ?>
                                    <div class="shadow p-2 mt-3 mb-2">
                                        <p>
                                            <strong ><?= $comment['text'] ?> </p> <p></strong>author : <?= $comment['name'] ?> <br />
                                            <small>date time commented : <?= $comment['created_at'] ?></small>
                                        </p>
                                        <?php if ($comment['user_id'] == $userInfo['id']) : ?>
                                            <div class="d-flex gap-2">
                                                <form method="POST" class=" " action="<?= site_url('comment/delete/' . $comment['id']) ?>">
                                                    <button type="submit" class="btn btn-primary w-10">Delete</button>

                                                </form>
                                                <form method="POST" class=  " action="<?= site_url('comment/delete/' . $comment['id']) ?>">
                                                    <button type="submit" class="btn btn-primary w-10  ">Update</button>

                                                </form>

                                            </div>

                                        <?php endif; ?>
                                    </div>

                                <?php endforeach; ?>

                                <form action="/post/submitComment/<?= $product['id']; ?>" method="POST">

                                    <input type="hidden" name="name" value="<?= $userInfo['name']; ?>">
                                    <input type="hidden" name="user_id" value="<?= $userInfo['id']; ?>">
                                    <div class="contact-form article-comment">
                                        <h4> Leave a comment</h4>
                                        <form id="contact-form" method="POST">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea name="text" id="text" placeholder="Your message *" rows="4" class="form-control" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="send">
                                                        <button type="submit" class="px-btn theme w-100 btn btn-primary"><span>Submit</span> <i class="arrow"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </form>

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
                                        <div class="item-avatar">
                                            <img src="<?php echo base_url('assets/images/logob.png'); ?>" width="100%" height="60%" alt="logo" />
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
                                    <h3>DOCUMENTS</h3>
                                </div>
                                <div class="widget-body">
                                    <div class="nav tag-cloud">

                                        <?php if ($product['status'] == "ACTIVE") : ?>
                                            <a href="<?= $product['ta']; ?>" data-toggle="modal" data-target="#downloadModal">DOWNLOAD FILES</a>
                                            <a href="<?= $product['ms']; ?>" data-toggle="modal" data-target="#viewModal">VIEW FILES</a>
                                        <?php else : ?>
                                            <a href="<?= $product['ta']; ?>" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">SPECIFICATION TA</a>
                                            <a href="<?= $product['ms']; ?>" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">MARKET SCANNING</a>
                                        <?php endif; ?>

                                        <!-- Modal -->
                                        <div class="modal fade" id="downloadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <a href="path/to/<?= $product['ta']; ?>" target="_blank" class="btn btn-secondary">DOWNLOAD SPECIFICATION TA</a>
                                                        <a href="path/to/<?= $product['ms']; ?>" target="_blank" class="btn btn-secondary">DOWNLOAD MARKET SCANNING</a>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Modal -->
                                        <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <a href="<?= $product['ta']; ?>" target="_blank" class="btn btn-secondary">VIEW SPECIFICATION TA</a>
                                                        <a href="<?= $product['ms']; ?>" target="_blank" class="btn btn-secondary">VIEW MARKET SCANNING</a>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        PRODUCT SPECS IS IN ACTIVE
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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