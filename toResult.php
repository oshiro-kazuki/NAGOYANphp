<?php
  require_once('menu.php');
  require_once('data.php');
  require_once('order.php');
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>CAFE NAGOYAN / tekuout Result</title>
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
          <form>
            <p>ご注文の内容</p>
            <div id="resultForm">
              <?php foreach($menus as $menu): ?>
              <p class="getName"><?php echo $menu->getName() ?></p>
              <p><?php echo $orderCount ?>個</p>
              <p><?php echo $menu->getTotal() ?>円</p>
             <?php endforeach ?>
            </div>
            <p id="total">合計: <?php echo $total ?>円（税込）</p>
            <div>
              <?php
                $order = $_POST["order"];
                $userName = $_POST["userName"];
                $userTell = $_POST["userTell"];
                $userDate = $_POST["userDate"];
              ?>
              <p><?php echo $order ?></p>
              <p>ご注文のお客様：<?php echo $userName ?>　様</p>
              <p>ご連絡先：<?php echo $userTell ?></p>
              <p>お受け取り日時：<?php echo $userDate ?></p>
            </div>
            <div class="resultBtn">
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
  </body>
</html>