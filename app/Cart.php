<?php
/**
 * Created by PhpStorm.
 * User: user312
 * Date: 1/8/2020
 * Time: 11:28 PM
 */

namespace App;


class Cart
{
    public $items;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($cart)
    {
        if($cart) {
            $this->items = $cart->items;
            $this->totalQty = $cart->totalQty;
            $this->totalPrice = $cart->totalPrice;
        }
    }

    public function add($item, $id)
    {
        $storedItem = [
            'qty' => 0,
            'price' => $item->price,
            'id' => $id,
            'firstPrice' => $item['price'],
            'title' => $item['title'],
            'description' => $item['description']
        ];

        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['firstPrice'] = $item->price;
        $storedItem['title'] = $item->title;
        $storedItem['description'] = $item->description;
        $storedItem['id'] = $id;
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

    public function remove($id, $price) {
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $price;
        $this->totalQty--;
        $this->totalPrice -= $price;
        if ($this->items[$id]['qty'] <= 0) {
            unset($this->items[$id]);
        }
    }

}