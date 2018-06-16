<?php declare (strict_types = 1); //checagem de tipos seja estrita , se passar o de dado errado  int onde é string ou string onde é int script errado não funciona.
date_default_timezone_set("America/Sao_Paulo");

class Usuario 
{	

	//atributo da classe
	public static $arquivoLog; //stributo static é atributo da classe e não do OBJETO
	public $email;
	public $senha;


	//metodo construtor
	public function __construct(string $email, string $senha)
	{
		//recebendo valor pelo parametro
		$this->email = $email;
		$this->senha = $senha;
	}	

	//criando metodo
	public function autenticar(): bool
	{
		self::log('Tentantiva de Autenticação detectada');
		return true;
	}

	public static function log($evento)
	{
		$date = new DateTime(); //objeto date
		self::$arquivoLog = __DIR__ . '/../data/log/' .  $date->format('Y-m-d').'.log'; //recebendo data formatade de date - date('Y-m-d'); self significa eu mesmo em ves de (->) usa-se (::) por ser atributo statico / __DIR__ significa o diretorio que esta no caso class 
		$time = $date->format('H:i:s'); //recebendo Hora Minuto e segundo

		file_put_contents(self::$arquivoLog, sprintf('%s %s' . PHP_EOL, $time, $evento), FILE_APPEND); //sprintf retorna e echo exite 
	}


	public function __destruct()
	{
		self::log('Objeto Destruído.');
	}

}