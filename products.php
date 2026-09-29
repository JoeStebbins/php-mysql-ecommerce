<?php
require __DIR__.'/includes/bootstrap.php';
$products=$pdo->query('SELECT p.id,p.name,p.description,p.price,c.name category FROM products p LEFT JOIN categories c ON c.id=p.category_id WHERE p.active=1 ORDER BY p.name')->fetchAll();
$pageTitle='Products';require __DIR__.'/includes/header.php';?><h1>Products</h1><div class="grid"><?php foreach($products as $p):?><article class="card"><small><?=e($p['category'])?></small><h2><?=e($p['name'])?></h2><p><?=e($p['description'])?></p><strong>$<?=number_format((float)$p['price'],2)?></strong><a href="/product.php?id=<?=(int)$p['id']?>">View product</a></article><?php endforeach;?></div><?php require __DIR__.'/includes/footer.php';?>
