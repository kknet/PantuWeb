
            <div class="container-fluid dashboard-content">
              <div class="row">
                                      <!-- ============================================================== -->
                                      <!-- four widgets   -->
                                      <!-- ============================================================== -->
                                      <!-- ============================================================== -->
                                      <!-- total views   -->
                                      <!-- ============================================================== -->
                                      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="card">
                                              <div class="card-body">
                                                  <div class="d-inline-block">
                                                      <h5 class="text-muted">Today</h5>
                                                      <h2 class="mb-0"><?php echo GeneralFunctions::countContents("today") ?></h2>
                                                  </div>
                                                  <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                                      <i class="fa fa-cloud-download-alt fa-fw fa-sm text-info"></i>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- ============================================================== -->
                                      <!-- end total views   -->
                                      <!-- ============================================================== -->
                                      <!-- ============================================================== -->
                                      <!-- total followers   -->
                                      <!-- ============================================================== -->
                                      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="card">
                                              <div class="card-body">
                                                  <div class="d-inline-block">
                                                      <h5 class="text-muted">THIS WEEK</h5>
                                                      <h2 class="mb-0"><?php echo GeneralFunctions::countContents("week") ?></h2>
                                                  </div>
                                                  <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                                      <i class="fa fa-cloud-download-alt fa-fw fa-sm text-primary"></i>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- ============================================================== -->
                                      <!-- end total followers   -->
                                      <!-- ============================================================== -->
                                      <!-- ============================================================== -->
                                      <!-- partnerships   -->
                                      <!-- ============================================================== -->
                                      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="card">
                                              <div class="card-body">
                                                  <div class="d-inline-block">
                                                      <h5 class="text-muted">LAST 30 DAYS</h5>
                                                      <h2 class="mb-0"><?php echo GeneralFunctions::countContents("month") ?></h2>
                                                  </div>
                                                  <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                                                      <i class="fa fa-cloud-download-alt fa-fw fa-sm text-secondary"></i>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- ============================================================== -->
                                      <!-- end partnerships   -->
                                      <!-- ============================================================== -->
                                      <!-- ============================================================== -->
                                      <!-- total earned   -->
                                      <!-- ============================================================== -->
                                      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="card">
                                              <div class="card-body">
                                                  <div class="d-inline-block">
                                                      <h5 class="text-muted">ALL TIME</h5>
                                                      <h2 class="mb-0"><?php echo GeneralFunctions::countContents("") ?></h2>
                                                  </div>
                                                  <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                                                      <i class="fa fa-cloud-download-alt fa-fw fa-sm text-brand"></i>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- ============================================================== -->
                                      <!-- end total earned   -->
                                      <!-- ============================================================== -->
                                  </div>
                <div class="row">

                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                              <div class="card">
                                                  <h5 class="card-header">Montly Total Downloads</h5>
                                                  <div class="card-body">
                                                      <div id="montly_downloads_chart"></div>
                                                  </div>
                                              </div>
                                          </div>

                </div>

                <div class="row">
                                        <!-- ============================================================== -->
                                        <!--bar chart  -->
                                        <!-- ============================================================== -->
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="card">
                                                <h5 class="card-header">Music Downloads</h5>
                                                <div class="card-body">
                                                    <div id="music_downloads_chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="card">
                                                <h5 class="card-header">Video Downloads</h5>
                                                <div class="card-body">
                                                    <div id="video_downloads_chart"></div>
                                                </div>
                                            </div>
                                        </div>

</div>

            </div>
