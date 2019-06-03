<?php
require "Post.php"; // подключение к модели

$myposts=getPosts(); // используем модель и выдаем переменную $myposts

include "views/show.php"; // обрабатываем переменую $myposts
?>

<h1><a href="create.php">make post</a></h1>
