<?php
class Estudiante extends AppModel
{
	public $validate = array
	(
		'Estudiante_Nombres'=> array
		( 'rule' => 'notEmpty'),
		/* Para dejar un dato como unico que no exista otro
		unique => array(
		'rule' => 'isUnique',
		'message' => 'Este conjunto de apellidos nos indica la ya existencia de este alumno'
		)
		*/
		'Estudiantes_Apellidos'=> array
		( 'rule' => 'notEmpty' ),
		'descuento'=> array
		('notEmpty' 	=> array 
			('rule' => 'notEmpty'),
			'numeric' => array(
			'rule'=> 'numeric',
			'message' =>'Solo numeros')	),
		'fecha_nacimiento' => array
		( 'rule' => 'notEmpty'),
		'Nacionalidad'=> array
		( 'rule' => 'notEmpty'),
		'Ciudad'=> array
		( 'rule' => 'notEmpty'),
		'Direccion'=> array
		( 'rule' => 'notEmpty'),
		'Celular'=> array
		('notEmpty' 	=> array 
			('rule' => 'notEmpty'),
			'numeric' => array(
			'rule'=> 'numeric',
			'message' =>'Solo numeros')	),
		'Telefono'=> array
		  (	'rule'=> 'numeric',
			'message' =>'Solo numeros'),// reparar para que almacenar numeros
		'sexo'=> array
		( 'rule' => 'notEmpty'),
		'genero'=> array
		( 'rule' => 'notEmpty'),
			'Activo'=> array 
		( 'rule' => 'notEmpty'), 
		
	);

	
}
?>