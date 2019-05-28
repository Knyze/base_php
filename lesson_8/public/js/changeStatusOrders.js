function handleChangeStatus(event, order) {
    
    fetch('engine/changeStatusOrder.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded',},
            body: `order=${order}&status=${event.target.value}`,
        });
    
}
