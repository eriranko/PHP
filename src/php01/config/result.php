<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $my_name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $choice = htmlspecialchars($_POST['choice'], ENT_QUOTES);
    $number = htmlspecialchars($_POST['number'], ENT_QUOTES);
    print "私の名前は" . $my_name;
    print "ご注文の商品は" . $choice;
    print "注文数は" . $number;
    ?>
</body>
</html>