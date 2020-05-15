<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>お問い合わせフォーム</title>
</head>
<body>
<form action="thanks.php" method="post">

    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $content = $_POST['content'];
    ?>

    <h1>お問い合わせフォーム</h1>

<p>★<strong>お名前</strong></p>
    <?php if ($name == ''): ?> 
    <p class='error'>※お名前が入力されていません</p>
    <br>
    <?php else: ?>
    <?php
    print $name;
    print '<br>';
    ?>
    <?php endif; ?> 


<p>★<strong>メールアドレス</strong></p>
    <?php if ($email == ''): ?> 
    <p class="error">※メールアドレスが入力されていません</p>
    <br>
    <?php else: ?>
    <?php
    print $email;
    print '<br>';
    ?>
    <?php endif; ?> 

    <p>★<strong>お問い合わせ内容</strong></p>
    <?php if ($content == ''): ?> 
    <p class='error'>※お問い合わせ内容が入力されていません</p>
    <br>
    <?php else: ?>
    <?php
    print $content;
    print '<br>';
    ?>
    <?php endif; ?> 

    <br><input type="button" value="戻る" onClick="history.back()" style="font-size: 100%">
    |
    <?php if ($name !=='' & $email !=='' & $content !== ''): ?>
    <input type="submit" value="送信する" style="font-size: 100%">   
    <?php endif; ?>

</form>
</body>
</html>