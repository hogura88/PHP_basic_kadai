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
        $num = mt_rand(0,4);
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
        echo '<br>';
        ?>
        </p>

        <p>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo $i . '<br>';
        }
        ?>
        </p>
        <p>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                $num = mt_rand(1, 20);
                echo "{$i}回目の結果は{$num}です。<br>";
                if ($num === 20) {
                    echo '20が出たので繰り返し処理を強制終了します。';
                    break;
                }
            }
            ?>
            </p>
            <p>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    if ($i % 2 === 1) {
                        continue;
                    }
                    echo $i . '<br>';
                }
                ?>
            </p>
<p>
    <?php
    $num = mt_rand(0, 4);
    $i = 1;
    echo"最初の値は{$num}です。<br>";
    while ($num !== 0) {
        $num = mt_rand(0, 4);
        echo "現在の値は{$num}です。<br>";
        if ($i === 5) {
            echo '5回目なので繰り返し処理を強制終了します。';
            break;
        }
        $i++;
    }
    ?>
</p>
<p>
    <?php
    $sum = 0;
    while ($sum < 20) {
        $num = mt_rand(1, 10);
        echo "{$num}が出ました。<br>";
        if ($num % 2 === 0) {
            echo '偶数なので加算しません。<br>';
            continue;
        }
        $sum += $num;
        echo "現在の合計は{$sum}です。<br>";
    }
    ?>
</p>

<p>
         <?php
         $user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];
         foreach ($user_names as $user_name) {
            echo $user_name . '<br>';
         }
         ?>
</p>
<p>
         <?php
         $personal_data = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性'];
         foreach ($personal_data as $key => $value) {
            echo "{$key}は{$value}です。<br>";
         }
         foreach ($personal_data as $value) {
            echo $value . '<br>';
         }
         ?>
</p>
<p>出身地を選択してください。</p>
     <form>
         <select>
             <?php
             $birthplaces = [
                '北海道地方',
                '東北地方',
                '関東地方',
                '中部地方',
                '近畿地方',
                '中国・四国地方',
                '九州地方'
             ];

             foreach ($birthplaces as $birthplace) {
                echo "<option>{$birthplace}</option>";
             }
             ?>
             </select>
            </form>
            <p>
                <?php
                $user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];
                $target = '侍二郎';
                foreach ($user_names as $user_name) {
                    echo $user_name . '<br>';

                    if ($user_name === $target) {
                        echo "{$target}さんが見つかったので、繰り返し処理を強制終了します。";
                        break;
                    }
                }
                ?>
            </p>
    <p>
        <?php
        $score = [
            '国語' => 80,
             '数学' => 55,
             '理科' => 70,
             '社会' => 85,
             '英語' => 60
        ];
        echo '合格した科目は以下のとおりです。<br>';

        foreach ($score as $key => $value) {
            if ($value < 70) {
                continue;
            }
            echo "{$key}：{$value}点<br>";
        }
            echo 'この文章は石垣島空港でスマホから編集しています。<br>';
        ?>
    </p>

    <p>
        <?php
        function say_good_morning() {
            echo 'おはようございます！<br>';
             echo '昨日はよく眠れましたか？<br>';
             echo '今日も一日頑張りましょう！<br>';
        }

        function say_good_evening() {
            echo 'こんばんは！<br>';
             echo '今日も一日お疲れさまでした。<br>';
        }

        say_good_morning();

        say_good_evening();
        ?>
    </p>
    <P>
        <?php
        function calculate_total($price) {
            $total = $price + 500;
            echo $total . '円<br>';
        }

        calculate_total(1200);

        function add_two_arguments($price, $shipping_fee) {
            $total = $price + $shipping_fee;
            echo $total . '円<br>';
        }
        add_two_arguments(1200, 500);
        ?>
    </p>
    <p>
        <?php
        function double($num) {
            return $num * 2;
        }
        echo double(30);

        function doub($nu) {
            $second = $nu * 2;
            echo $second;
        }
        doub(30);
        ?>
    </p>
    <p>
        <?php 
        class Product {
            public $name;

            public function set_name(string $name) {
                $this->name = $name;
            }
            public function show_name() {
                echo $this->name . '<br>';
            }
        }

        $coffee = new Product();
        $coffee->set_name('コーヒー');
        $coffee->show_name();

        $shampoo = new Product();
        $shampoo->name = 'シャンプー';
        echo $shampoo->name;
        ?>
    </p>

    <p>
        <?php
        class User {
            private $name;
            private $age;
            private $gender;

            public function __construct(string $name, int $age, string $gender) {
                $this->name = $name;
                $this->age = $age;
                $this->gender = $gender;
            }
        }

        $user = new User('侍太郎', 36, '男性');
        print_r($user);
        ?>
    </p>
    <p>
        <?php
        class Product {
            private $name;

            public function set_name(string $name) {
                $this->name = $name;
            }
            public function show_name() {
                echo $this->name . '<br>';
            }
        }
        $coffee = new Product();
        $coffee->set_name('コーヒー');
        $coffee->show_name();


        $shampoo = new Product();
        $shampoo->name = 'シャンプー';
        echo $shampoo->name;
        ?>
    </p>
    <p>
        <?php
        class Product {
            public $name;

            public function set_name(string $name) {
                $this->name = $name;
            }
            public function show_name() {
                echo $this->name . '<br>';
            }
        }
        $coffee = new Product();
        $coffee->set_name('コーヒー');
        $coffee->show_name();
        ?>
    </p>
 

 </body>
 
 </html>