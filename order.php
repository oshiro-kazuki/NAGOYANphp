<?php
  require_once('menu.php');
  require_once('data.php');
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>CAFE NAGOYAN / order</title>
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
        <div id="result">
          <form method="POST" action="toResult.php">
            <p>ご注文の確認</p>
            <div id="resultForm">
              <?php foreach($menus as $menu): ?>
                <?php 
                  $orderCount = $_POST[$menu->getName()];
                  $menu->setOrderCount($orderCount);
                  $total += $menu->getTotal();
                ?>
                
                <?php if($orderCount >= 1) { ?>
                  <p><?php echo $menu->getName(); ?>: <?php echo $orderCount; ?>個: <?php echo $menu->getTotal(); ?>円</p>
                <?php } ?>  
              <?php endforeach ?>
            </div>

            <p id="total">合計: <?php echo $total ?>円（税込）</p>

            <div class="userContent">
              <p>注文内容が宜しければお名前、ご連絡先、お受け取り日時をご入力いただき、ご注文ボタンをクリックしてください</p>
              <input type="text" name="userName" placeholder="お名前">
              <input type="text" name="userTell" placeholder="ご連絡先">
              <input type="datetime-local" name="userDate" placeholder="お名前の入力ください">
            </div>

            <div class="resultBtn">
              <input type="submit" value="ご注文" onClick="">
              <a href="takeout.php">戻る</a>
            </div>
          </form>
        </div>
      </main>

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
    <script src="order.js"></script>
  </body>
</html>

