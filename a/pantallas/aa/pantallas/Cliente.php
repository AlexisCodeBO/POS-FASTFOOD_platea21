<?php 
	include_once('conexion.php');
	/**
	* 
	*/
	class Cliente
	{
		private $idcliente, $appat, $apmat, $direccion, $telef;
		function __construct( $appat, $apmat, $direccion, $telef, $idcliente=NULL)
		{
			$this->appat=$appat;
			$this->apmat=$apmat;
			$this->direccion=$direccion;
			$this->telef=$telef;
			$this->idcliente=$idcliente;
		}
		public function getappat(){
			return $this->appat;
		} 
		public function getapmat(){
			return $this->apmat;
		}
		public function getdireccion(){
			return $this->direccion;
		}
		public function gettelef(){
			return $this->telef;
		}
		public function getidCliente(){
			return $this->idcliente;
		}
		public function insertar(){
			$pdo = Conexion::conectar();
			$sql = 'INSERT INTO cliente( appaterno, apmaterno, direccionc, telefonoc) values(:appaterno, :apmaterno, :direccion,:telefonoc)';			
			$sentencia = $pdo->prepare($sql);
			$sentencia->bindParam(':appaterno',$this->appat);
			$sentencia->bindParam(':apmaterno',$this->apmat);
			$sentencia->bindParam(':direccionc',$this->direccion);
			$sentencia->bindParam(':telefonoc',$this->telef);
			return $sentencia->execute();
		}
		static public function seleccionarTodo()
		{
			$pdo = Conexion::conectar();			
			$sql='SELECT * FROM cliente';
			$stn = $pdo->prepare($sql);	
			$stn->execute();
			return $stn->FetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Cliente',array('appat','apmat','direccion','telef'));
		}
		public function actualizar()
		{
			$pdo = Conexion::conectar();
			$sql="UPDATE cliente SET appaterno = :appaterno, apmaterno = :apmaterno, direccionc=:direccionc, telefonoc=:telefonoc WHERE idcliente = :id";
			$query = $pdo->prepare($sql);
			$query->bindParam(':appaterno',$this->appat);
			$query->bindParam(':apmaterno',$this->apmat);			
			$query->bindParam(':direccionc',$this->direccion);
			$query->bindParam(':telefonoc',$this->telef);
			return $query->execute();
		}
		static public function seleccionarcliente($id)
		{
			$pdo = Conexion::conectar();
			$sql='SELECT * FROM cliente WHERE idcliente = :id';
			$stn = $pdo->prepare($sql);	
			$stn->bindParam(':id',$id,PDO::PARAM_INT); 
			$stn->execute();
			return $stn->FetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Cliente',array('appat','apmat','direccion','telef'));
		}
		static function eliminar($id)
		{
			$pdo = Conexion::conectar();
			$sql = "DELETE FROM cliente WHERE idcliente = :id";
			$query = $pdo->prepare($sql);
			$query->bindParam(':id',$id,PDO::PARAM_INT);
			$query->execute();
		}
	}
?>