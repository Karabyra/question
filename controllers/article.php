<?php
$id = ($_GET['id'] ?? '');
$article = getArticle($id);

    $path = 'v_article';
    $content = render($path,$article);
    echo $content;
