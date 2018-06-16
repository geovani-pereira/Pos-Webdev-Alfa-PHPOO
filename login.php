<?php 

//recebendo classe Usuario.php
require '../../class/Usuario.php';

//instanciando novo objeto usuario
$u = new Usuario('galvao@galvao.eti.br', '1234');


//Instanciando novo objeto usuario sem passar parametro para o construtor
//$u = new Usuario();
//$u->email = 'galvao@galvao.eti.br';
//$u->senha = '1234';

if ($u->autenticar()){
	echo "Ok!<hr>";
}

var_dump($u);
