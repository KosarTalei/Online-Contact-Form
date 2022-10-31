<section class="category-footer">
    <h2>Product categories</h2>
    <ul class="category-footer__items" id="category-footer__items">
        <?php foreach ($rows_category as $row) :

            $categoryName = $row["categoryName"];

        ?>
            <li class="category-footer__item site-nav__item">
                <a class="category__link" href="#"><?=$categoryName?></a>
                <span class="arrow"><i class="fa-solid fa-chevron-right"></i></span>
            </li>
        <?php endforeach; ?>
    </ul>
</section>