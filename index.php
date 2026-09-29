<?php
require __DIR__.'/includes/bootstrap.php';
$products=$pdo->query('SELECT id,name,description,price FROM products WHERE active=1 ORDER BY id DESC LIMIT 3')->fetchAll();
$pageTitle='Custom PHP/MySQL E-Commerce Demo';require __DIR__.'/includes/header.php';?>
<section class="hero"><p class="eyebrow">Custom PHP/MySQL</p><h1>E-Commerce Portfolio Demonstration</h1><p>A lightweight storefront demonstrating database-driven products, secure accounts, cart and order workflows, and responsive front-end development.</p><a class="button" href="/products.php">Browse Products</a></section><h2>Featured Products</h2><div class="grid"><?php foreach($products as $p):?><article class="card"><h3><?=e($p['name'])?></h3><p><?=e($p['description'])?></p><strong>$<?=number_format((float)$p['price'],2)?></strong><a href="/product.php?id=<?=(int)$p['id']?>">View product</a></article><?php endforeach;?></div><?php require __DIR__.'/includes/footer.php';?>
