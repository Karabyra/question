	<?php

    $articles = getAllArticles();
    $path = 'v_index';
    $content = render($path,$articles);
    echo $content;
