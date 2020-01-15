<?php

//incluindo o arquivo com a funcao somar

//include "incfunc/exerc01.php";

//require "incfunc/exerc01.php";

//require_once traga uma vez
require_once "incfunc/exerc01.php";

//diferenca entre include e require

// require obriga que o arquivo exista e funcione corretamente se não funcionar gera um erro uma exceção

// include não obriga nenhum dos dois e tenta funcionar mesmo assim o include possui mais recursos possuindo o diretorio include path que permite que o include traga arquivos de la

//include remoto e perigoso

$resultado = somar(50, 100);


echo $resultado;




?>