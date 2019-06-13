<!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
      <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
				                     <li class="nav-item">
                                    <a class="nav-link <?php echo (parse_url($_SERVER['REQUEST_URI'])["path"] == "/admin/") ? "active" : "" ; ?>" href="<?php echo "http://" . $_SERVER['HTTP_HOST'] . "" . Config::$adminpath ?>"><i class="fa fa-fw fa-home"></i>Home</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link <?php echo (parse_url($_SERVER['REQUEST_URI'])["path"] == "/admin/server/status") ? "active" : "" ; ?>" href="/admin/server/status" ><i class="fas fa-fw fa-server"></i>Server Status</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link <?php echo (parse_url($_SERVER['REQUEST_URI'])["path"] == "/admin/server/settings") ? "active" : "" ; ?>" href="/admin/server/settings" ><i class="fas fa-fw fa-tasks"></i>Server Settings</a>
                             </li>
                             <li class="nav-item ">
                                 <a class="nav-link <?php echo (parse_url($_SERVER['REQUEST_URI'])["path"] == "/admin/general/social-links") ? "active" : "" ; ?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-1"><i class="fas fa-fw fa-cogs"></i>General</a>
                                 <div id="submenu-1-2" class="collapse submenu" style="">
                                     <ul class="nav flex-column">
                                         <li class="nav-item">
                                             <a class="nav-link <?php echo (parse_url($_SERVER['REQUEST_URI'])["path"] == "/admin/general/social-links") ? "active" : "" ; ?>" href="/admin/general/social-links">Social Links</a>
                                         </li>
                                     </ul>
                                 </div>
                             </li>

                            <li class="nav-divider">
                                Features
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" ><i class="fas fa-fw fa-info"></i>Logs</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo (parse_url($_SERVER['REQUEST_URI'])["path"] == "/admin/files") ? "active" : "" ; ?>" href="/admin/files" ><i class="fas fa-fw fa-folder"></i>Files</a>

                            </li>
                            </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
