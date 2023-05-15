<div class="content">
  <div class="container-fluid">
    <div class="row mb-5">
      <div class="col-xl-4 col-lg-12">
        <div class="card card-chart">
          <div class="card-header card-header-success">
            <div class="ct-chart" id="dailySalesChart"></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">DOWNLOADS</h4>
            <p class="card-category d-flex gap-4">
              <?php foreach ($downloads as $download) : ?>
                <?php if ($download['id'] == 1) : ?>
                  <span class="text-success"><i class="fa fa-download"></i> <?= $download['download_number']; ?></span> TA DOWNLOADS <br />
                <?php endif;  ?>
                <?php if ($download['id'] == 2) : ?>
                  <span class="text-success"><i class="fa fa-download"></i> <?= $download['download_number']; ?> </span> MS DOWNLOADS
                <?php endif;  ?>
              <?php endforeach; ?>
            </p>
          </div>

        </div>
      </div>
      <div class="col-xl-4 col-lg-12">
        <div class="card card-chart">
          <div class="card-header card-header-warning">
            <div class="ct-chart" id="websiteViewsChart"></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">PRODUCTS</h4>
            <p class="card-category">
              <span class="text-success"><i class="fa fa-download"></i> <?php echo $productCount; ?></span> Products Count
            </p>
          </div>

        </div>
      </div>
      <div class="col-xl-4 col-lg-12">
        <div class="card card-chart mb-4">
          <div class="card-header card-header-danger">
            <div class="ct-chart" id="completedTasksChart"></div>
          </div>
          <div class="card-body">
            <h4 class="card-title"> USERS</h4>
            <p class="card-category">
              <span class="text-success"><i class="fa fa-download"></i> <?php echo $usercount; ?> </span> NO OF USERS
            </p>
          </div>

        </div>
      </div>
    </div>
  <!--   employee table  -->
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Employees Stats</h4>
            <p class="card-category">New employees on <?= date('M-Y') ?></p>
          </div>
          <div class="card-body table-responsive">
            <table class="table table-hover">
              <thead class="text-warning">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Position</th>
                <th>Status</th>
                <th>Date Registered</th>
                <th>Action</th>
              </thead>
              <tbody>
                <?php foreach ($users as $user) : ?>

                  <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td><?= $user['is_admin']; ?></td>
                    <td>
                      <?php if ($user['status'] == "ACTIVE") : ?> <p class="text-success">ACTIVE</p>
                      <?php else : ?>
                        <p class="text-danger">IN ACTIVE count</p> <?php endif; ?>
                    </td>
                    <td><?= $user['date_created']; ?></td>
                    <td><span class ="d-flex gap-2 "><a href = "admin/ViewUser/<?= $user['id']; ?>" class="action-button btn btn-primary text-light">view</a> <a href = "admin/UpdateUsers/<?= $user['id']; ?>"class="btn btn-success text-light">update </a></span>
                  
                  </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    
    </div>
    <!-- end of table  -->
  </div>
</div>