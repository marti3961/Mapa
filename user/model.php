<?php
# Importar modelo de abstracción de base de datos
require_once('../core/db_abstract_model.php');
class Usuario extends DBAbstractModel {
############################### PROPIEDADES ################################
	public $nombre;
	public $apellido;
	public $email;
	public $clave;
	protected $id;
################################# MÉTODOS ##################################
	#metodos no usados 
	public function get($user_email='') {}
		# Eliminar un usuario
	public function delete($user_email='') {}
	# Crear un nuevo usuario
	# Crear un nuevo usuario
	public function set($user_data=array()) {
		if(array_key_exists('email', $user_data)) {
			$this->get($user_data['email']);
		if($user_data['email'] != $this->email) {
			foreach ($user_data as $campo=>$valor) {
				$$campo = $valor;
			}
			$this->query = "
			INSERT INTO login
			(nombre, apellido, email, clave)
			VALUES
			('$nombre', '$apellido', '$email', '$clave')
			";
			$this->execute_single_query();
			$this->mensaje = 'Usuario agregado exitosamente';
		} else {
			$this->mensaje = 'El usuario ya existe';
		}
		} else {
			$this->mensaje = 'No se ha agregado al usuario';
		}
	}
	# Modificar un usuario
	public function edit($user_data=array()) {
		foreach ($user_data as $campo=>$valor) {
			$$campo = $valor;
		}
		$this->query = "
		UPDATE login
		SET nombre='$nombre',
		apellido='$apellido'
		WHERE email = '$email'
		";
		$this->execute_single_query();
		$this->mensaje = 'Usuario modificado';
	}
	# Generar login 
	public function login($user_email='', $user_clave='') {
		if($user_email != '') {
			$this->query = "
			SELECT id, nombre, apellido, email, clave
			FROM login
			WHERE email = '$user_email'
			AND clave = '$user_clave'
			";
			$this->get_results_from_query();
		}
		if(count($this->rows) == 1) {
			foreach ($this->rows[0] as $propiedad=>$valor) {
			$this->$propiedad = $valor;
			}
		$this->mensaje = 'Usuario encontrado';
		} else {
			$this->mensaje = 'Usuario no encontrado';
		}
	}
	# Método constructor
	function __construct() {
		$this->db_name = 'mapa_app';
	}
	# Método destructor del objeto
	function __destruct() {
		unset($this);
	}
}
?>