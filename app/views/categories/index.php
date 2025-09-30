<!-- Catégories -->
<ul class="menu-link">
    <?php
    include_once '../app/models/categoriesModel.php';
    $categories = \App\Models\CategoriesModel\findAll($db);
    foreach($categories as $category) : ?>
    <li><a href=""><?php echo $category['name']; ?></a></li>
    <?php endforeach; ?>
</ul>