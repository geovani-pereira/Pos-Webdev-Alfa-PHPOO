<?php declare(strict_types = 1); //checagem de tipos seja estrita , se passar o de dado errado  int onde é string ou string onde é int script errado não funciona.
require 'Usuario.php';

	class Admin extends Usuario{
	
		public $matricula;

		function __construct(string $email,string $senha, int $matricula){

				$this->email = $email;
				$this->senha = $senha;
				$this->matricula = $matricula;


				Usuario::log('xxx'); // parent::log('xxx'); parent entra no lugar do self por ser uma classe filha de usuário mas funciona com self também , pois também herda o metodo estatico

		}

	}