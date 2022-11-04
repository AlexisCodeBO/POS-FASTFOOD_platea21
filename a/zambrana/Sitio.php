<?php 
	include_once('Conexion.php');
	
	/**
	* 
	*/
	class Sitio
	{
		private $idSitio,$nombre,$descripcion,$foto;
		function __construct($nombre,$descripcion,$foto,$categoria_id=null,$idSitio=null)
		{
			$this->idSitio=$idSitio;
			$this->categoria_id=$categoria_id;
			$this->nombre=$nombre;
			$this->descripcion=$descripcion;
			$this->foto=$foto;
		}
		public function insertar()
		{
			$pdo = Conexion::conectar();
			$sql="INSERT INTO sitios(nombre,categoria_id,descripcion,foto) VALUES
			(:nombre,:categoria_id,:descripcion,:foto)";
			$query = $pdo->prepare($sql);
			$query->bindParam(':nombre',$this->nombre);
			$query->bindParam(':categoria_id',$this->categoria_id);
			$query->bindParam(':descripcion',$this->descripcion);
			$query->bindParam(':foto',$this->foto);
			return $query->execute();
		}
		static public function listarTodo($categoria_id)
		{
			$pdo = Conexion::conectar();
			$sql = 'SELECT * FROM sitios WHERE categoria_id = :categoria_id';
			$query = $pdo->prepare($sql);
			$query->bindParam(':categoria_id',$categoria_id);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Sitio',array('nombre','descripcion','foto'));
		}
		static function ListarSitio($id)
		{
			$pdo = Conexion::conectar();
			$sql="SELECT * FROM sitios WHERE idSitio = :id";
			$query = $pdo->prepare($sql);
			$query->bindParam(':id',$id);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Sitio',array('nombre','descripcion','foto'));
		}
		/*static function insertar2($id)
		{
			$pdo = Conexion::conectar();
			$sql="INSERT INTO dbpos.products (SELECT * FROM equitacion.sitios2 join dbpos.products on idSitio2 = id) (category, name) VALUES (descripcion, nombre)";
			$query = $pdo->prepare($sql);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Sitio',array('nombre','descripcion'));
		}*/
		public function modificar()
		{
			$pdo = Conexion::conectar();
			$sql = "UPDATE sitios set nombre = :nombre, descripcion = :descripcion, foto = :foto WHERE idSitio = :id";
			$query = $pdo->prepare($sql);
			$query->bindParam(':nombre',$this->nombre);
			$query->bindParam(':descripcion',$this->descripcion);
			$query->bindParam(':foto',$this->foto);
			$query->bindParam(':id',$this->idSitio);
			return $query->execute();	
		}
		static function eliminar($id)
		{
			$pdo = Conexion::conectar();
			$sql = "DELETE FROM sitios WHERE idSitio = :id";
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
		public function getCategoriaId()
		{
			return $this->categoria_id;
		}
		public function getDesc()
		{
			return $this->descripcion;
		}
		public function getId()
		{
			return $this->idSitio;
		}

	}
 ?>