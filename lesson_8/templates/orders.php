<table class="orders container">
    <caption>
        <h3>Заказы</h3>
    </caption>
    <tr>
        <th>№ заказа</th>
        <th>Пользователь</th>
        <th>Данные</th>
        <th>Сумма</th>
        <th>Статус</th>
    </tr>
    
    <?php foreach($result as $item): ?>
    <tr>
        <td><?=$item['id']?></td>
        <td><?=$item['user']?></td>
        <td><?=$item['data']?></td>
        <td><?=$item['sum']?></td>
        <td>
            <select name="status" id="status"
                <?php if ($_SESSION['admin'] == 1): ?>
                    onchange="handleChangeStatus(event, <?=$item['id']?>)"
                <?php else: ?>
                    disabled
                <?php endif?>>
                
                <option <?php echo $item['status']=='inProcess' ? 'selected' : '' ?> value="inProcess">В обработке</option>
                <option <?php echo $item['status']=='closed' ? 'selected' : '' ?> value="closed" >Закрыт</option>
                <option <?php echo $item['status']=='canselled' ? 'selected' : '' ?> value="canselled">Отменен</option>
            </select>
        </td>
    </tr>
    <?php endforeach?>

</table>

<?php if ($_SESSION['admin'] == 1): ?>
    <script src="./public/js/changeStatusOrders.js"></script>
<?php endif?>