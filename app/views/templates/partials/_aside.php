<div class="bg-gray-700 rounded-lg shadow-lg p-4">
  <?php include_once '../app/views/templates/partials/_search.php'; ?>
  <h2 class="font-bold text-lg mb-4">Categories</h2>
  <ul class="list-reset">
    <?php
    include_once '../app/models/categoriesModel.php';
    $categories = \app\models\categoriesModel\findAll($connexion);
    foreach ($categories as $category) : ?>
      <li>
        <a class="text-gray-300 hover:text-white" href="#"><?php echo $category['name']; ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
<div class="bg-gray-700 rounded-lg shadow-lg p-4 mt-4">
  <h2 class="font-bold text-lg mb-4">Tags</h2>
  <div class="tag-cloud">
    <a class="text-gray-300 hover:text-white text-sm" href="#">Action</a>
    <a class="text-gray-300 hover:text-white text-md" href="#">Comédie</a>
    <a class="text-gray-300 hover:text-white text-lg" href="#">Drame</a>
    <a class="text-gray-300 hover:text-white text-xl" href="#">Science-fiction</a>
  </div>
</div>