<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $people = "Saburo";
    switch ($people) {
        case "Taro":
            echo "太郎です";
            break;
        case "Jiro":
            echo "次郎です";
            break;
        case "Saburo":
            echo "三郎です";
            break;
    }
    echo "<br />";
    $a = 7;
    $result = ($a == 7) ? "TRUE" : "FALSE";
    echo $result;
    ?>
</body>
</html>