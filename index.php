<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>お問い合わせフォーム</title>
</head>
<body>
    <form action="check.php" method="post">
        <h1>お問い合わせフォーム</h1>
        <p>★お名前  <span>※必須</span></p>
        <input type="text" name="name" style="font-size: 100%">
        <p>★メールアドレス  <span>※必須</span></p>
        <input type="email" name="email" style="font-size: 100%">
        <p>★お問い合わせ内容  <span>※必須</span></p>
        <textarea name="content" cols="60" rows="10" style="font-size: 100%"></textarea><br>
        <input type="submit" value="送信する" style="font-size: 100%">        
    </form>
</body>
</html>