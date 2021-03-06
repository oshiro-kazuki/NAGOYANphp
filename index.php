<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>CAFE NAGOYAN</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper">
      <header>
        <a href="index.php"><img src="images/yagi.JPG" class="headerLogo"></a>
        <div id="pcInfo"></div>
        <nav id="mfInfo">･･･</nav>
        <nav id="mfInfoClose" class="hidden">✕</nav>
      </header>
      
      <div id="mask" class="hidden"></div>
      
      <div id="infoModal" class="hidden"></div>
      
      <div class="topImgs">
        <div><img src="images/top.JPG" id="topImg"></div>
      </div>
      
      <div id="aboutBtn">NAGOYAN<br>について</div>

      <main>
        <div class="news-wrapper">
          <div id="news">
            <h3>News</h3>
            <p>営業再開しました！</p>
          </div>
        </div>

        <div id="about" class="hidden">
          <img src="images/yagi.JPG" alt="お店の画像">
          <div class="abount-text">
            <p>ドリンクは厳選した〜ドリンクは厳選した〜ドリンクは厳選した〜ドリンクは厳選した〜<br>
            料理は安全で安心の〜料理は安全で安心の〜料理は安全で安心の〜料理は安全で安心の〜<br>
            是非お越しください♪
            </p>
          </div>
          <p id="aboutClose">close</p>
        </div>

        <div class="content-wrapper" id="contents">
          <!-- <a href="#" class="content">
            <p>food</p>
            <img src="images/food5.JPG">
          </a>       -->
        </div>
      </main>
      
      <nav  class="navi">
        <ul>
          <li><span>CAFE NAGOYAN</span></li>
          <li><span>098-000-0000</span></li>
          <li><span>沖縄県名護市名古屋758</span></li>
          <li><span>10:00~20:00</span></li>
        </ul>
      </nav>
      
      <div class="sns">
        <div class="sns-btn">
          <a href="#" class="facebook"><img src="images/facebook.logo.PNG"></a>
          <a href="#" class="instagram"><img src="images/instagram.logo.PNG"></a>
        </div>
      </div>
      
      <footer>
        <div>CAFE NAGOYAN<span class="footerPoint">.</span></div>
      </footer>
    </div> 
    <script src="index.js"></script>
    <script src="public.js"></script>
  </body>
  </html>