<?php
require 'Post.php';
$filename= uploadImage($_FILES['image']); // картинка идет в файл uploads
addPost($_POST['title'], $_POST['content'], $filename);
header("location:hello.php");