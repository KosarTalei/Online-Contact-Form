<div>
	<h2>Products to purchase</h2>
	<section id="products">
	<?php foreach ($productRows as $row): 		 
		$itemName = $row["itemName"];
		$price = sprintf('%01.2f', $row["price"]);
		if (isset($row["salePrice"])) {
			$price = sprintf('%01.2f', $row["salePrice"]);
		}

		$itemId = $row["itemId"];

		?>
		<article>
			<form class="purchase" action="shopping.php" method="post">
				<strong><?= $itemName ?></strong>
				<p>Price $<?= $price ?></p>
				<p><label for="qty<?=$itemId?>">Quantity:</label> 
					<input class="qty" type="number" id="qty<?=$itemId?>" name="qty" value="1">
				</p>
				<p><input class="buy" type="submit" name="buy" value="Buy"></p>
				<input type="hidden" value="<?=$itemId?>" name="itemId">
			</form>
		</article>
	<?php endforeach; ?>

	</section>
</div>