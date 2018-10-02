<?php
/**
 * Created by PhpStorm.
 * User: worti
 * Date: 02/10/18
 * Time: 17:39
 */?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> MVC 3 </title>
</head>
<body>
<section>
    <h1>Categories</h1>
    <ul>
        <?php foreach ($categories as $category) : ?>
            <li><?= $category['name'] ?></li>
        <?php endforeach ?>
    </ul>

</section>
</body>
</html>