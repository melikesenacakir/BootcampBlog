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
                        <a href="index.php">USER</a>
                    </div>
                    <div class="header-menu col-md-4">
                        <ul>
                            <li>
                                <a href="#" style="opacity: 100%;">Home</a>
                            </li>
                            <li>
                                <a href="blog.php">Blog</a>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="person-info-wrapper">
        <div class="container">
            <div class="person-info-container">
                <div class="row">
                    <div class="person-photo col-md-5">
                        <img src="assets/img/profile.jpg" alt="" srcset="">
                    </div>
                    <div class="person-info-text col-md-7">
                        <div class="person-job">
                            Web Developer
                        </div>
                        <div class="person-name" id="kullanici">
                            <h1>Melike Sena Çakır</h1>
                        </div>
                        <div class="person-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod asperiores labore beatae,
                            velit officia eum est repellat veritatis. Odio, id magnam eveniet enim architecto
                            reprehenderit neque consectetur porro atque odit.
                            <b> ->admin giriş paneline ulaşmak için: /admingiris.php</b>
                        </div>
                        <div class="person-social-link">
                            <ul>
                                <li>
                                    <a href="https://twitter.com/"><i class="flaticon-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://tr-tr.facebook.com/"><i class="flaticon-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/"><i class="flaticon-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/"><i class="flaticon-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/"><i class="flaticon-linkedin-1"></i></a>
                                </li>
                                <li>
                                    <a href="https://github.com/"><i class="flaticon-github"></i></a>
                                </li>
                                <li>
                                    <a href="mailto:"><i class="flaticon-mail-1"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-post-wrapper">
        <div class="container mt-4">
            <div class="blog-post-container">
                <div class="blog-post-top-title">
                    Blog
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-outline-light rounded-pill bg-secondary mb-3"><a href='blogform.html' style="text-decoration: none;color: white">Yeni Bir blog yazısı ekle</a></button>
                </div>

            </div>
            <div>
                <?php
            try {
                $db = new PDO("sqlite: blog.db");
                $sql = "SELECT * FROM bloglar WHERE adsoyad='Melike Sena Çakır'";
                $sonuc = $db->query($sql);
                $data = $sonuc->fetchAll(PDO::FETCH_ASSOC);
                    echo '<div class="row justify-content-center">';
                    foreach ($data as $veri) {
                        echo '<div class="col-md-5">';
                        echo '<div class="blog-post rounded-3">';
                        echo '<a href="blog.php">';
                        echo '<div class="blog-post-thumbnail">';
                        echo '<img src="assets/img/thumbnail.png" class="img-fluid rounded-3" alt="hata">';
                        echo '</div>';
                        echo '<div class="blog-post-text">';
                        echo '<div class="blog-post-title">' . $veri['baslik'] . '</div>';
                        echo '<div class="blog-post-description">' . $veri['icerik'] . '</div>';
                        echo '<div class="blog-post-meta-info">';
                        echo '<ul>';
                        echo '<li>';
                        echo '<div class="blog-post-date">' . $veri['tarih'] . '</div>';
                        echo '<div class="blog-post-meta-dot">·</div>';
                        echo '<div class="blog-post-meta-dot">·</div>';
                        echo '<div class="blog-post-author">' . $veri['adSoyad'] . '</div>';
                        echo '</li>';
                        echo '</ul>';
                        echo '</div>';
                        echo '</div>';
                        echo '</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                    echo '</div>';


            } catch (PDOException $par) {
                echo $par->getMessage();
            }

            $db = null; ?>
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