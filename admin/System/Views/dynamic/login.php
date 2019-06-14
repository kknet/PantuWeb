<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PanTube | Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo "http://".$_SERVER['HTTP_HOST']."".Config::$adminpath ?>/System/Views/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo "http://".$_SERVER['HTTP_HOST']."".Config::$adminpath  ?>/System/Views/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo "http://".$_SERVER['HTTP_HOST']."".Config::$adminpath ?>/System/Views/assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo "http://".$_SERVER['HTTP_HOST']."".Config::$adminpath ?>/System/Views/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a class="navbar-brand" href="<?php echo "http://".$_SERVER['HTTP_HOST']."".Config::$adminpath ?>/">PanTu</a><span class="splash-description">User Login</span></div>
            <div class="card-body">

            <?php Errors::getInstance()->PrintWarnings(); ?>

                <form method="post" action="/admin/login" >
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="txt_user_email" id="username" type="email" placeholder="Email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="txt_user_password" id="password" type="password" placeholder="Password">
                    </div>
                    <button type="submit" name="btn-login" class="btn btn-primary btn-lg btn-block">Log In !</button>
                </form>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?php echo "http://".$_SERVER['HTTP_HOST']."".Config::$adminpath ?>/System/Views/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo "http://".$_SERVER['HTTP_HOST']."".Config::$adminpath ?>/System/Views/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>
