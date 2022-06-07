<?php
include('model/db.php');

function dump($item)
{
    echo "<pre>";
    print_r($item);
    echo "<pre>";
    exit;
}
function render(string $path, array $array = []):string
    {
       
        $articles = $array;
        $article = $array;
        $fullPath = "view/$path.php";   
        extract($array);
        ob_start();
        include($fullPath); 
        return ob_get_clean();
   
    }