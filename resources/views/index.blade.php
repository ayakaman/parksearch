<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>今日はなにしようかな？</title>
        <link rel="stylesheet" type="text/css" href="/css/top.css">

    </head>
    <body>

      <div class="main">
        <p>今日は何をして過ごそうかな・・・
          <br>そうだ！</p>
        <div class="main-button">
          <button id="button" class="button">！クリック！</button>
          <p id="result"></p>
        </div>
      </div>
      <script>
      window.onload = function () {
        const list = ["買い物をしよう！","今日は１日中ゴロゴロするぞー！","公園行くかっ","掃除したるで！！","テレビ見たいのないかな？",
        　　　　　　　　　　　　"外食とかどう？","やっぱ食べるに限る！","おいしそうな料理にでも挑戦するか","プラーっと出かけてみようかな","ヨガとかしてみる？"];

    document.getElementById("button").onclick = function () {
      var random = Math.floor(Math.random() * list.length);
      document.getElementById("result").textContent = list[random];
    }
  }
      </script>
    </body>
</html>