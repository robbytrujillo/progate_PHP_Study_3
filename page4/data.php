<?php
// Hapus baris yang meng-import menu.php
//require_once('menu.php');
// Import file drink.php dan food.php 
require_once('drink.php');
require_once('food.php');

// Jadikan $juice sebagai instance class Drink
$juice = new Menu('JUS', 6, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
// Jadikan $coffee sebagai instance class Drink
$coffee = new Menu('KOPI', 5, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');
// Jadikan $curry sebagai instance class Food
$curry = new Menu('GULAI', 9, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');
// Jadikan $pasta sebagai instance class Food
$pasta = new Menu('PASTA', 12, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');

$menus = array($juice, $coffee, $curry, $pasta);
$juice = new Drink();
$coffee = new Drink();
$curry = new Food();
$pasta = new Food();
?>