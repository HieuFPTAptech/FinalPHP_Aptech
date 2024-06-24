<table border="1" cellpadding="6" cellspacing="0">
    <tr>
        <td>ID</td>
        <td>Item Code</td>
        <td>Item Name</td>
        <td>Quantity</td>
        <td>Expired date</td>
        <td>Note</td>
    </tr>
    <?php $i = 0; ?>
    <?php foreach ($itemSales as $itemSale) { ?>
    <?php $i++; ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $itemSale['item_code'] ?></td>
        <td><?php echo $itemSale['item_name'] ?></td>
        <td><?php echo $itemSale['quantity'] ?></td>
        <td><?php echo $itemSale['expired_date'] ?></td>
        <td><?php echo $itemSale['note'] ?></td>

        <td>
            <a style="text-decoration: none;" href=" index.php?url=editItemSale&id=<?php echo $itemSale['id'] ?>">
                <button>Edit</button>
            </a>

            <a style="text-decoration: none;" onclick=" return confirm('Bạn có muốn xóa sản phẩm')"
                href="index.php?url=deleteItemSale&id=<?php echo $itemSale['id'] ?>">
                <button>Delete</button>
            </a>
        </td>
    </tr>
    <?php } ?>
</table>

<a href="index.php?url=addItemSale"><button>Add new item</button></a>