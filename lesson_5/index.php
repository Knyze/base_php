<?php
$mysqli = mysqli_connect('localhost', 'root', '');
$query = mysqli_query($mysqli, "SELECT * FROM geek_brains.galery ORDER BY galery.count DESC");
while ($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
}
mysqli_close($mysqli);

?>

<script>

function handleOpenImg(picture, name, count) {
    window.open(`picture.php?src=${picture}&name=${name}&count=${count}`);
}

</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Galery</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <div class="wrap">
            <?php foreach($result as $item): ?>
                <div class="imgWrap">
                    <img src="<?=$item['icon']?>" alt="<?=$item['name']?>"
                        onclick="handleOpenImg('<?=$item['picture']?>', '<?=$item['name']?>', <?=$item['count']?>)">
                    <h4>Просмотров: <?=$item['count'] ?></h4>
                </div>
            <?php endforeach?>
        </div>
    </div>

</body>

</html>
