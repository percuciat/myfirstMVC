<?php
function uploadImage($image)
{
    $extension= pathinfo($image['name'], PATHINFO_EXTENSION); // название расширения
    $filename = uniqid().'.'. $extension; // кодировка случайного имени файла

    move_uploaded_file($image['tmp_name'], "uploads/". $filename);
    return $filename;
}
function addPost($title, $content, $filename)
{
    $pdo = new PDO("mysql:host=localhost; dbname=myposts", "root", "");
    $sql = "INSERT INTO myposts (title, content, image) VALUES (:title, :content, :image)";
    $statement= $pdo->prepare($sql);
    $values=['title'=>$title,'content'=>$content,'image'=>$filename];
    $statement ->execute($values);
}

function getPosts (){
    $pdo = new PDO("mysql:host=localhost; dbname=myposts", "root", "");
    $statement= $pdo->prepare("SELECT * FROM myposts");
    $statement ->execute();
    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $posts;
}