<?php
class EstudiantesController extends AppController
{
	public $helpers = array('Html', 'Form', 'Time');
	public $components = array('Session');
		public function index()
		{
			$this->set('estudiantes', $this->Estudiante->find('all'));
		}
	public function visualizar($Id_Estudiantes = null)
	{
		if(!Id_Estudiantes)
	{
	throw new NotFoundException('¡Datos invalidos!'); 
	}	 
	$estudiante = $this->Estudiante->findById($Id_Estudiantes);
	if(!$estudiante)
	{
		throw new NotFoundException('¡Estudiante no encontrado!');
	}
	$this->set('estudiante',$estudiante);
	}
	public function agregar()
	{
		if($this->request->is('post'))
		{
			$this->Estudiante->create();
			if($this->Estudiante->save($this->request->data))
			{
				$this->Session->setFlash('¡Exito agregando Nuevo Estudiante :)!', 'default', array('class' => 'succes'));
				return $this->redirect(array('action' =>'index'));
			}
			$this->Session->setFlash('Error al Agregar Nuevo Estudiante :(');
		}
	}
	public function inscribir()
	{
		
		if(!$Id_Estudiantes)
		{
			throw new NotFoundException("Se ha producido un error x/ !");
		}
		$estudiante = $this->Estudiante->findbyId($Id_Estudiantes);
		if(!$estudiante)
		{
			throw new NotFoundException('¡Error: Estudiante no ha sido encontrado!', $element = 'default', $params = array('class' => 'success'));
		}
		if($this->request->is('post', 'put'))
		{
			$this->Estudiante->Id_Estudiantes = $Id_Estudiantes;
			if($this->Estudiante->save($this->request->data))
			{
				$this->Session->setFlash('La inscripcion ha sido realizada con exito! :)', $element = 'default', $params = array('class' => 'success'));
				return $this->redirect(array('action' => 'index')); 
			}
			$this->Session->setFlash('¡Error! No se han efectuado cambios.', $element = 'default', $params = array('class' => 'success'));
		}
		if(!$this->request->data)
		{
			$this->request->data = $estudiante;
		}
	
	}
	public function edicion($Id_Estudiantes = null)
	{
		if(!$Id_Estudiantes)
		{
			throw new NotFoundException("Se ha producido un error x/ !");
		}
		$estudiante = $this->Estudiante->findbyId($Id_Estudiantes);
		if(!$estudiante)
		{
			throw new NotFoundException('¡Error: Estudiante no ha sido encontrado!', $element = 'default', $params = array('class' => 'success'));
		}
		if($this->request->is('post', 'put'))
		{
			$this->Estudiante->Id_Estudiantes = $Id_Estudiantes;
			if($this->Estudiante->save($this->request->data))
			{
				$this->Session->setFlash('Los Cambios han Sido efectuados Correctamente :)', $element = 'default', $params = array('class' => 'success'));
				return $this->redirect(array('action' => 'index')); 
			}
			$this->Session->setFlash('¡Error! No se han efectuado cambios.', $element = 'default', $params = array('class' => 'success'));
		}
		if(!$this->request->data)
		{
			$this->request->data = $estudiante;
		}
	}
	public function eliminar($Id_Estudiantes)//esta opcion solo para SuperUsuario, ay que validar
	{
		if(!$this->request->is('get'))
		{
			throw new MethodNotFoundException('¡Denegado!, esta forma es incorrecta'); 
		}
		if(!$this->Estudiante->delete('$Id_Estudiantes'))
		{
			$this->Session->setFlash('Estudiante eliminado de la BD correctamente', $element = 'default', $params = array('class' => 'success'));
			return $this->redirect(array('action' => 'index'));
		}
	}
	public function deshabilitar($Id_Estudiantes)// no es correcto eliminar a menos que sea caso grave
	{
		
	}
}	

?>