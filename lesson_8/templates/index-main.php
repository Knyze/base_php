<div class="attend container">
    <h2>НАШИ ТОВАРЫ</h2>
    <div class="wrapAttend">

        <?php foreach($result as $item): ?>
        <form action="<?='engine/catalog.php'?>" method="post" class="wrapProduct">
            <button type="submit" class="addProduct">
                Add to Cart
            </button>
            <div class="imgProduct">
                <img src="<?=$item['imgSrc']?>" alt="<?=$item['name']?>">
            </div>
            <div class="textProduct">
                <h6><?=$item['name']?></h6>
                <p>$<?=$item['price']?></p>
            </div>
            <input type="text" hidden name="product" value="<?=$item['id']?>">
        </form>
        <?php endforeach?>

    </div>
</div>