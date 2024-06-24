<h2>Change item</h2>
<form action="index.php?url=updateItemSale" method="post">
    <input type="hidden" name="id" value="<?php echo $itemSale['id']?>">
    <input type="text" name="item_code" id="item_code" value="<?php echo $itemSale['item_code']?>">
    <br><br>
    <input type="text" name="item_name" id="item_name" value="<?php echo $itemSale['item_name']?>">
    <br><br>
    <input type="text" name="quantity" id="quantity" value="<?php echo $itemSale['quantity']?>">
    <br><br>
    <input type="date" name="expired_date" id="expired_date" value="<?php echo $itemSale['expired_date']?>">
    <br><br>
    <input type="text" name="note" id="note" value="<?php echo $itemSale['note']?>">
    <br><br>
    <input type="submit" name="update" value="Update">
</form>