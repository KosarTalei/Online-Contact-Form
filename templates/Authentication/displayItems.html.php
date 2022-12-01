<p><?= $message ?></p>
<fieldset>
        <legend>Delete Item</legend>
<table>
    <tr>
        <th>Item Name</th>
        <th>Item ID</th>
        <th>Price</th>
        <th>Sale Price</th>
        <th>Featured</th>
        <th>Description</th>
        <th>Photo</th>
        <th>Delete</th>

    </tr>
    <?php foreach ($itemRows as $row) :
        //set up the generic image file
        $photo = "images/unavailable.png";
        //check if the image file exists
        if (file_exists("images/" . $row["photo"]) && strlen($row["photo"]) > 0) {
            $photo = "images/" . $row["photo"];
            $photoToDelete = $row["photo"];
        } else {
            $photoToDelete = "none";
        }
        $itemName = $row["itemName"];
        $itemId = $row["itemId"];
        $price = $row["price"];
        $salePrice = $row["salePrice"];
        $description = $row["description"];
        $categoryId = $row["categoryId"];
        $featured = $row["featured"];

    ?>
        <tr>
            <td><?= $itemName ?></td>
            <td><?= $itemId ?></td>
            <td><?= $price ?></td>
            <td><?= $salePrice ?></td>
            <td><?= $featured ?></td>
            <td><?= $description ?></td>
            <td><img class="photo" src="<?= $photo ?>" alt="Photo of item"></td>
            <td>
                <p><a href="deleteItem.php?id=<?= $itemId ?>&photo=<?= $photoToDelete ?>">Delete Item</a></p>
            </td>
        </tr>
    <?php endforeach; ?>
    
</table>
</fieldset>