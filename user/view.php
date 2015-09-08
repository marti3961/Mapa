<?php
$diccionario = array(
		'subtitle'=>array(
		VIEW_SET_USER=>'Registrarse',
		VIEW_EDIT_USER=>'Editar usuario',
		VIEW_LOGIN_USER=>'Entrar',
		),
		'links_menu'=>array(
		'VIEW_SET_USER'=>MODULO.VIEW_SET_USER.'/',
		'VIEW_EDIT_USER'=>MODULO.VIEW_EDIT_USER.'/',
		'VIEW_LOGIN_USER'=>MODULO.VIEW_LOGIN_USER.'/'
		),
		'form_actions'=>array(
		'SET'=>'/mvc-mapa/'.MODULO.SET_USER.'/',
		'EDIT'=>'/mvc-mapa/'.MODULO.EDIT_USER.'/',
		'LOGIN'=>'/mvc-mapa/'.MODULO.LOGIN_USER.'/'
		)
	);
function get_template($form='get') {
	$file = '../site_media/html/user/user_'.$form.'.html';
	$template = file_get_contents($file);
	return $template;
}
function render_dinamic_data($html, $data) {
	foreach ($data as $clave=>$valor) {
	$html = str_replace('{'.$clave.'}', $valor, $html);
	}
	return $html;
}
function retornar_vista($vista, $data=array()) {
	global $diccionario;
	if($vista==VIEW_LOGIN_USER ){
		$html = get_template('template_login');
	}else {
		$html = get_template('template');
	}
	$html = str_replace('{subtitulo}', $diccionario['subtitle'][$vista],$html);
	$html = str_replace('{formulario}', get_template($vista), $html);
	$html = render_dinamic_data($html, $diccionario['form_actions']);
	$html = render_dinamic_data($html, $diccionario['links_menu']);
	$html = render_dinamic_data($html, $data);
	// render {mensaje}
	if(array_key_exists('nombre', $data)&& array_key_exists('apellido', $data)&& $vista==VIEW_EDIT_USER) {
		$mensaje = 'Editar usuario '.$data['nombre'].' '.$data['apellido'];
	} else if($vista!=VIEW_LOGIN_USER) {
		if(array_key_exists('mensaje', $data)) {
		$mensaje = $data['mensaje'];	$mensaje = $data['mensaje'];
		} else {
		$mensaje = ' ';
		}
	}
	$html = str_replace('{mensaje}', $mensaje, $html);
	print $html;
}
?>