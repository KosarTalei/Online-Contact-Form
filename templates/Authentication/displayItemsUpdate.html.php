<p><?= $message ?></p>
<fieldset>
    <legend>Update Item</legend>
    <table>
        <tr>
            <th>Item Name</th>
            <th>Item ID</th>
            <th>Price</th>
            <th>Sale Price</th>
            <th>Featured</th>
            <th>Description</th>
            <th>Photo</th>
            <th>Edit</th>

        </tr>
        <?php foreach ($itemRows as $row) :
            //set up the generic image file
            $photo = "images/unavailable.png";
            //check if the image file exists
            if (file_exists("images/" . $row["photo"]) && strlen($row["photo"]) > 0) {
                $photo = "images/" . $row["photo"];
            }
            $itemName = $row["itemName"];
            $itemId = $row["itemId"];
            $price = $row["price"];
            $salePrice = $row["salePrice"];
            $description = $row["description"];
            $categoryId = $row["categoryId"];
            $featured = $row["featured"];

        ?>
            <article class="itemDetails" id="itm<?= $itemId ?>">
                <tr>
                    <td><?= $itemName ?></td>
                    <td><?= $itemId ?></td>
                    <td><?= $price ?></td>
                    <td><?= $salePrice ?></td>
                    <td><?= $featured ?></td>
                    <td><?= $description ?></td>
                    <td><img class="photo" src="<?= $photo ?>" alt="Photo of item"></td>
                    <td><a href="updateProduct.php?id=<?= $itemId ?>#edit">Edit</a></td>
            </article>
            </tr>

        <?php endforeach; ?>

    </table>
</fieldset>


