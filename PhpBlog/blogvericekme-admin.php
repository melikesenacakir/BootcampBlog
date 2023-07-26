<?php
try {
    $db = new PDO("sqlite: blog.db");

    if (isset($_POST['submit']) && isset($_POST['id'])) {
        $id = $_POST['id'];
        $sql = "SELECT * FROM bloglar WHERE id=?";
        $sonuc = $db->prepare($sql);
        $sonuc->execute([$id]);

        $veri = $sonuc->fetch(PDO::FETCH_ASSOC);
            echo '<div class="col">';
            echo '<div class="blog-text rounded-3">';
            echo '<div class="blog-text-title">' . $veri['baslik'] . '</div>';
            echo '<div class="blog-text">' . $veri['icerik'] . '</div>';
            echo '<div class="blog-text-meta-info">';
            echo '<ul>';
            echo '<li>';
            echo '<div class="blog-text-date">' . $veri['tarih'] . '</div>';
            echo '<div class="blog-text-meta-dot">·</div>';
            echo '<div class="blog-text-meta-dot">·</div>';
            echo '<div class="blog-text-author">' . $veri['adSoyad'] . '</div>';
            echo '</li>';
            echo '</ul>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
    }elseif(isset($_POST['delete']) && isset($_POST['id'])){
        $id = $_POST['id'];
        $sil="DELETE FROM bloglar WHERE id=?";
        $sonuc = $db->prepare($sil);
        $sonuc->execute([$id]);
        echo '<script>alert("blog başarıyla silinmiştir")</script>';

    } else {
        $sql = "SELECT * FROM bloglar";
        $sonuc = $db->query($sql);
        $data = $sonuc->fetchAll(PDO::FETCH_ASSOC);

        echo '<div class="row justify-content-center">';
        foreach ($data as $veri) {
            echo '<div class="col-md-5 mb-4">';
            echo '<div class="blog-post rounded-3">';
            echo '<form method="post" action="blog-text-admin.php">';
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
            echo '<input type="hidden" name="id" value="' . $veri['id'] . '">';
            echo '<button type="submit" name="submit" class="btn btn-link" style="text-decoration: none;color: black">GÖRÜNTÜLEMEK İÇİN TIKLAYIN</button>';
            echo '<button type="submit" name="delete" class="btn btn-link" style="text-decoration: none;color: red">SİL</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    }
} catch (PDOException $par) {
    echo $par->getMessage();
}

$db = null;