<?php
$serverClass     = new Server();
$serverSettings = $serverClass->getServerSettings();


?>
            <div class="container-fluid dashboard-content">

                <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                          <div class="card">
                              <h5 class="card-header">Social Links</h5>
                              <div class="card-body">


<?php Errors::getInstance()->PrintWarnings(); ?>
<?php Errors::getInstance()->PrintInfos(); ?>

                                  <form method="post" id="basicform" data-parsley-validate="">
                                      <div class="form-group">
                                          <label for="inputInstagramAdress">Instagram Adress</label>
                                          <input id="inputInstagramAdress" value="<?php echo $serverSettings["INSTAGRAMADRESS"] ?>" type="text" name="inputInstagramAdress" data-parsley-trigger="change" required="" placeholder="Enter Instagram Adress" autocomplete="off" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <label for="inputTwitterAdress">Twitter Adress</label>
                                          <input id="inputTwitterAdress" value="<?php echo $serverSettings["TWITTERADRESS"] ?>" type="text" name="inputTwitterAdress" data-parsley-trigger="change" required="" placeholder="Enter Twitter Adress" autocomplete="off" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <label for="inputFacebookAdress">Facebook Adress</label>
                                          <input id="inputFacebookAdress" value="<?php echo $serverSettings["FACEBOOKADRESS"] ?>" type="text" name="inputFacebookAdress" data-parsley-trigger="change" required="" placeholder="Enter Facebook Adress" autocomplete="off" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <label for="inputMailAdress">Mail Adress</label>
                                          <input id="inputMailAdress" value="<?php echo $serverSettings["MAILADRESS"] ?>" type="text" name="inputMailAdress" data-parsley-trigger="change" required="" placeholder="Enter Mail Adress" autocomplete="off" class="form-control">
                                      </div>
                                      <div class="alert alert-primary" role="alert">
                                        Enter your password before saving
                                      </div>
                                      <div class="form-group">
                                          <label for="inputPassword">Password</label>
                                          <input id="inputPassword"  type="password" name="inputPassword" data-parsley-trigger="change" required="" placeholder="Enter Password" autocomplete="off" class="form-control">
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
