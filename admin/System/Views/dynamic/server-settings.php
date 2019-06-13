<?php
$serverClass     = new Server();
$serverSettings = $serverClass->getServerSettings();


?>
            <div class="container-fluid dashboard-content">

                <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                          <div class="card">
                              <h5 class="card-header">Server Settings</h5>
                              <div class="card-body">


<?php Errors::getInstance()->PrintWarnings(); ?>
<?php Errors::getInstance()->PrintInfos(); ?>
<div class="alert alert-warning" role="alert">

Regulations may affect system operation
</div>
                                  <form method="post" id="basicform" data-parsley-validate="">
                                      <div class="form-group">
                                          <label for="inputYoutubeDlPath">Youtube-dl Path</label>
                                          <input id="inputYoutubeDlPath" value="<?php echo $serverSettings["YOUTUBEDLPATH"] ?>" type="text" name="inputYoutubeDlPath" data-parsley-trigger="change" required="" placeholder="Enter Youtube-dl Path" autocomplete="off" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <label for="inputFfmpegPath">Ffmpeg Path</label>
                                          <input id="inputFfmpegPath" value="<?php echo $serverSettings["FFMPEGPATH"] ?>" type="text" name="inputFfmpegPath" data-parsley-trigger="change" required="" placeholder="Enter Ffmpeg Path" autocomplete="off" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <label for="inputDownloadPath">Download Path</label>
                                          <input id="inputDownloadPath" value="<?php echo $serverSettings["DOWNLOADPATH"] ?>" type="text" name="inputDownloadPath" data-parsley-trigger="change" required="" placeholder="Enter Download Path" autocomplete="off" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <label for="inputCachePath">Cache Path</label>
                                          <input id="inputCachePath" value="<?php echo $serverSettings["CACHEPATH"] ?>" type="text" name="inputCachePath" data-parsley-trigger="change" required="" placeholder="Enter Cache Path" autocomplete="off" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <label for="inputCharSet">CharSet</label>
                                          <input id="inputCharSet" value="<?php echo $serverSettings["CHARSET"] ?>" type="text" name="inputCharSet" data-parsley-trigger="change" required="" placeholder="Enter CharSet" autocomplete="off" class="form-control">
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
