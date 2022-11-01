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

            </article>
        </a>
    <?php endforeach; ?>
</div>