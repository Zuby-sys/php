
<?php
include_once "table.php"
?>
<!DOCTYPE HTML>
<html>
    <head>
        <link href="style.css" rel="stylesheet">
        <title>Новостянка</title>
    </head>
    <body>
        <h1>Текущие новости в поварёнок</h1>
        <?php
		gen_table();
        ?>
    </body>
</html>