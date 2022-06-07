
<?php
$title = 'hello';
$content = '';

include("view/main/v_header.php");

    include ('setting.php');
    $cname = $_GET['c'] ?? 'index';
    $path = "controllers/$cname.php";
    include_once("$path");

include("view/main/v_footer.php");