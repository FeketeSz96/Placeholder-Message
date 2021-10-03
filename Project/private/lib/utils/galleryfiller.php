<?php
$isPost = isset($_POST['submit']);
$uploadError = false;

if($isPost ){
    $tmpPath = $_FILES['fileToUpload']['tmp_name'];

    $targetPath = 'public/img/galleryimg/' . $_FILES['fileToUpload']['name'];
    $imageFileType = strtolower(pathinfo($targetPath, PATHINFO_EXTENSION));
    $renamePath = 'public/img/galleryimg/' . uniqid('', true) . '.' .$imageFileType;
    if (strlen($tmpPath) !== 0){
        if(!getimagesize($tmpPath)){
            $uploadError = true;
        }

        if($_FILES['fileToUpload']['size'] > 10_000_000){
            $uploadError = true;
        }

        if(!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])){
            $uploadError = true;
        }

        if(!$uploadError && !move_uploaded_file($tmpPath, $targetPath)) {
            $uploadError = true;
        }else{
            rename($targetPath, $renamePath);
            db_execute('INSERT INTO `files` (id, src) VALUES (:id, :src)', [
                ':id' => uniqid('', true),
                ':src' => $renamePath
            ]);
        }
    }
}