<?php 
	include('Conexion.php');
	/**
	* 
	*/
	class Sitio2
	{
		private $idSitio2,$nombre,$descripcion,$foto;
		function __construct($nombre,$descripcion,$foto,$idSitio2=null)
		{
			$this->idSitio2=$idSitio2;
			$this->nombre=$nombre;
			$this->descripcion=$descripcion;
			$this->foto=$foto;
		}
		public function insertar()
		{
			$pdo = Conexion::conectar();
			$sql="INSERT INTO sitios2(nombre,descripcion,foto) VALUES
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
			$sql = 'SELECT * FROM sitios2';
			$query = $pdo->prepare($sql);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Sitio2',array('nombre','descripcion','foto'));
		}
		static function ListarSitio2($id)
		{
			$pdo = Conexion::conectar();
			$sql="SELECT * FROM sitios2 WHERE idSitio2 = :id";
			$query = $pdo->prepare($sql);
			$query->bindParam(':id',$id);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Sitio2',array('nombre','descripcion','foto'));
		}
		public function modificar()
		{
			$pdo = Conexion::conectar();
			$sql = "UPDATE sitios2 set nombre = :nombre, descripcion = :descripcion, foto = :foto WHERE idSitio2 = :id";
			$query = $pdo->prepare($sql);
			$query->bindParam(':nombre',$this->nombre);
			$query->bindParam(':descripcion',$this->descripcion);
			$query->bindParam(':foto',$this->foto);
			$query->bindParam(':id',$this->idSitio2);
			return $query->execute();	
		}
		static function eliminar($id)
		{
			$pdo = Conexion::conectar();
			$sql = "DELETE FROM sitios2 WHERE idSitio2 = :id";
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
			return $this->idSitio2;
		}

	}
 ?>