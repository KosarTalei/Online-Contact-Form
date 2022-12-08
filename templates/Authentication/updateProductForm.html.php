<?php
if (count($rows) > 0) :
    $row = $rows[0];
?>
    <h2 id="edit">Edit Product</h2>
    <form action="updateProduct.php?id=<?= $itemId ?>#itm<?= $itemId ?>" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Product Details</legend>
            <p>
                <label for="itemName">Product Name:</label>
                <input type="text" name="itemName" id="itemName" required value="<?=$row["itemName"] ?>">
            </p>

            <p>
                <label for="category">Category:</label>
                <select name="category" id="category">
                    <?php foreach ($categoryRows as $categoryRow) :
                        $categoryId = $categoryRow["categoryId"];
                        $categoryName = $categoryRow["categoryName"];
                        if ($categoryId == $row["categoryId"]) :
                            //display the category as the selected item in the dropdown list
                    ?>
                            <option value="<?= $categoryId ?>" selected><?= $categoryName ?></option>
                        <?php else : ?>
                            <option value="<?= $categoryId ?>"><?= $categoryName ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </p>

            <p>
                <label for="featured">Featured: </label>
                <input type="text" name="featured" id="featured">
            </p>

            <p>
                <label for="price">Price: $</label>
                <input type="text" name="price" id="price">
            </p>

            <p>
                <label for="salePrice">After-sale price: $ (leave this field blank if the item isn't on sale): </label>
                <input type="text" name="salePrice" id="salePrice">
            </p>

            <p>
                <label for="description">Description: </label>
                <textarea name="description" id="description"></textarea>
            </p>

            <input type="hidden" value="<?= $row["itemId"] ?>" name="itemId">
            <p>
                <label for="photo">Photo:</label>
                <input type="file" name="photo" id="photo">
                <input type="hidden" name="itemId" value="<?= $itemId ?>">
                <input type="hidden" name="oldPhoto" value="<?= $row["photo"] ?>">
            </p>
            
            <input type="hidden" value="<?= $row["itemId"] ?>" name="itemId">
            <p>
                <input type="submit" value="Update Product" name="submit">
            </p>
            <p><?= $message ?></p>
        </fieldset>
    </form>
<?php endif; ?>