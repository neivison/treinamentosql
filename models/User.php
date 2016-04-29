<?php
	class User
	{
		public $nome;
		public $cargo;
		public $idade;

		function __construct($attributes = array())
		{
			if(!empty($attributes))
			{
				$this->nome = $attributes['nome'];
				$this->cargo = $attributes['cargo'];
				$this->idade = $attributes['idade'];
			}
		}
		public function insert($pdo){
			$sth = $pdo->prepare("INSERT INTO infojuniores(nome,cargo,idade) VALUES(:nome,:cargo,:idade)");
			$sth->BindValue(':nome',$this->nome,PDO::PARAM_STR);
			$sth->BindValue(':cargo',$this->cargo,PDO::PARAM_STR);
			$sth->BindValue(':idade',$this->idade,PDO::PARAM_INT);
			return $sth->execute();
		}
	}
?>