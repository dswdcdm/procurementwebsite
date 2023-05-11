<div class="col">
    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/admin/adminproduct">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Product</li>
        </ol>
    </nav>
</div>
<div class="blog-single gray-bg">
    <form action="<?php echo htmlspecialchars(site_url('Product/saveProduct'));?>" method="POST" autocomplete="off">
        <?= csrf_field(); ?>

        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-8 m-15px-tb">
                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif ?>
                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                    <?php endif ?>
                    <article class="article">
                        <div class="article-title">
                            <h6>
                                <!--Image-->
                                <label for="formFileSm" class="form-label">SELECT IMAGE</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file" required />
                                <h6 class="text-dark">
                                    <label for="name">PRODUCT NAME</label>
                                    <div class="input_container">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="15" fill="currentColor" class="bi bi-archive icon text-success" viewBox="0 0 16 16">
                                            <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                        </svg>
                                        <input placeholder="PRODUCT NAME" name="NAME" type="text" class="input_field" id="status" value="<?= set_value('name'); ?>" required>
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'name') : '' ?></span>
                                    </div>
                                </h6>
                            </h6>
                            <h6>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="description">PRODUCT DESCRIPTION</label>
                                        <div class="form-group">
                                            <textarea name="description" id="description" placeholder="Product Description*" rows="4" value="<?= set_value('description'); ?>" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </h6>
                            <div class="media-body">
                                <label>
                                    <h6>
                                        <label for="price" class="text-dark">PRODUCT PRICE</label>
                                        <div class="input_container">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="15" fill="currentColor" class="bi bi-tags-fill icon" viewBox="0 0 16 16">
                                                <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z" />
                                            </svg>
                                            <input placeholder="PRODUCT PRICE" name="price" type="number" class="input_field" id="productprice" value="<?= set_value('price'); ?>" required>

                                </label>
                            </div>
                        </div>
                        <div class="article-content">
                            <h6 class>
                                <label for="status" class="text-dark">PRODUCT STATUS</label>

                                <div class="input_container">
                                    <input placeholder="PRODUCT STATUS" name="status" type="text" class="input_field" id="productstatus" value="<?= set_value('status'); ?>" required></p>
                                </div>
                            </h6>
                            </h6>
                            <div class="send">
                                <button type="submit" class="px-btn theme w-100 btn btn-primary"><span>ADD PRODUCT</span> <i class="arrow"></i></button>
                            </div>
                        </div>
                    </article>
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
                            <p>
                            <div class="form-group">
                                <textarea name="message" id="message" placeholder="Note" rows="4" class="form-control" required></textarea>
                            </div>
                            </p>
                        </div>
                    </div>
                    <div class="widget widget-tags">
                        <div class="widget-title">
                            <h3>DOCUMENTS</h3>
                        </div>
                        <div class="widget-body">
                            <div class="nav tag-cloud">
                                <label for="formFileSm" class="form-label">
                                    <H6>UPLOAD TS</H6>
                                </label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file" required />
                                <label for="formFileSm" class="form-label mt-2">
                                    <H6>UPLOAD MS</H6>
                                </label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file" required />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>