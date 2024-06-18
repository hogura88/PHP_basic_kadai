<?php
$name = $_POST['user_name'];
$email = $_POST['user_email'];
$gender = $_POST['user_gender'];
$category = $_POST['category'];
$message = $_POST['message'];

$errors = [];
if (empty($name)) {
    $errors[] = 'お名前を入力してください。';
}
if (empty($email)) {
    $errors[] = 'メールアドレスを入力してください。';
} elseif (!filter_var( $email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'メールアドレスの入力形式が正しくありません。';
}
if (empty($message)) {
    $errors[] = 'お問い合わせ内容を入力してください。';
} elseif (mb_strlen($message) > 100) {
    $errors[] = 'お問い合わせ内容が100文字を超えています。';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎講座(復習)</title>
</head>
<body>
    <h2>入力内容をご確認ください。</h2>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
    <table border="1">
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <th>お名前</th>
            <th><?php echo $name; ?></th>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <th><?php echo $email; ?></th>
        </tr>
        <tr>
            <th>性別</th>
            <th><?php echo $gender; ?></th>
        </tr>
        <tr>
            <th>お問い合わせ種別</th>
            <th><?php echo $category; ?></th>
        </tr>
        <tr>
            <th><お問い合わせ内容/th>
            <th><?php echo $message; ?></th>
        </tr>
    </table>

    <p>
        <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
        <button id="cancel-btn" onclick="history.back();">キャンセル</button>
    </p>
    <?php
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo '<font color="red">' . $error . '</font>'.'<br>';
        }
        echo '<script> document.getElementId("confirm-btn").disable = true; </script>';
    }
    ?>
</body>
</html>