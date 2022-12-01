<?php
if (count($rows) > 0) :
    $row = $rows[0];
?>
    <h2 id="edit">Edit Item</h2>
    <!--form action="updateProduct.php" method="post"-->
    <form action="updateProduct.php?id=<?= $itemId ?>#itm<?= $itemId ?>" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Update Item Details</legend>
            <p>
                <label for="itemName">Product Name:</label>
                <input type="text" name="itemName" id="itemName" required value="<?= $row["itemName"] ?>">
            </p>

            <!--the category ID number to be the selected item in the dropdown list-->
            <label for="category">Category:</label>
            <select name="category" id="category">
                <?php foreach ($categoryRows as $categoryRow) :
                    $categoryId = $categoryRow["categoryId"];
                    $categoryName = $categoryRow["categoryName"];
                    if ($categoryId == $row["categoryId"]) :
                        //display the category as the selected item in the drop down list
                ?>
                        <option value="<?= $categoryId ?>" selected><?= $categoryName ?></option>
                    <?php else : ?>
                        <option value="<?= $categoryId ?>"><?= $categoryName ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>

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
            <p>
                <input type="submit" value="Update Item" name="submit">
            </p>
            <p><?= $message ?></p>
        </fieldset>
    </form>
<?php endif; ?>