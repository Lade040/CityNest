{{-- <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav w-100">
          <li class="nav-item w-100">
            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
              <input type="text" class="form-control" placeholder="Search products">
            </form>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
              <h6 class="p-3 mb-0">Projects</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-file-outline text-primary"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1">Software Development</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-web text-info"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1">UI Development</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-layers text-danger"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1">Software Testing</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <p class="p-3 mb-0 text-center">See all projects</p>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="mdi mdi-view-grid"></i>
            </a>
          </li>
          <li class="nav-item dropdown border-left">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-email"></i>
              <span class="count bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <h6 class="p-3 mb-0">Messages</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                  <p class="text-muted mb-0"> 1 Minutes ago </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                  <p class="text-muted mb-0"> 15 Minutes ago </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                  <p class="text-muted mb-0"> 18 Minutes ago </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <p class="p-3 mb-0 text-center">4 new messages</p>
            </div>
          </li>
          <li class="nav-item dropdown border-left">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
              <span class="count bg-danger"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <h6 class="p-3 mb-0">Notifications</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-calendar text-success"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject mb-1">Event today</p>
                  <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-settings text-danger"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject mb-1">Settings</p>
                  <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-link-variant text-warning"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject mb-1">Launch Admin</p>
                  <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <p class="p-3 mb-0 text-center">See all notifications</p>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
              <div class="navbar-profile">
                <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
                <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                <i class="mdi mdi-menu-down d-none d-sm-block"></i>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
              <h6 class="p-3 mb-0">Profile</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-settings text-success"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject mb-1">Settings</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-logout text-danger"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject mb-1">Log out</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <p class="p-3 mb-0 text-center">Advanced settings</p>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-format-line-spacing"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-12 grid-margin stretch-card">
            <div class="card corona-gradient-card">
              <div class="card-body py-0 px-0 px-sm-3">
                <div class="row align-items-center">
                  <div class="col-4 col-sm-3 col-xl-2">
                    <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                  </div>
                  <div class="col-5 col-sm-7 col-xl-8 p-0">
                    <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                    <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique layouts!</p>
                  </div>
                  <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                    <span>
                      <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-9">
                    <div class="d-flex align-items-center align-self-start">
                      <h3 class="mb-0">$12.34</h3>
                      <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="icon icon-box-success ">
                      <span class="mdi mdi-arrow-top-right icon-item"></span>
                    </div>
                  </div>
                </div>
                <h6 class="text-muted font-weight-normal">Potential growth</h6>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-9">
                    <div class="d-flex align-items-center align-self-start">
                      <h3 class="mb-0">$17.34</h3>
                      <p class="text-success ms-2 mb-0 font-weight-medium">+11%</p>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="icon icon-box-success">
                      <span class="mdi mdi-arrow-top-right icon-item"></span>
                    </div>
                  </div>
                </div>
                <h6 class="text-muted font-weight-normal">Revenue current</h6>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-9">
                    <div class="d-flex align-items-center align-self-start">
                      <h3 class="mb-0">$12.34</h3>
                      <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="icon icon-box-danger">
                      <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                    </div>
                  </div>
                </div>
                <h6 class="text-muted font-weight-normal">Daily Income</h6>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-9">
                    <div class="d-flex align-items-center align-self-start">
                      <h3 class="mb-0">$31.53</h3>
                      <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="icon icon-box-success ">
                      <span class="mdi mdi-arrow-top-right icon-item"></span>
                    </div>
                  </div>
                </div>
                <h6 class="text-muted font-weight-normal">Expense current</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Transaction History</h4>
                <canvas id="transaction-history" class="transaction-chart"></canvas>
                <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                  <div class="text-md-center text-xl-left">
                    <h6 class="mb-1">Transfer to Paypal</h6>
                    <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                  </div>
                  <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                    <h6 class="font-weight-bold mb-0">$236</h6>
                  </div>
                </div>
                <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                  <div class="text-md-center text-xl-left">
                    <h6 class="mb-1">Tranfer to Stripe</h6>
                    <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                  </div>
                  <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                    <h6 class="font-weight-bold mb-0">$593</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-row justify-content-between">
                  <h4 class="card-title mb-1">Open Projects</h4>
                  <p class="text-muted mb-1">Your data status</p>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="preview-list">
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <div class="preview-icon bg-primary">
                            <i class="mdi mdi-file-document"></i>
                          </div>
                        </div>
                        <div class="preview-item-content d-sm-flex flex-grow">
                          <div class="flex-grow">
                            <h6 class="preview-subject">Admin dashboard design</h6>
                            <p class="text-muted mb-0">Broadcast web app mockup</p>
                          </div>
                          <div class="me-auto text-sm-right pt-2 pt-sm-0">
                            <p class="text-muted">15 minutes ago</p>
                            <p class="text-muted mb-0">30 tasks, 5 issues </p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <div class="preview-icon bg-success">
                            <i class="mdi mdi-cloud-download"></i>
                          </div>
                        </div>
                        <div class="preview-item-content d-sm-flex flex-grow">
                          <div class="flex-grow">
                            <h6 class="preview-subject">Wordpress Development</h6>
                            <p class="text-muted mb-0">Upload new design</p>
                          </div>
                          <div class="me-auto text-sm-right pt-2 pt-sm-0">
                            <p class="text-muted">1 hour ago</p>
                            <p class="text-muted mb-0">23 tasks, 5 issues </p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <div class="preview-icon bg-info">
                            <i class="mdi mdi-clock"></i>
                          </div>
                        </div>
                        <div class="preview-item-content d-sm-flex flex-grow">
                          <div class="flex-grow">
                            <h6 class="preview-subject">Project meeting</h6>
                            <p class="text-muted mb-0">New project discussion</p>
                          </div>
                          <div class="me-auto text-sm-right pt-2 pt-sm-0">
                            <p class="text-muted">35 minutes ago</p>
                            <p class="text-muted mb-0">15 tasks, 2 issues</p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <div class="preview-icon bg-danger">
                            <i class="mdi mdi-email-open"></i>
                          </div>
                        </div>
                        <div class="preview-item-content d-sm-flex flex-grow">
                          <div class="flex-grow">
                            <h6 class="preview-subject">Broadcast Mail</h6>
                            <p class="text-muted mb-0">Sent release details to team</p>
                          </div>
                          <div class="me-auto text-sm-right pt-2 pt-sm-0">
                            <p class="text-muted">55 minutes ago</p>
                            <p class="text-muted mb-0">35 tasks, 7 issues </p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item">
                        <div class="preview-thumbnail">
                          <div class="preview-icon bg-warning">
                            <i class="mdi mdi-chart-pie"></i>
                          </div>
                        </div>
                        <div class="preview-item-content d-sm-flex flex-grow">
                          <div class="flex-grow">
                            <h6 class="preview-subject">UI Design</h6>
                            <p class="text-muted mb-0">New application planning</p>
                          </div>
                          <div class="me-auto text-sm-right pt-2 pt-sm-0">
                            <p class="text-muted">50 minutes ago</p>
                            <p class="text-muted mb-0">27 tasks, 4 issues </p>
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
        <div class="row">
          <div class="col-sm-4 grid-margin">
            <div class="card">
              <div class="card-body">
                <h5>Revenue</h5>
                <div class="row">
                  <div class="col-8 col-sm-12 col-xl-8 my-auto">
                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                      <h2 class="mb-0">$32123</h2>
                      <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                    </div>
                    <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
                  </div>
                  <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                    <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 grid-margin">
            <div class="card">
              <div class="card-body">
                <h5>Sales</h5>
                <div class="row">
                  <div class="col-8 col-sm-12 col-xl-8 my-auto">
                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                      <h2 class="mb-0">$45850</h2>
                      <p class="text-success ms-2 mb-0 font-weight-medium">+8.3%</p>
                    </div>
                    <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                  </div>
                  <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                    <i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 grid-margin">
            <div class="card">
              <div class="card-body">
                <h5>Purchase</h5>
                <div class="row">
                  <div class="col-8 col-sm-12 col-xl-8 my-auto">
                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                      <h2 class="mb-0">$2039</h2>
                      <p class="text-danger ms-2 mb-0 font-weight-medium">-2.1% </p>
                    </div>
                    <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                  </div>
                  <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                    <i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row ">
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Order Status</h4>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>
                          <div class="form-check form-check-muted m-0">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                        </th>
                        <th> Client Name </th>
                        <th> Order No </th>
                        <th> Product Cost </th>
                        <th> Project </th>
                        <th> Payment Mode </th>
                        <th> Start Date </th>
                        <th> Payment Status </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check form-check-muted m-0">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                        </td>
                        <td>
                          <img src="assets/images/faces/face1.jpg" alt="image" />
                          <span class="ps-2">Henry Klein</span>
                        </td>
                        <td> 02312 </td>
                        <td> $14,500 </td>
                        <td> Dashboard </td>
                        <td> Credit card </td>
                        <td> 04 Dec 2019 </td>
                        <td>
                          <div class="badge badge-outline-success">Approved</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check form-check-muted m-0">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                        </td>
                        <td>
                          <img src="assets/images/faces/face2.jpg" alt="image" />
                          <span class="ps-2">Estella Bryan</span>
                        </td>
                        <td> 02312 </td>
                        <td> $14,500 </td>
                        <td> Website </td>
                        <td> Cash on delivered </td>
                        <td> 04 Dec 2019 </td>
                        <td>
                          <div class="badge badge-outline-warning">Pending</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check form-check-muted m-0">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                        </td>
                        <td>
                          <img src="assets/images/faces/face5.jpg" alt="image" />
                          <span class="ps-2">Lucy Abbott</span>
                        </td>
                        <td> 02312 </td>
                        <td> $14,500 </td>
                        <td> App design </td>
                        <td> Credit card </td>
                        <td> 04 Dec 2019 </td>
                        <td>
                          <div class="badge badge-outline-danger">Rejected</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check form-check-muted m-0">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                        </td>
                        <td>
                          <img src="assets/images/faces/face3.jpg" alt="image" />
                          <span class="ps-2">Peter Gill</span>
                        </td>
                        <td> 02312 </td>
                        <td> $14,500 </td>
                        <td> Development </td>
                        <td> Online Payment </td>
                        <td> 04 Dec 2019 </td>
                        <td>
                          <div class="badge badge-outline-success">Approved</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check form-check-muted m-0">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                        </td>
                        <td>
                          <img src="assets/images/faces/face4.jpg" alt="image" />
                          <span class="ps-2">Sallie Reyes</span>
                        </td>
                        <td> 02312 </td>
                        <td> $14,500 </td>
                        <td> Website </td>
                        <td> Credit card </td>
                        <td> 04 Dec 2019 </td>
                        <td>
                          <div class="badge badge-outline-success">Approved</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-xl-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-row justify-content-between">
                  <h4 class="card-title">Messages</h4>
                  <p class="text-muted mb-1 small">View all</p>
                </div>
                <div class="preview-list">
                  <div class="preview-item border-bottom">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face6.jpg" alt="image" class="rounded-circle" />
                    </div>
                    <div class="preview-item-content d-flex flex-grow">
                      <div class="flex-grow">
                        <div class="d-flex d-md-block d-xl-flex justify-content-between">
                          <h6 class="preview-subject">Leonard</h6>
                          <p class="text-muted text-small">5 minutes ago</p>
                        </div>
                        <p class="text-muted">Well, it seems to be working now.</p>
                      </div>
                    </div>
                  </div>
                  <div class="preview-item border-bottom">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face8.jpg" alt="image" class="rounded-circle" />
                    </div>
                    <div class="preview-item-content d-flex flex-grow">
                      <div class="flex-grow">
                        <div class="d-flex d-md-block d-xl-flex justify-content-between">
                          <h6 class="preview-subject">Luella Mills</h6>
                          <p class="text-muted text-small">10 Minutes Ago</p>
                        </div>
                        <p class="text-muted">Well, it seems to be working now.</p>
                      </div>
                    </div>
                  </div>
                  <div class="preview-item border-bottom">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face9.jpg" alt="image" class="rounded-circle" />
                    </div>
                    <div class="preview-item-content d-flex flex-grow">
                      <div class="flex-grow">
                        <div class="d-flex d-md-block d-xl-flex justify-content-between">
                          <h6 class="preview-subject">Ethel Kelly</h6>
                          <p class="text-muted text-small">2 Hours Ago</p>
                        </div>
                        <p class="text-muted">Please review the tickets</p>
                      </div>
                    </div>
                  </div>
                  <div class="preview-item border-bottom">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face11.jpg" alt="image" class="rounded-circle" />
                    </div>
                    <div class="preview-item-content d-flex flex-grow">
                      <div class="flex-grow">
                        <div class="d-flex d-md-block d-xl-flex justify-content-between">
                          <h6 class="preview-subject">Herman May</h6>
                          <p class="text-muted text-small">4 Hours Ago</p>
                        </div>
                        <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Portfolio Slide</h4>
                <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                  <div class="item">
                    <img src="assets/images/dashboard/Rectangle.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="assets/images/dashboard/Img_5.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="assets/images/dashboard/img_6.jpg" alt="">
                  </div>
                </div>
                <div class="d-flex py-4">
                  <div class="preview-list w-100">
                    <div class="preview-item p-0">
                      <div class="preview-thumbnail">
                        <img src="assets/images/faces/face12.jpg" class="rounded-circle" alt="">
                      </div>
                      <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">
                          <div class="d-flex d-md-block d-xl-flex justify-content-between">
                            <h6 class="preview-subject">CeeCee Bass</h6>
                            <p class="text-muted text-small">4 Hours Ago</p>
                          </div>
                          <p class="text-muted">Well, it seems to be working now.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="text-muted">Well, it seems to be working now. </p>
                <div class="progress progress-md portfolio-progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-xl-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">To do list</h4>
                <div class="add-items d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="enter task..">
                  <button class="add btn btn-primary todo-list-add-btn">Add</button>
                </div>
                <div class="list-wrapper">
                  <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                    <li>
                      <div class="form-check form-check-primary">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox"> Create invoice </label>
                      </div>
                      <i class="remove mdi mdi-close-box"></i>
                    </li>
                    <li>
                      <div class="form-check form-check-primary">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox"> Meeting with Alita </label>
                      </div>
                      <i class="remove mdi mdi-close-box"></i>
                    </li>
                    <li class="completed">
                      <div class="form-check form-check-primary">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                      </div>
                      <i class="remove mdi mdi-close-box"></i>
                    </li>
                    <li>
                      <div class="form-check form-check-primary">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox"> Plan weekend outing </label>
                      </div>
                      <i class="remove mdi mdi-close-box"></i>
                    </li>
                    <li>
                      <div class="form-check form-check-primary">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                      </div>
                      <i class="remove mdi mdi-close-box"></i>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Visitors by Countries</h4>
                <div class="row">
                  <div class="col-md-5">
                    <div class="table-responsive">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <i class="flag-icon flag-icon-us"></i>
                            </td>
                            <td>USA</td>
                            <td class="text-right"> 1500 </td>
                            <td class="text-right font-weight-medium"> 56.35% </td>
                          </tr>
                          <tr>
                            <td>
                              <i class="flag-icon flag-icon-de"></i>
                            </td>
                            <td>Germany</td>
                            <td class="text-right"> 800 </td>
                            <td class="text-right font-weight-medium"> 33.25% </td>
                          </tr>
                          <tr>
                            <td>
                              <i class="flag-icon flag-icon-au"></i>
                            </td>
                            <td>Australia</td>
                            <td class="text-right"> 760 </td>
                            <td class="text-right font-weight-medium"> 15.45% </td>
                          </tr>
                          <tr>
                            <td>
                              <i class="flag-icon flag-icon-gb"></i>
                            </td>
                            <td>United Kingdom</td>
                            <td class="text-right"> 450 </td>
                            <td class="text-right font-weight-medium"> 25.00% </td>
                          </tr>
                          <tr>
                            <td>
                              <i class="flag-icon flag-icon-ro"></i>
                            </td>
                            <td>Romania</td>
                            <td class="text-right"> 620 </td>
                            <td class="text-right font-weight-medium"> 10.25% </td>
                          </tr>
                          <tr>
                            <td>
                              <i class="flag-icon flag-icon-br"></i>
                            </td>
                            <td>Brasil</td>
                            <td class="text-right"> 230 </td>
                            <td class="text-right font-weight-medium"> 75.00% </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div id="audience-map" class="vector-map"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
        </div>
      </footer>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends --> --}}

  <!-- dashboard inner -->
  <div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2>Dashboard</h2>
             </div>
          </div>
       </div>
       <div class="row column1">
          <div class="col-md-6 col-lg-3">
             <div class="full counter_section margin_bottom_30">
                <div class="couter_icon">
                   <div>
                      <i class="fa fa-user yellow_color"></i>
                   </div>
                </div>
                <div class="counter_no">
                   <div>
                      <p class="total_no">2500</p>
                      <p class="head_couter">Welcome</p>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="full counter_section margin_bottom_30">
                <div class="couter_icon">
                   <div>
                      <i class="fa fa-clock-o blue1_color"></i>
                   </div>
                </div>
                <div class="counter_no">
                   <div>
                      <p class="total_no">123.50</p>
                      <p class="head_couter">Average Time</p>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="full counter_section margin_bottom_30">
                <div class="couter_icon">
                   <div>
                      <i class="fa fa-cloud-download green_color"></i>
                   </div>
                </div>
                <div class="counter_no">
                   <div>
                      <p class="total_no">1,805</p>
                      <p class="head_couter">Collections</p>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="full counter_section margin_bottom_30">
                <div class="couter_icon">
                   <div>
                      <i class="fa fa-comments-o red_color"></i>
                   </div>
                </div>
                <div class="counter_no">
                   <div>
                      <p class="total_no">54</p>
                      <p class="head_couter">Comments</p>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="row column1 social_media_section">
          <div class="col-md-6 col-lg-3">
             <div class="full socile_icons fb margin_bottom_30">
                <div class="social_icon">
                   <i class="fa fa-facebook"></i>
                </div>
                <div class="social_cont">
                   <ul>
                      <li>
                         <span><strong>35k</strong></span>
                         <span>Friends</span>
                      </li>
                      <li>
                         <span><strong>128</strong></span>
                         <span>Feeds</span>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="full socile_icons tw margin_bottom_30">
                <div class="social_icon">
                   <i class="fa fa-twitter"></i>
                </div>
                <div class="social_cont">
                   <ul>
                      <li>
                         <span><strong>584k</strong></span>
                         <span>Followers</span>
                      </li>
                      <li>
                         <span><strong>978</strong></span>
                         <span>Tweets</span>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="full socile_icons linked margin_bottom_30">
                <div class="social_icon">
                   <i class="fa fa-linkedin"></i>
                </div>
                <div class="social_cont">
                   <ul>
                      <li>
                         <span><strong>758+</strong></span>
                         <span>Contacts</span>
                      </li>
                      <li>
                         <span><strong>365</strong></span>
                         <span>Feeds</span>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="full socile_icons google_p margin_bottom_30">
                <div class="social_icon">
                   <i class="fa fa-google-plus"></i>
                </div>
                <div class="social_cont">
                   <ul>
                      <li>
                         <span><strong>450</strong></span>
                         <span>Followers</span>
                      </li>
                      <li>
                         <span><strong>57</strong></span>
                         <span>Circles</span>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
       <!-- graph -->
       <div class="row column2 graph margin_bottom_30">
          <div class="col-md-l2 col-lg-12">
             <div class="white_shd full">
                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>Extra Area Chart</h2>
                   </div>
                </div>
                <div class="full graph_revenue">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="content">
                            <div class="area_chart">
                               <canvas height="120" id="canvas"></canvas>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!-- end graph -->
       <div class="row column3">
          <!-- testimonial -->
          <div class="col-md-6">
             <div class="dark_bg full margin_bottom_30">
                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>Testimonial</h2>
                   </div>
                </div>
                <div class="full graph_revenue">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="content testimonial">
                            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                               <!-- Wrapper for carousel items -->
                               <div class="carousel-inner">
                                  <div class="item carousel-item active">
                                     <div class="img-box"><img src="images/layout_img/user_img.jpg" alt=""></div>
                                     <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                     <p class="overview"><b>Michael Stuart</b>Seo Founder</p>
                                  </div>
                                  <div class="item carousel-item">
                                     <div class="img-box"><img src="images/layout_img/user_img.jpg" alt=""></div>
                                     <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                     <p class="overview"><b>Michael Stuart</b>Seo Founder</p>
                                  </div>
                                  <div class="item carousel-item">
                                     <div class="img-box"><img src="images/layout_img/user_img.jpg" alt=""></div>
                                     <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                     <p class="overview"><b>Michael Stuart</b>Seo Founder</p>
                                  </div>
                               </div>
                               <!-- Carousel controls -->
                               <a class="carousel-control left carousel-control-prev" href="#testimonial_slider" data-slide="prev">
                               <i class="fa fa-angle-left"></i>
                               </a>
                               <a class="carousel-control right carousel-control-next" href="#testimonial_slider" data-slide="next">
                               <i class="fa fa-angle-right"></i>
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- end testimonial -->
          <!-- progress bar -->
          <div class="col-md-6">
             <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>Progress Bar</h2>
                   </div>
                </div>
                <div class="full progress_bar_inner">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="progress_bar">
                            <!-- Skill Bars -->
                            <span class="skill" style="width:73%;">Facebook <span class="info_valume">73%</span></span>
                            <div class="progress skill-bar ">
                               <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%;">
                               </div>
                            </div>
                            <span class="skill" style="width:62%;">Twitter <span class="info_valume">62%</span></span>
                            <div class="progress skill-bar">
                               <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;">
                               </div>
                            </div>
                            <span class="skill" style="width:54%;">Instagram <span class="info_valume">54%</span></span>
                            <div class="progress skill-bar">
                               <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;">
                               </div>
                            </div>
                            <span class="skill" style="width:82%;">Google plus <span class="info_valume">82%</span></span>
                            <div class="progress skill-bar">
                               <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: 82%;">
                               </div>
                            </div>
                            <span class="skill" style="width:48%;">Other <span class="info_valume">48%</span></span>
                            <div class="progress skill-bar">
                               <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- end progress bar -->
       </div>
       <div class="row column4 graph">
          <div class="col-md-6 margin_bottom_30">
             <div class="dash_blog">
                <div class="dash_blog_inner">
                   <div class="dash_head">
                      <h3><span><i class="fa fa-calendar"></i> 6 July 2018</span><span class="plus_green_bt"><a href="#">+</a></span></h3>
                   </div>
                   <div class="list_cont">
                      <p>Today Tasks for Ronney Jack</p>
                   </div>
                   <div class="task_list_main">
                      <ul class="task_list">
                         <li><a href="#">Meeting about plan for Admin Template 2018</a><br><strong>10:00 AM</strong></li>
                         <li><a href="#">Create new task for Dashboard</a><br><strong>10:00 AM</strong></li>
                         <li><a href="#">Meeting about plan for Admin Template 2018</a><br><strong>11:00 AM</strong></li>
                         <li><a href="#">Create new task for Dashboard</a><br><strong>10:00 AM</strong></li>
                         <li><a href="#">Meeting about plan for Admin Template 2018</a><br><strong>02:00 PM</strong></li>
                      </ul>
                   </div>
                   <div class="read_more">
                      <div class="center"><a class="main_bt read_bt" href="#">Read More</a></div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-6">
             <div class="dash_blog">
                <div class="dash_blog_inner">
                   <div class="dash_head">
                      <h3><span><i class="fa fa-comments-o"></i> Updates</span><span class="plus_green_bt"><a href="#">+</a></span></h3>
                   </div>
                   <div class="list_cont">
                      <p>User confirmation</p>
                   </div>
                   <div class="msg_list_main">
                      <ul class="msg_list">
                         <li>
                            <span><img src="images/layout_img/msg2.png" class="img-responsive" alt="#" /></span>
                            <span>
                            <span class="name_user">Herman Beck</span>
                            <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                            <span class="time_ago">12 min ago</span>
                            </span>
                         </li>
                         <li>
                            <span><img src="images/layout_img/msg3.png" class="img-responsive" alt="#" /></span>
                            <span>
                            <span class="name_user">John Smith</span>
                            <span class="msg_user">On the other hand, we denounce.</span>
                            <span class="time_ago">12 min ago</span>
                            </span>
                         </li>
                         <li>
                            <span><img src="images/layout_img/msg2.png" class="img-responsive" alt="#" /></span>
                            <span>
                            <span class="name_user">John Smith</span>
                            <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                            <span class="time_ago">12 min ago</span>
                            </span>
                         </li>
                         <li>
                            <span><img src="images/layout_img/msg3.png" class="img-responsive" alt="#" /></span>
                            <span>
                            <span class="name_user">John Smith</span>
                            <span class="msg_user">On the other hand, we denounce.</span>
                            <span class="time_ago">12 min ago</span>
                            </span>
                         </li>
                      </ul>
                   </div>
                   <div class="read_more">
                      <div class="center"><a class="main_bt read_bt" href="#">Read More</a></div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end dashboard inner -->
