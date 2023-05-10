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
    
    <div class="row">
      <div class="col-lg-6 col-md-12">
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
                <th>Status</th>
              </thead>
              <tbody>
                <?php foreach ($users as $user) : ?>

                  <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td>
                      <?php if ($user['status'] == "ACTIVE") : ?> <p class="text-success">ACTIVE</p>
                      <?php else : ?>
                        <p class="text-danger">IN ACTIVE count</p> <?php endif; ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="card-header card-header-tabs card-header-warning">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title">Tasks:</span>
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#profile" data-toggle="tab">
                      <i class="material-icons">bug_report</i> Bugs
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#messages" data-toggle="tab">
                      <i class="material-icons">code</i> Website
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#settings" data-toggle="tab">
                      <i class="material-icons">cloud</i> Server
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="profile">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" checked>
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Sign contract for "What are conference organizers afraid of?"</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                      </td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" checked>
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Create 4 Invisible User Experiences you Never Knew About</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane" id="messages">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" checked>
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                      </td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Sign contract for "What are conference organizers afraid of?"</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane" id="settings">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" checked>
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                      </td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" checked>
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Sign contract for "What are conference organizers afraid of?"</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>