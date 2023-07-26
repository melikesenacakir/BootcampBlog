<?php
try {
    $db = new PDO("sqlite: blog.db");
    $sql = "SELECT * FROM contact";
    $sonuc = $db->query($sql);
    $data = $sonuc->fetchAll(PDO::FETCH_ASSOC);

        echo '<div class="row">';
        foreach ($data as $veri) {
            echo '<div class="col-md-3 mb-5 mt-3">';
            echo '<div class="blog-post rounded-3">';
            echo '<div class="blog-post-thumbnail">';
            echo '<img src="assets/img/message.png" class="img-fluid rounded-3" alt="hata">';
            echo '</div>';
            echo "<b> Konu: </b>" . $veri['konu'] . "<br>";
            echo "<b> Ad Soyad: </b> " . $veri['adsoyad'] . "<br>";
            echo "<b> Email: </b> " . $veri['email'] . "<br>";
            echo "<b> Mesaj: </b> " . $veri['mesaj'] . "<br>";
            echo '</li>';
            echo '</ul>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';

} catch (PDOException $par) {
    echo $par->getMessage();
}

$db = null;

