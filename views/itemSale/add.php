<h2>Add more items</h2>
<form action="index.php?url=addItemSale" method="post">

    <input type="text" name="item_code" id="item_code">
    <br><br>
    <input type="text" name="item_name" id="item_name">
    <br><br>
    <input type="text" name="quantity" id="quantity">
    <br><br>
    <input type="date" name="expired_date" id="expired_date">
    <br><br>
    <input type="text" name="note" id="note">
    <br><br>
    <br><br>
    <input type="submit" name="add" value="Add">
</form>

<?php if ($noti != null) { ?>
<p><?php echo $noti ?></p>
<?php } ?>