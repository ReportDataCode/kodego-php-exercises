<?php
require "Rectangle.php";
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
