<?php

require_once 'inc/function.php';
require 'inc/variables.php';
?>

<html>
    <head>
        <title><?php echo $title ;?></title>
    </head>
    <body>
        <h1><?php echo $title ?></h1>
        <?php para_print($description); ?>
        <p style="font-size: 12px;font-weight:bold;"><?php echo $author ?></p>
    </body>
</html>