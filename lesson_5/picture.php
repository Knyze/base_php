<?php
if (!empty($_GET["name"])){
     $name = $_GET["name"];
}

if (!empty($_GET["count"])){
    $count = $_GET["count"];
} else {
    $count = 0;
}

if (!empty($_GET["src"])){
     $picture = $_GET["src"];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        <?=$name ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/picture.css">
</head>

<body>
    <div class="container">
        <img src="<?=$picture?>" alt="<?=$name?>">
        <h4>Просмотров:
            <?=$count?>
        </h4>
    </div>
</body>

</html>

<?php
$count++;
$mysqli = mysqli_connect('localhost', 'root', '');
$query = mysqli_query($mysqli, "UPDATE geek_brains.galery SET count=$count WHERE picture='$picture';");
mysqli_close($mysqli);
        
?>
