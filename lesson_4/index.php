<?php

const DIR = 'img';
const MAX_SIZE = 5000000;
$nameFiles = scandir(DIR);

foreach($nameFiles as $nameFile) {
    if (fnmatch('icon*', $nameFile)) {
        $icons[] = DIR.'/'.$nameFile;
    }
}

$countIcon = count($icons) + 1;

function openPicture($icon) {
    $namePicture = str_replace('icon','picture',$icon);
    if (is_readable($namePicture)) {
        return "window.open('$namePicture')";
    } else {
        return "window.open('$icon')";
    }
}

if (isset($_FILES) && $_FILES['photo']['error'] == 0) {
    $typeFile = strrchr($_FILES['photo']['name'], '.');
    
    if ($_FILES['photo']['size'] < MAX_SIZE && in_array($typeFile, ['.jpeg', '.jpg', '.png', '.bmp'])) {
        $destiation_dir = dirname(__FILE__) .'/'.DIR.'/icon_'.$countIcon.$typeFile;
        move_uploaded_file($_FILES['photo']['tmp_name'], $destiation_dir );
        $countIcon++;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <form action="" class="postPhotoForm" enctype="multipart/form-data" method="post">
            <input type="file" name="photo">
            <input type="submit" value="Сохранить">
        </form>
        <div class="wrap">
            <?php foreach($icons as $icon): ?>
            <img src=<?=$icon ?> alt=
            <?=$icon ?> onclick="
            <?=openPicture($icon) ?>">
            <?php endforeach?>
        </div>
    </div>

</body>

</html>
