<?php
require "Product.php";
require "Rectangle.php";

$product = new Product();

$product->title = "Engagement Photo Session";
$product->price = 1000;
$product->quantity = 10;


echo $product->setProduct();
echo "<br/>";
echo "<br/>";

$product2 = new Product();
$product2->title = "Wedding Day Photo Coverage";
$product2->price = 20000;
$product2->quantity = 2;
echo $product2->setProduct();


$object = new Rectangle;
$object2 = new Rectangle;
echo $object->length;
echo $object->width;

$object->length = 30;
$object->width = 20;

echo $object->length;
echo  $object->width;

echo $object->getPerimeter();
echo $object->getArea();

$object2->length = 35;
$object2->width = 50;

echo $object2->getArea();
