<fieldset>

    <legend>Update Category</legend>
    <table>
        <tr>
            <th>Category Name</th>
            <th>Edit</th>
        </tr>
        <?php foreach ($categoryRows as $row) :
            $categoryName = $row["categoryName"];
            $categoryId = $row["categoryId"];
        ?>
            <tr>
                <td><?= $categoryName ?></td>
                <td><a href="updateCategory.php?id=<?= $categoryId ?>">Edit</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

</fieldset>
