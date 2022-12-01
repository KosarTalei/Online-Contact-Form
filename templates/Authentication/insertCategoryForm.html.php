<form action="insertCategory.php" method="post">
    <fieldset>
        <legend>Add a new category</legend>
        <p>
            <label for="categoryName">Category Name:</label>
            <input type="text" name="categoryName" id="categoryName" required>
        </p>
        <p><input type="submit" name="submit" value="Insert Category"></p>
    </fieldset>
</form>
<p><?= $message ?></p>