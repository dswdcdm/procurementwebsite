<div class="col">
    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/admin/adminproduct">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">Update Product</li>
        </ol>
    </nav>
</div>

<div class="blog-single gray-bg">
    <?php foreach ($producttb as $product) : ?>
        <?php if ($product['id'] == $productId) : ?>

            <form action="<?php echo htmlspecialchars(site_url('admin/saveupdateProduct/' . $productId));  ?>" method="POST" autocomplete="off" enctype="multipart/form-data">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-8 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h6>
                                        <!--Image-->
                                        <img src="<?= $product['image']; ?>" width="30%" height="60%" alt="logo" /><br />
                                        <label for="formFileSm" class="form-label mt-2">SELECT IMAGE IF YOU WANT TO UPDATE</label>    
                                        <input class="form-control form-control-sm" id="formFileSm" name="image" type="file" />
                                        <input type="text" name="hidden_image_name" class="d-none" id="hidden_image_name" value="<?= $product['imagename']; ?>" />
                                        <h6 class="text-dark">
                                            <label for="name">PRODUCT NAME</label>
                                            <div class="input_container">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="15" fill="currentColor" class="bi bi-archive icon text-success" viewBox="0 0 16 16">
                                                    <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                                </svg>
                                                <input placeholder="PRODUCT NAME" name="name" type="text" class="input_field" id="status" value="<?= $product['name']; ?>" required>
                                            </div>
                                        </h6>
                                    </h6>
                                    <h6>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="description">PRODUCT DESCRIPTION</label>
                                                <div class="form-group">
                                                    <textarea name="description" id="description" placeholder="Product Description*" rows="4" class="form-control" required><?= $product['description']; ?></textarea>
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
                                                    <input placeholder="PRODUCT PRICE" name="price" type="text" class="input_field" id="price" value="<?= $product['price']; ?>" required>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <h6 class="col-md-12">
                                    <label for="status"  class="text-dark col-md-6">PRODUCT STATUS</label>
                                    <select name="status"  id ="status" type = "text" class="col-md-6 w-50"   value="<?= $product['status']; ?>" required>
                                        <option value="ACTIVE"><?= $product['status']; ?></option>
                                        <option value="ACTIVE">ACTIVE</option>
                                        <option value="INACTIVE">INACTIVE</option>
                                    </select>


                                        <!-- 
                                        <div class="input_container">
                                            <input placeholder="PRODUCT STATUS" name="status" type="text" class="input_field" id="status" value="<?= $product['status']; ?>" required></p>
                                        </div> -->
                                    </h6>
                                    </h6>

                                    <div class="send">
                                        <button class="px-btn theme w-100 btn btn-primary"><span>UPDATE INFORMATION</span> <i class="arrow"></i></button>
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
                                        <textarea name="note" id="note" placeholder="Note" rows="4" class="form-control" required><?= $product['note']; ?></textarea>
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
                                        <input class="form-control form-control-sm" name="tsfile" id="formFileSm" type="file"  />
                                        <input class="d-none" name="hidden_image_tsfile" id="formFileSm" type="file" value="<?= $product['tsfilename']; ?>"/>
                                        <label for="formFileSm" class="form-label mt-2">
                                            <H6>UPLOAD MS</H6>
                                        </label>
                                        <input class="form-control form-control-sm " name="msfile" id="formFileSm" type="file"  />
                                        <input class="d-none" name="hidden_image_tsfile" id="formFileSm" type="text" value="<?= $product['msfilename']; ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        <?php else : ?>
        <?php endif; ?>
    <?php endforeach; ?>
</div>