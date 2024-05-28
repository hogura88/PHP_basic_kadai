<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>この文章はHTMLで出力しています。</p>
     <p>
        <?php
        echo'この文章はPHPで出力しています。';

        echo 45 + 18;
        echo '<br>';
        echo 30 - 12;
        echo '<br>';
        echo 15 * 6;
        echo '<br>';
        echo 30 / 3;
        echo '<br>';
        echo 45 % 8;
        echo '<br>';

        $user_name = '侍太郎';
        echo $user_name;
        echo '<br>';
        $user_name = '侍花子';
        echo $user_name;

        $number = 3;
        echo $number - 1.2;
        echo '<br>';
        $my_name = '侍一郎';
        echo '私の名前は' . $my_name . 'です。';

        ?>
    
     </p>
 </body>
 
 </html>