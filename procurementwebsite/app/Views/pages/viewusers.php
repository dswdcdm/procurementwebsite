
    <div class="container py-5">
        <div class="search-and-user">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">View User</li>
                    </ol>
                </nav>
            </div>
        </div>

        
            
            <div class="col-lg-8 mx-auto">
            <div class="card mb-4 ">
                    <div class="card-body">
                    <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">ID</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= ucfirst($userInfo['id']); ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Name</p>
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
                                <p class="mb-0">Position</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $userInfo['is_admin']; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Status</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $userInfo['status']; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Date Registered</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $userInfo['date_created']; ?></p>
                            </div>
                        </div>
                      </div>
                    
                 </div>

            </div>
        </div>
    </div>
