<?php
require_once('db_abstract_model.php');
class USERsession extends DBAbstractModel{
	public $nombre;
	public $apellido;
	public $email;
	public $clave;
	protected $id;
	#Funcion para realizar el logue de los usuarios
	function login_usuarios($user_email = '', $user_password = ''){
		try{
			if($user_email!= ''){
				$this->query = "
				SELECT id, nombre, apellido, email, clave
				FROM login
				WHERE email = '$user_email'
				AND clave= '$user_password'
				";
				$this->get_results_from_query();
			}
			if(count($this->rows) == 1) {
				foreach ($this->rows[0] as $propiedad=>$valor) {
				$this->$propiedad = $valor;
				}
				$this->genera_sesion_usuario();
				$this->mensaje = "La sesion se genero";
			} else {
				$this->mensaje = "Invalid Username or Password!";
			}
			return $this->mensaje;
			/*
			$this->mensaje = '<script type="text/javascript">alert("usuario '.$this->nombre.' ");</script>';
			} else {
				$this->mensaje = '<script type="text/javascript">alert("usuario no");</script>';
			}*/
		} catch (Exception $e) {
    		$this->mensaje = 'Excepción capturada: '.  $e->getMessage(). "\n";
		}
	}
	function genera_sesion_usuario(){
		session_start();
		$_SESSION["user_id"] = $this->id;
		$_SESSION["user_nombre"] = $this->nombre;
		$_SESSION["user_apellido"] = $this->nombre;
		$_SESSION["user_email"] = $this->nombre;


	}
		
}
?>

