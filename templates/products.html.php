<div class="products">
    <!--<h2>< //$categoryName ?></h2>-->
    <?php
    $rows =  array_slice($rows, 0, 5); // get first five only
    //print_r($rows);
    if (count($rows) == 0) :
        printf("The item you were searching could not be found");
    else :
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
            $itemId = $row["itemId"];
            //echo gettype($itemName);
            //$itemName = strval($itemName);
            //echo implode(' ', $itemName);
            //$itemName = preg_split('/(?=[A-Z])/', strval($itemName), -1, PREG_SPLIT_NO_EMPTY);

        ?>
            <a class="block" href="displayItem.php?itemId=<?= $itemId ?>">
                <article class="products__item item">
                    <div class="item__photo-frame">
                        <img src="<?= $photo ?>" class="item__photo" width="170" height="170" alt="Photo of product">
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
                        <?= $itemName ?>
                    </h3>
                </article>
            </a>
        <?php endforeach; ?>
    <?php endif; ?>
</div>