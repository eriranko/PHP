<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $company = htmlspecialchars($_GET['company'], ENT_QUOTES);
    print "会社名は" . $company . "ですね";
    ?>
</body>
</html>