<?php
class Product {
    public $title;
    public $price = 0;
    public $quantity = 0;

    public function setProduct() {
        return "Product title" . $this->title . "<br/>" . "Product Price" . $this->price . "quantity" . $this->quantity;
    }

    public function setTotal() {
        return ($this->price * $this->quantity);

    } 
}
?>