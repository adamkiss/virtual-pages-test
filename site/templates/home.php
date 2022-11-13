<h1><?= $page->title() ?></h1>

<ul>
  <?php foreach($page->children() as $product): ?>
    <li><?= $product->title() ?> - <?= $product->uuid() ?></li>
  <?php endforeach; ?>
</ul>