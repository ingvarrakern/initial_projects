<?php

class Shipment {
    
    private $from;
    private $item;
    private $quantity;
    public function __construct($from, $item, $quantity) {
        $this->from = strtoupper ($from);
        $this->item = strtoupper ($item);
        $this->quantity = $quantity;
    }
    public function getFrom() {
        return $this->from;
    }

    public function getItem() {
        return $this->item;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setFrom($from): void {
        $this->from = $from;
    }

    public function setItem($item): void {
        $this->item = $item;
    }

    public function setQuantity($quantity): void {
        $this->quantity = $quantity;
    }
 
    
    function toString(){
        
    }

    
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

