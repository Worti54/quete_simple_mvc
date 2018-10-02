<?php


/**
 * Created by PhpStorm.
 * User: worti
 * Date: 02/10/18
 * Time: 16:42
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> MVC 3 </title>
</head>
<body>
   <main>
    <h1>Item <?= $item['title'] ?></h1>
<ul>
    <li>Id : <?= $item['id'] ?></li>
</ul>
<a href='http://localhost:8000'>Back to list</a>
</main>
</body>
</html>