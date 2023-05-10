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

        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-8 m-15px-tb">
                    <article class="article">
                        <div class="article-img">
                            <img src="<?php echo base_url('assets/images/logob.png   '); ?>" width="50%" height="60%" alt="logo" />
                        </div>
                        <div class="article-title">
                            <h6>
                                <a href="#">Product Overview</a>
                                <h6 class="text-success">
                                    <div class="input_container">
                                        <input placeholder="PRODUCT NAME" name="NAME" type="text" class="input_field" id="status" value="">
                                    </div>
                                </h6>
                            </h6>
                            <h6> 
                                 <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                               <textarea name="message" id="message" placeholder="Product Description*" rows="4" class="form-control"></textarea>
                                                </div>
                                 </div>                       
                                        </div>  
                            </h6>        
                                <div class="media-body">
                                    <label>
                                        <div class="input_container">
                                            <input placeholder="PRODUCT PRICE" name="productprice" type="number" class="input_field" id="productprice" value="">
                                    </label>      
                                </div>  
                        </div>
                        <div class="article-content"> 
                                <div class="input_container">
                                    <input placeholder="PRODUCT STATUS" name="productstatus" type="text" class="input_field" id="productstatus" value=""></p>
                                </div>  
                                                <div class="send">
                                                    <button class="px-btn theme w-100 btn btn-primary"><span>ADD ITEM</span> <i class="arrow"></i></button>
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
                                               <textarea name="message" id="message" placeholder="Note" rows="4" class="form-control"></textarea>
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
                                <a href="" data-toggle="modal" data-target="#downloadModal">UPLOAD TS</a>
                                <a href="" data-toggle="modal" data-target="#viewModal">UPLOAD MS</a>
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
                                                <a href="" target="_blank" class="btn btn-secondary">DOWNLOAD SPECIFICATION TA</a>
                                                <a href="" target="_blank" class="btn btn-secondary">DOWNLOAD MARKET SCANNING</a>
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
                                                <a href="" target="_blank" class="btn btn-secondary">VIEW SPECIFICATION TA</a>
                                                <a href="" target="_blank" class="btn btn-secondary">VIEW MARKET SCANNING</a>
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
    </div>