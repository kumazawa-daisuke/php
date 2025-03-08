<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$merchan = htmlspecialchars($_POST['merchan'], ENT_QUOTES);
$quantity = htmlspecialchars($_POST['quantity'], ENT_QUOTES);
print "名前は" . $name . "<br>";
print "商品は" . $merchan . "<br>";
print "数量は" . $quantity;
