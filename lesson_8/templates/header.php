<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header class="container header">
    <ul class="menu">
        <li><a href="index.php">Каталог</a></li>
        <li><a href="cart.php">Корзина</a></li>
        
        <?php if ($_SESSION['auth']):?>
            <li><a href="orders.php">Заказы</a></li>
        <?php endif?>
        
    </ul>
    <?php if(!$_SESSION['auth']):?>
        <div class="auth">
            <a href="login.php">Войти</a>
        </div>
    <?php else:?>
        <h5 class="m-3 alert-success"><?=$_SESSION['user_name']?>, добро пожаловать!</h5>
        <div class="auth">
            <a href="public\logout.php">Выйти</a>
        </div>
    <?php endif?>
    
</header>


