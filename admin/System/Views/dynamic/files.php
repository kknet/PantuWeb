<?php

$files = FileHandler::ListFilesWithdbNames();

$result = "";

foreach($files as $file)
  {



    $result .= '<tr>
    <td>'.$file["name"].'</td>
    <td >'.$file["type"].'</td>
    <td>'.$file["size"].'</td>
    <td>'.$file["ext"].'</td>
    <td><a href="/download/'.$file["hash"].'">Download</a></td>
    </tr>';
  }

?>
            <div class="container-fluid dashboard-content">

              <div class="row">
                  <!-- ============================================================== -->
                  <!-- basic table  -->
                  <!-- ============================================================== -->
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="card">
                          <h5 class="card-header">Files in Download Path</h5>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table table-striped table-bordered first" id="files_DT">
                                      <thead>
                                          <tr>
                                              <th>FileName</th>
                                              <th>File Type</th>
                                              <th>Size</th>
                                              <th>Extension</th>
                                              <th>Download</th>
                                          </tr>
                                      </thead>
                                      <tbody>


                                        <?php echo $result; ?>
                                      </tbody>

                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- ============================================================== -->
                  <!-- end basic table  -->
                  <!-- ============================================================== -->
              </div>
            </div>
