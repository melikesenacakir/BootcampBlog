<?php
try {
    $db = new PDO("sqlite: blog.db");

    if (isset($_POST['buton'])) {
        $sql = "INSERT INTO bloglar(adsoyad, tarih, icerik,baslik) VALUES (?, ?, ?, ?)";
        $sonuc = $db->prepare($sql);

        $adsoyad = strip_tags($_POST['adsoyad']);
        $date = date('Y-m-d H:i:s');
        $mesaj = strip_tags($_POST['icerik']);
        $baslik = strip_tags($_POST['baslik']);

        if ($adsoyad == null || $mesaj == null || $baslik == null) {
            echo "bad data entry";
            exit();
        } else {
            $ekleme = $sonuc->execute([
                $adsoyad,
                $date,
                $mesaj,
                $baslik
            ]);
        }

        if ($ekleme) {
            echo "<script>alert('blog has been created');</script>";
        } else {
            echo "<script>alert('ERROR in insertion!');</script>";
        }
    }
} catch (PDOException $par) {
    echo $par->getMessage();
}

$db = null;
