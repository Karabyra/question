<?php
function getAllArticles():array
{

    return $array = [
        "0" => ['id_article'=>'1','id_category'=>'2','title'=>'test','content'=>' границі регулярки -> последовательность совпадение по символам '],
        "1" => ['id_article'=>'2','id_category'=>'3','title'=>'Німеччині ','content'=>'проверка на существования конкретніх '],
        "2" => ['id_article'=>'3','id_category'=>'4','title'=>'fdffddf','content'=>'иапазон поиска от и до  с верхним риес'],
        "3" => ['id_article'=>'4','id_category'=>'2','title'=>'пандемія ','content'=>'кий міністр нагадала, що, за даними Все'],
        "4" => ['id_article'=>'5','id_category'=>'2','title'=>'продовжує ','content'=>'sdadignignigege'],       
    ];
}
function getArticle():array
{

    return $array = ['id_article'=>'1','id_category'=>'2','title'=>'test','content'=>' границі регулярки -> последовательность совпадение по символам '];

}
