<?php

require 'models/ItemSale.php';

class ItemSaleController extends ItemSale
{

    function listItemSale()
    {
        $itemSales = $this->getAllItemSale();
        require_once 'views/itemSale/list.php';
    }

    function add($noti = null)
    {
        require_once 'views/itemSale/add.php';
    }

    function edit($itemSale)
    {
        require_once 'views/itemSale/edit.php';
    }
}