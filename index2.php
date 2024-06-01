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
        echo '<br>';
        $my_name = 'になとこ';
        echo "私の名前は{$my_name}です。";
        echo '<br>';
        $user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];
        print_r($user_names);
        echo '<br>';
        $personal_data = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性'];
        print_r($personal_data);
        echo '<br>';
        $personal_data['age'] = 37;
        $personal_data['address'] = '東京都';
        print_r($personal_data);
        echo '<br>';
        echo $personal_data['gender'];
        echo '<br>';
        $num = mt_round(0,4);
        echo $num;
        echo '<br>';
        if ($num === 4) {
            echo '大当たりです';
        } elseif ($num === 3) {
            echo '当たりです';
        } else {
            echo 'はずれです';
        }
        echo '<br>';
        $num = 20;
        if ($num > 10 && $num > 30) {
            echo '変数$numは10より大きく30より小さいです';
        } else {
            echo '条件が成り立ちませんでした';
        }
        echo '<br>';
        $num = 30;
        if ($num === 10 || $num === 30) {
            echo '変数$numは10または30です';
        } else {
            echo '条件が成り立ちませんでした';
        }



        ?>
    
     </p>
 </body>
 
 </html>