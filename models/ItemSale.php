<?php

require_once 'DB.php';

class ItemSale extends DB
{
    function getAllItemSale()
    {
        $query = "SELECT * FROM item_sale";
        return $this->getData($query);
    }

    function addItemSale($item_code, $item_name, $quantity, $expired_date, $note)
    {
        $query = "INSERT INTO item_sale(item_code, item_name, quantity, expired_date, note) VALUES('$item_code', '$item_name', '$quantity', '$expired_date', '$note')";
        return $this->getData($query, false);
    }

    function getItemSale($id)
    {
        $query = "SELECT * FROM item_sale WHERE id = '$id'";
        return $this->getData($query, false);
    }

    function updateItemSale($item_code, $item_name, $quantity, $expired_date, $note, $id)
    {
        $query = "UPDATE item_sale SET item_code = '$item_code', item_name = '$item_name', quantity = '$quantity', expired_date = '$expired_date', note = '$note' WHERE id = '$id'";
        return $this->getData($query, false);
    }

    function deleteItemSale($id)
    {
        $query = "DELETE FROM item_sale WHERE id = '$id'";
        return $this->getData($query, false);
    }
}
