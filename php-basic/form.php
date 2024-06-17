<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset=""UTF-8>
    <title>PHP基礎講座</title>
</head>

<body>
    <h2>お問い合わせ</h2>
    <form action="confirm.php" method="post">
        <table>
            <tr>
                <td>お名前</td>
                <td>
                    <input type="text" name="user_name">
                </td>
            </tr>
            <tr>
                <td>メールアドレス</td>
                <td>
                    <input type="text" name="user_email">
                </td>
            </tr>
            <tr>
                <td>性別</td>
                <td>
                    <input type="radio" name="user_gender" value="男性" checked>男性
                </td>
            </tr>
        </table>
    </form>
</body>