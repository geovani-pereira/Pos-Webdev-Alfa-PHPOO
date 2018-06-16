<?php 

//recebendo classe Usuario.php em c:/xampp
require '../../class/Admin.php';
require_once '../../class/Usuario.php'; //require_once só traz uma vez, se ja tiver Usuario ele não traz.


//instanciando novo objeto usuario
$u = new Usuario('galvao@galvao.eti.br', '1234');

$a = new Admin('geovanimac@hotmail.com',  '12345', 2356);





//Usuario::log('Teste');

/*declarando função anonima
$f = function (){
	echo 'oi';
};

$f();  chamando função anonimma


function x($p){
	return $p +1;

}

$a = [1,2,3];

$a = array_map('x',$a);
*/


$o = new class(2){

	public $x;
	public $y;

	public function  __construct($z)
	{
		$this->x = 3;
		$this->y = $z;
	}
};


$x = serialize($u);
 var_dump($x); // transforma objeto em texto

 $u2 = unserialize($x, ['allowed_classes' =>[  'Usuario', 'Admin']]);


 var_dump($u2); // refaze o objeto

//Instanciando novo objeto usuario sem passar parametro para o construtor
//$u = new Usuario();
//$u->email = 'galvao@galvao.eti.br';
//$u->senha = '1234';

//if ($u->autenticar()){
//	echo "Ok!<hr>";
//}

//var_dump($a);
//var_dump($u);
