<?php 
	include('Conexion.php');
	/**
	* 
	*/
	class Sitio1
	{
		private $idSitio1,$nombre,$descripcion,$foto;
		function __construct($nombre,$descripcion,$foto,$idSitio1=null)
		{
			$this->idSitio1=$idSitio1;
			$this->nombre=$nombre;
			$this->descripcion=$descripcion;
			$this->foto=$foto;
		}
		public function insertar()
		{
			$pdo = Conexion::conectar();
			$sql="INSERT INTO sitios1(nombre,descripcion,foto) VALUES
			(:nombre,:descripcion,:foto)";
			$query = $pdo->prepare($sql);
			$query->bindParam(':nombre',$this->nombre);
			$query->bindParam(':descripcion',$this->descripcion);
			$query->bindParam(':foto',$this->foto);
			return $query->execute();
		}
		static public function listarTodo()
		{
			$pdo = Conexion::conectar();
			$sql = 'SELECT * FROM sitios1';
			$query = $pdo->prepare($sql);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Sitio1',array('nombre','descripcion','foto'));
		}
		static function ListarSitio($id)
		{
			$pdo = Conexion::conectar();
			$sql="SELECT * FROM sitios1 WHERE idSitio1 = :id";
			$query = $pdo->prepare($sql);
			$query->bindParam(':id',$id);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Sitio1',array('nombre','descripcion','foto'));
		}
		public function modificar()
		{
			$pdo = Conexion::conectar();
			$sql = "UPDATE sitios1 set nombre = :nombre, descripcion = :descripcion, foto = :foto WHERE idSitio1 = :id";
			$query = $pdo->prepare($sql);
			$query->bindParam(':nombre',$this->nombre);
			$query->bindParam(':descripcion',$this->descripcion);
			$query->bindParam(':foto',$this->foto);
			$query->bindParam(':id',$this->idSitio1);
			return $query->execute();	
		}
		static function eliminar($id)
		{
			$pdo = Conexion::conectar();
			$sql = "DELETE FROM sitios1 WHERE idSitio1 = :id";
			$query = $pdo->prepare($sql);
			$query->bindParam(':id',$id);
			return $query->execute();
		}
		public function getFoto()
		{
			return $this->foto;
		}
		public function getNombre()
		{
			return $this->nombre;
		}
		public function getDesc()
		{
			return $this->descripcion;
		}
		public function getId()
		{
			return $this->idSitio1;
		}

	}
 ?>