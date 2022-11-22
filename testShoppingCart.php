<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
</head>
<body>
	<pre>
<?php
//test product class
require_once("classes/product.php");
$product = new Product();
$product->getProduct(1);
echo $product->getProductID() . "<br>";
echo $product->getProductName() . "<br>";
echo $product->getPrice() . "<br>";
$rows = $product->getProducts();
print_r($rows);
?>
</pre>
</body>
</html>