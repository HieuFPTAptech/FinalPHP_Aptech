<?php

require_once 'controllers/ItemSaleController.php';


$url = isset($_GET['url']) == true ? $_GET['url'] : '/';

switch ($url) {
    case '/':
        $itemSaleController = new ItemSaleController();
        $itemSaleController->listItemSale();
        break;

    // Product
    case 'addItemSale':
        if (isset($_POST['add'])) {
            if ($_POST['item_code'] == null || $_POST['item_name'] == null || $_POST['quantity'] == null || $_POST['expired_date'] == null) {
                $noti = "Please fill in all fields";
                $itemSaleController = new ItemSaleController();
                $itemSaleController->add($noti);
            } else {
                $itemSaleController = new ItemSaleController();
                $itemSaleController->addItemSale($_POST['item_code'], $_POST['item_name'], $_POST['quantity'], $_POST['expired_date'], $_POST['note']);
                header('Location: index.php');
            }
        }
        $itemSaleController = new ItemSaleController();
        $itemSaleController->add(); //?????

        break;

    case 'editItemSale':
        $itemSaleController = new ItemSaleController();
        $itemSale = $itemSaleController->getItemSale($_GET['id']);
        $itemSaleController->edit($itemSale);
        break;

    case 'updateItemSale':
        $itemSaleController = new ItemSaleController();
        $itemSaleController->updateItemSale($_POST['item_code'], $_POST['item_name'], $_POST['quantity'], $_POST['expired_date'], $_POST['note'], $_POST['id']);
        header('Location: index.php');
        break;

    case 'deleteItemSale':
        $itemSaleController = new ItemSaleController();
        $itemSaleController->deleteItemSale($_GET['id']);
        header('Location: index.php');
        break;

    default:
        echo "404 - Not Found";
        break;
}