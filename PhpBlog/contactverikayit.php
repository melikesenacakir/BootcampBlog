<?php
try{
    $db=NEW PDO("sqlite: blog.db");

    if(isset($_POST['buton'])){
        $sql="INSERT INTO contact(adsoyad,mesaj,email,konu) VALUES (?,?,?,?)";
        $sonuc=$db->prepare($sql);
        $ad=strip_tags($_POST['adsoyad']);
        $posta=strip_tags($_POST['email']);
        $mesaj=strip_tags($_POST['message']);
        $sub=strip_tags($_POST['konu']);
        if ($ad==null || $posta==null || $sub==null || $mesaj==null) {
            echo "bad data entry";
            exit();
        }else{
            $ekleme=$sonuc->execute([
                "$ad",
                "$mesaj",
                "$posta",
                "$sub"
            ]);
        }

        if($ekleme){
            echo "<script>alert('message has been send');</script>";
        }
        else{
            echo "<script>alert('ERROR in insertion!');</script>";
        }
    }
}catch(PDOException $par){
    echo $par->getMessage();
}
$db = null;