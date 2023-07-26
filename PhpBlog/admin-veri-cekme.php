<?php
try {
    $db = new PDO("sqlite: admin.db");
        $sql = "SELECT * FROM giris WHERE email=?";
        $mail=$_POST['email'];
        $sifre=$_POST['sifre'];
        $sonuc = $db->prepare($sql);
        $sonuc->execute([$mail]);
        $data = $sonuc->fetch(PDO::FETCH_ASSOC);
        if ($data && ($sifre == $data['sifre'])) {
            header('Location: admin.html');
        }
        else{
            echo "<script>alert('hatalı giriş');</script>";
        }
}
catch (PDOException $par) {
    echo $par->getMessage();
}
$db = null;