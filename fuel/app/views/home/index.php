<?php foreach($products as $product) : ?>
		<h2><?= $product->title ?></h2>
		<img src="assets/img/products/<?= $product->image?>"></img>
<?php endforeach ?>