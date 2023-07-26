<!DOCTYPE html>
<html lang="tr" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    <style>
        .custom-card {
            margin-bottom: 60px;
            width: 800px;
        }
    </style>
</head>

<body>

<header>
    <div class="container">
        <div class="header-wrapper mt-5">
            <div class="row header-content">
                <div class="header-title col-md-8">
                    <a href="admin.html">ADMIN PANEL</a>
                </div>
                <div class="header-menu col-md-4">
                    <ul>
                        <li>
                            <a href="admin.html" style="opacity: 100%;">Home</a>
                        </li>
                        <li>
                            <a href="blog-admin.php">Blog</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="blog-post-wrapper">
    <div class="container mt-4">
        <div>
            <?php include("contactvericekme.php") ?>
        </div>
    </div>
</div>

<footer>
    <div class="container-fluid mt-5"></div>
    <hr>
    <div class="container text-center mt-5 mb-5" >
        <div class="copyright">
            © 2021 All rights reserved.
        </div>
    </div>

</footer>
</body>
</html>