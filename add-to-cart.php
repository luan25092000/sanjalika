<?php
    session_start();

    $items = [];
    $qty_arr = $_POST['qty_arr'];
    $id_arr = $_POST['id_arr'];

    foreach ($id_arr as $key => $value){
        $items[$key]['id'] = $value;
    }
    foreach ($qty_arr as $key => $value){
        $items[$key]['qty'] = $value;
    }

    if (isset($_SESSION["shopping_cart"])){
        $item_arr_id = array_column($_SESSION["shopping_cart"], "item_id");
        foreach ($items as $item) {
            if (!in_array($item['id'], $item_arr_id)){
                if ($item['qty'] > 0) {
                    $item_arr = [
                        'item_id' => $item['id'],
                        'item_qty' => $item['qty'],
                        'date' => date('Y-m-d')
                    ];
                    $_SESSION["shopping_cart"][$item['id']] = $item_arr;
                }
            } else {
                $_SESSION["shopping_cart"][$item['id']]['item_qty'] += $item['qty'];
            }
        }
    } else {
        foreach ($items as $item) {
            if ($item['qty'] > 0) {
                $item_arr = [
                    'item_id' => $item['id'],
                    'item_qty' => $item['qty'],
                    'date' => date('Y-m-d')
                ];
                $_SESSION["shopping_cart"][$item['id']] = $item_arr;
            }
        }
    }

    echo true;