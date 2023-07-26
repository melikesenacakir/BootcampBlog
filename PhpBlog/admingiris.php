<!DOCTYPE html>
<html lang="tr">

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
</head>

<body>

<header>
    <div class="container">
        <div class="header-wrapper mt-5">
            <div class="row header-content">
                <div class="header-title col-md-8">
                    <a href="admingiris.php">ADMIN LOGIN PAGE</a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="person-info-wrapper">
    <div class="container">
        <div class="person-info-container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/thumbnail.png" class="rounded img-fluid">
                        </div>
                        <div class="col-md-6 d-flex justify-content-center align-items-center bg-light rounded">
                            <div class="w-75">
                                <form action="admin-veri-cekme.php" method="post">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" name="email">
                                        <label for="email">Mail Adresiniz</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" name="sifre">
                                        <label for="Password">Şifreniz</label>
                                        <div class="d-grid gap-3 mb-3">
                                            <input type="submit" class="btn btn-primary mt-2" value="giriş yap">
                                        </div>
                                        <p style="text-align: center">admin@admin.com/admin</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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