<?php 

/*print_r($_POST);*/

$arquivo = fopen('arquivo.hd','a');

$categoria = str_replace('#','-',$_POST['categoria']);
$descricao = str_replace('#','-',$_POST['descricao']);
$titulo=str_replace('#','-',$_POST['titulo']);

$texto = $categoria . '#'. $descricao . '#'. $titulo. PHP_EOL;
fwrite($arquivo, $texto);


/*echo $texto;*/


?>