<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link rel="stylesheet" type="text/css" href="responsive.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Café Progate</h1>
    <header>
      <ul class="menu-header">
          <li><a href="#">Home</a></li>
          <li><a href="#">Makanan</a></li>
          <li><a href="#">Minumnan</a></li>
          <li><a href="#">Tentang</a></li>
      </ul>
  </header>
    <form method="post" action="confirm.php">
      <div class="menu-items">
        <?php foreach ($menus as $menu): ?>
          <div class="menu-item">
            <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
            <div class="detail">
            <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
            <p class="price">$<?php echo $menu->getTaxIncludedPrice() ?> (termasuk pajak)</p>
            <span>Qty: </span>
            <input type="text" value="0" name="<?php echo $menu->getName() ?>">
            </div>
          </div>
        <?php endforeach ?>
      </div>
      <input type="submit" value="Pesan">
    </form>
  </div>
</body>
</html>
