<nav class="category">
    <ul class="category__items" id="category__items">
        <?php foreach ($rows_category as $row) :
            $id = $row["categoryId"];
            $categoryName = $row["categoryName"];

        ?>
            <li class="category__item">
                <a class="category__link" href="/DeliverableC/productsByCategory.php?id=<?= $id ?>"><?= $categoryName ?></a>
                <span class="arrow"><i class="fa-solid fa-chevron-right"></i></span>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>