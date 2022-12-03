<section id="cart">
	
	<h1>Purchased items</h1>
	<?php if (isset($_SESSION["cart"])) :
		$cart = $_SESSION["cart"];
		$cartItems = $cart->getItems();
	?>
		<table>
			<tr>
				<th>Item</th>
				<th>Price</th>
				<th>Qty</th>
				<th></th>
			</tr>
			<?php foreach ($cartItems as $item) :
				$productName = $item->getItemName();
				$price = sprintf('%01.2f', $item->getPrice());
				$productId = $item->getItemId();
				$qty = $item->getQuantity();
			?>

				<tr>
					<td><?= $productName ?></td>
					<td><?= $price ?></td>
					<td><?= $qty ?></td>
					<td>
						<form action="shopping.php" method="post">
							<input type="submit" name="remove" value="Remove">
							<input type="hidden" value="<?= $productId ?>" name="productId">
						</form>
					<td>
				</tr>
			<?php endforeach; ?>

		</table>

		<p>Total: $<?= sprintf('%01.2f', $cart->calculateTotal()) ?></p>
		<p><a class="colorCorrection" href="checkout.php">Checkout</a></p>
	<?php endif; ?>

</section>