<?php
  require_once('menu.php');
  require_once('data.php');
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>CAFE NAGOYAN  / takeout</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper">
      <header>
        <a href="index.php"><img src="images/logo.JPG" class="headerLogo"></a>
        <nav id="pcInfo"></nav>
        <nav id="mfInfo">･･･</nav>
        <nav id="mfInfoClose" class="hidden">✕</nav>
      </header>
  
      <div id="mask" class="hidden"></div>
  
      <div id="infoModal" class="hidden"></div>
  
      <main>
        <div class="takeout-wrapper">
          <div class="takeout-text">
            <h1>たくさんのご要望をいただいたのでテイクアウト始めました。</h1>
          </div>
          <!-- <form method="POST"> -->
          <form method="POST" action="order.php">
            <div id="toItems">
              <?php foreach($menus as $menu): ?>
              <div class="toItem">
                <p class="toP" name="name"><?php echo $menu->getName() ?></p>
                <img src="<?php echo $menu->getImage() ?>" class="toImage">
                <p class="toP">￥　<?php echo $menu->getPrice() ?> (税込)</p>
                <input 
                  type="number" 
                  min="0" 
                  value="0" 
                  class="toCount" 
                  name="<?php echo $menu->getName() ?>"
                >個                
              </div>
              <?php endforeach ?>
            </div>
            <!-- <div id="totalPrice"></div> -->
            <div id="order">
              <input type="submit" value="ご確認">
            </div>
          </form>
        </div>
      </main>

      <!-- <section>
        <div id="result">
          <form>
            <p>ご注文の確認</p>
            <div id="resultForm">
              <?php foreach($menus as $menu): ?>
                <?php 
                  $orderCount = $_POST[$menu->getName()];
                  $menu->setOrderCount($orderCount);
                  $total += $menu->getTotal();
                ?>
              <p class="getName"><?php echo $menu->getName() ?></p>
              <p><?php echo $orderCount ?>個</p>
              <p><?php echo $menu->getTotal() ?>円</p>
             <?php endforeach ?>
            </div>
            <p id="total">合計　￥<?php echo $total ?>円（税込）</p>
            <input type="submit" value="ご注文">
            <input type="reset" value="訂正">
          </form>
        </div>
      </section> -->

      <div id="home">
        <a href="index.php">トップへ</a>
      </div>
  
      <footer>     
        <div>CAFE NAGOYAN
          <span class="footerPoint">.</span>
        </div>
      </footer>
    </div>
    <script src="public.js"></script>
    <!-- <script src="takeout.js"></script> -->
    <!-- <script src="Take.js"></script> -->
    <!-- <script src="Take copy.js"></script> -->
  </body>
</html>
