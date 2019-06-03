<?php foreach ($myposts as $post):?>
<h2><?= $post ['title']; ?></h2> <!-- обрабатываем переменную $myposts -->
<p><?= $post ['content']; ?></p>
<img src="/uploads/<?= $post ['image'];?>" width="50">
<?php endforeach; ?>