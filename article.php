<?php

  



// 1- Chargement des fichiers définissants les classes
require __DIR__.'/inc/classes/Article.php';
require __DIR__.'/inc/classes/Category.php';
require __DIR__.'/inc/classes/Author.php';
// 2- Chargement des données
require __DIR__.'/inc/data.php';


foreach ($dataArticlesList as $index => $value){
$article = $dataArticlesList[$index];
$article->title;          
$article->content;
}

$id= 0;
    
if ( isset($_GET['id']) ) {
    if( $_GET['id'] >= 0 && $_GET['id'] < count($dataArticlesList) +1 ) {
    $id = intval($_GET['id']);
    }
}
  $article = $dataArticlesList[$id];



require __DIR__.'/inc/templates/Header.php';
require __DIR__.'/inc/templates/ArticlesTemplates.php';
require __DIR__.'/inc/templates/Footer.php';


