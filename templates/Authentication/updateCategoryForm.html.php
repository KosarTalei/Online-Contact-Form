<?php
if (count($rows) > 0) :
    $row = $rows[0];
?>
    <form action="updateCategory.php" method="post">
        <fieldset>
            <legend>Update Categories</legend>
            <p>
                <label for="categoryName">Category Name:</label>
                <input type="text" name="categoryName" id="categoryName" required value="<?=$row["categoryName"] ?>">
            </p>
            <input type="hidden" value="<?= $row["categoryId"] ?> " name="categoryId"/>
            <p><input type="submit" name="submit" value="Update Category"/></p>
        </fieldset>
    </form>
    <p><?= $message ?></p>
<?php else :
?>
    <p>No category was supplied</p>
<?php endif; ?>