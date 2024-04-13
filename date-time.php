<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         // 使用するデフォルトのタイムゾーンを指定する
         date_default_timezone_set('Asia/Tokyo');
 
         // 現在の日時を指定したフォーマットで出力する
         echo date('Y年n月j日H時i分s秒') . '<br>';

         echo strtotime('+1 week') . '<br>'
         ?>
     </p>
     <p>
         <?php
         // おみくじの結果を入れた配列$omikujiを作成する
         $omikuji = ['大吉', '中吉', '小吉', '吉', '末吉', '凶', '大凶'];
 
         // 変数$keyにランダムな配列のキー（インデックス）を代入する
         $key = array_rand($omikuji);
 
         // 取得した配列のキー（インデックス）を使ってその値を取得し、変数$resultに代入する
         $result = $omikuji[$key];
 
         // おみくじの結果を出力する
         echo "おみくじの結果は{$result}です。";
         ?>
     </p>
     <p>
        <?php
        class Product {
            public $color;
            public $name;
        }

        $shampoo = new Product();

        $shampoo->color = 'ピンク';
        $shampoo->name = 'シャンプー';

        echo $shampoo->color;
        echo $shampoo->name;
        ?>
    </p>
 </body>
 
 </html>