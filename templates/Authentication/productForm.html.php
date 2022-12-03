<fieldset>

    <form action="insertProduct.php" method="post" enctype="multipart/form-data">

        <legend>Insert New Item Details</legend>
        <p>
            <label for="itemName">Item Name:</label>
            <input type="text" name="itemName" id="itemName" required>
        </p>

        <p>
            <label for="category">Category:</label>
            <select name="category" id="category">
                <?php foreach ($categoryRows as $row) :
                    $categoryId = $row["categoryId"];
                    $categoryName = $row["categoryName"];
                ?>
                    <option value="<?= $categoryId ?>"><?= $categoryName ?></option>
                <?php endforeach; ?>
            </select>
        </p>

        <p><label for="featured">Featured: </label><input type="text" name="featured" id="featured"></p>

        <p> <label for="price">Price: $</label><input type="text" name="price" id="price"></p>

        <p><label for="salePrice">After-sale price: $ (leave this field blank if the item isn't on sale): </label><input type="text" name="salePrice" id="salePrice"></p>

        <p><label for="description">Description: </label><textarea name="description" id="description"></textarea></p>

        <p><label for="photo">Photo:</label><input type="file" name="photo" id="photo"></p>

        <p><input type="submit" value="Insert New Item" name="submit"></p>
        <p><?= $message ?></p>

    </form>
</fieldset>