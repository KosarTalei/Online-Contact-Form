<form action="deleteCategory.php?id=<?= $categoryId ?>" method="post">
    <fieldset>
        <legend>Delete a category</legend>
        <p>
            <label for="categoryName">Category Name:</label>
            <input type="text" name="categoryName" id="categoryName" required>
        </p>
        <p><input type="submit" name="submit" value="Delete Category"></p>
    </fieldset>
</form>
<p><?= $message ?></p>