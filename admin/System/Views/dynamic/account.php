<?php
$userClass     = new User();
$userDetails = $userClass->get_user_details($_SESSION['user_id']);


?>
            <div class="container-fluid dashboard-content">

                <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                          <div class="card">
                              <h5 class="card-header">Account Settings</h5>
                              <div class="card-body">


<?php Errors::getInstance()->PrintWarnings(); ?>
<?php Errors::getInstance()->PrintInfos(); ?>

                                  <form method="post" id="basicform" data-parsley-validate="">
                                      <div class="form-group">
                                          <label for="inputUsername">Username</label>
                                          <input id="inputUsername" value="<?php echo $userDetails[0]["USERNAME"] ?>" type="text" name="inputUsername" data-parsley-trigger="change" required="" placeholder="Enter Username" autocomplete="off" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <label for="inputEmail">Email</label>
                                          <input id="inputEmail" value="<?php echo $userDetails[0]["EMAIL"] ?>" type="email" name="inputEmail" data-parsley-trigger="change" required="" placeholder="Enter Email" autocomplete="off" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <label for="inputPassword">Password</label>
                                          <input id="inputPassword" value="" type="password" name="inputPassword" data-parsley-trigger="change"  placeholder="Enter Password" autocomplete="off" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <label for="inputRePassword">Retype Password</label>
                                          <input id="inputRePassword" value="" type="password" name="inputRePassword" data-parsley-trigger="change"  placeholder="Enter Password" autocomplete="off" class="form-control">
                                      </div>
                                      <div class="row">
                                          <div class="col-sm-6 pl-0">
                                              <p class="text-right">
                                                  <button type="submit" name="btn-save" class="btn btn-space btn-primary">Save !</button>
                                              </p>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                </div>
            </div>
