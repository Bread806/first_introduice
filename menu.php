<html>

<head>
  <meta charset="utf-8">
  <title>Yoasobi_Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
  <script src="background.js"></script>
  <style>
    @import"menu_style.css";
  </style>
</head>

<body>
  <canvas id="canvas"></canvas>
      <nav>
        <ul class="flex-nav">
          <li><a href="index.html">home</a></li>
          <li><a href="songs.html">songs</a></li>
          <li><a href="menu.php">about</a></li>
        </ul>
      </nav>

    <div>
      <!-- <img class="img_whole" src="" alt=""> -->
      <div class="demo-content">
        <a href="index.html" style="text-decoration:none;color: black;">
          <h1 style="text-align: center; font-size: 100px; font-family: fantasy;">Yoasobi</h1>
        </a>
      </div>

      <header style=" background-color:rgba(206, 190, 190, 0.513)">
        <h2>各項介紹</h2>
      </header>
      <div class="row" style="margin-left: 25%;margin-right: 25%;">
        <!-- <div class="col-3"></div> -->
        <div class="col-4"
          style="background-color:rgba(90, 51, 51, 0.513);text-align: center; line-height: 3; font-size: 30px;">
          <a href="lately.html" style="color:snow ">近期新聞</a><br>
          <a href="songs.html" style="color:snow ">現有歌曲</a>
        </div>

        <div class="col-8" style="background-color:rgba(44, 9, 9, 0.513); color:aqua;line-height: 2;">
          <h3 style="color:bisque;margin-top: 10px;">個人看法</h3>
          <p>Yoasobi是我目前最喜歡的音樂組合之一，也是引領日本流行音樂的團體。其特色是將小說的內容與場景寫進自己的歌曲當中，這當中我最喜歡的歌曲是「たぶん」。</p>
          <p>這首歌訴說著愛情走到了盡頭，兩人正在探討著為什麼感情會落到如此地步，而他們都不知道誰犯了錯，或許只是兩個人不是天作之合罷了，從困惑轉變成釋懷的心情。</p>
        </div>
        <!-- <div class="col-3"></div> -->
      </div>
      <footer style="background-color:rgba(206, 190, 190, 0.342);font-size: 10px;text-align:center;line-height: 12px;">
        <div>This website is create by.Bread806</div>
        <a style="color:palegreen;margin-right: 5px;" href="https://discord.com/api/oauth2/authorize?client_id=838845267045384203&permissions=292058195968&scope=bot">discord bot</a>
        <a style="color:palegreen;" href="https://hackmd.io/?nav=overview">Bread806 blog</a>
      </footer>

    </div>
	
<?php
// 建立MySQL的資料庫連接 
$link = @mysqli_connect( 
            'us-cdbr-east-04.cleardb.com',  // MySQL主機名稱 
            'b33535106a6db3',       // 使用者名稱 
            'b0dfd127',  // 密碼 
            'heroku_d20f5ec8b2ab248');  
if ( !$link ) {
   echo "MySQL資料庫連接錯誤!<br/>";
   exit();
}
else {
   echo "與45Pdatabase連線成功<br/>";
   echo "目前連線伺服器數量:6"
}
mysqli_close($link);  // 關閉資料庫連接
?>


</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"
  integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
