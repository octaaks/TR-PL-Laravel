<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldcCart){
        if($oldcCart){
            $this->items = $oldcCart->items;
            $this->totalQty = $oldcCart->totalQty;
            $this->totalPrice = $oldcCart->totalPrice;
        }
    }

    public function add($item, $id){
        $storedItem = ['qty' => 0, 'price' => $item->harga, 'item'=>$item];
        if($this->items){
            if(array_key_exists($id,$this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->harga * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty ++;
        $this->totalPrice += $item->harga;
    }
    public function del($item, $id){
        $storedItem = ['qty' => 0, 'price' => $item->harga, 'item'=>$item];
        if($this->items){
            if(array_key_exists($id,$this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']--;
        $storedItem['price'] = $item->harga * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty --;
        $this->totalPrice -= $item->harga;
    }

}
