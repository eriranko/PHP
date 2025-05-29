<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $people = array(
        ["Erina",33,"women"],
        ["Yusuke",43,"men"],
        ["Miwa",27,"women"]
    );
    foreach ($people as $person) {
        echo $person[0] . '(' . $person[1] . '歳)' . $person[2];
        echo '<br />';
    }
    ?>
</body>
</html>