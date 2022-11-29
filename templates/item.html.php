<div class="products">
    <!--<h2>< //$categoryName ?></h2>-->
    <?php
    foreach ($rows as $row) :
        $photo = "images/unavailable.gif";

        if (file_exists("images/" . $row["photo"]) && strlen($row["photo"]) > 0) {
            $photo = "images/" . $row["photo"];
        }

        $price = $row["price"];
        //unset($salePrice);
        $salePrice = "0";
        if (isset($row["salePrice"])) {
            $salePrice = $row["salePrice"];
        }
        $itemName = $row["itemName"];
        $itemName = wordwrap($itemName, 20, " <br />\n");
        $description = $row["description"];
        $description = wordwrap($description, 80, " <br />\n");

    ?>
        <a class="block" href="#">
            <article class="products__item item">
                <div class="item__photo-frame">
                    <img src="<?= $photo ?>" width="500" height="500" alt="Photo of product">
                </div>

                <div class="prices">
                    <?php if ($salePrice != "0") { ?>
                        <span class="price discounted-price">$ <?= $salePrice ?></span>
                        <span class="price old-price"><span class="special-was">Was</span><span class="cross">$<?= $price ?></span></span>
                    <?php } else { ?>
                        <span class="price actual-price">$ <?= $price ?></span>
                    <?php } ?>
                </div>
                <h3 class="item__name">
                    <?php
                    //foreach ($itemName as $word) {
                    //echo "$word <br>";
                    //}
                    ?>
                    <?= $itemName ?>
                </h3>
                <p class="item__description"><?= $description ?></p>

                <div>
                    <section id="products">
                        <?php foreach ($productRows as $row) :
                            $itemName = $row["itemName"];
                            $price = sprintf('%01.2f', $row["price"]);
                            if (isset($row["salePrice"])) {
                                $price = sprintf('%01.2f', $row["salePrice"]);
                            }

                            $itemId = $row["itemId"];

                        ?>
                            <article>
                                <form action="shopping.php" method="post">
                                    <strong><?= $itemName ?></strong>
                                    <p>Price $<?= $price ?></p>
                                    <p><label for="qty<?= $itemId ?>">Quantity:</label>
                                        <input class="qty" type="number" id="qty<?= $itemId ?>" name="qty" value="1">
                                    </p>
                                    <p><input class="buy" type="submit" name="buy" value="Buy"></p>
                                    <input type="hidden" value="<?= $itemId ?>" name="itemId">
                                </form>
                            </article>
                        <?php endforeach; ?>

                    </section>
                </div>

            </article>
        </a>
    <?php endforeach; ?>
</div>