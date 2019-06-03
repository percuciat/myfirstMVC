<?php
$pdo = new PDO("mysql:host=localhost; dbname=pdo; charset=utf8", 'root', '');
// query() выполяет запрос pdo
//fetchAll () вывод всех данных fetch - вывод одного пользователя
// PDO :: FETCH_ASSOC - вывод ассоциативного массива

$sql='SELECT * FROM pdo'; // название таблицы БД

$statement=$pdo->query($sql);

$pdo = $statement->fetchAll(PDO::FETCH_ASSOC);




class Hody {
    public function a(){
        echo 'function a ';
        $this->c();
    }
    public static function b(){
        echo ' funcion b'.'</br>';
    }
    public function c(){
        echo 'function c';
    }
}

$new = new Hody; // вызывается все с указанием метода
$new->a();

Hody::b(); // вызывается только статичная функция, без $this
?>

<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
</head>
<body>
<p> Название<?php foreach ($pdo as $item):?></p>
    <h1><?php echo $item['name'].'</br>'?></h1>
<h2><?php echo $item['email']. '</br>'; ?></h2>
<?php endforeach;?>



<?php
$map = new PDO("mysql:host=localhost; dbname=pdo2", 'root', '');
$sql='SELECT * FROM pdo2';
$statement=$map->query($sql);
$map=$statement->fetchAll(PDO::FETCH_ASSOC); ?>
<?php
foreach ($map as $item):
?>
<h1><?php echo $item['title']?></h1>
<h2><?php echo $item['content']?></h2>
<?php endforeach; ?>

</body>
</html>