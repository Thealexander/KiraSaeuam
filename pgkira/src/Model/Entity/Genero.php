<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Genero Entity.
 *
 * @property int $Id_Estudiantes
 * @property string $Estudiantes_Nombres
 * @property string $Estudiantes_Apellidos
 * @property \Cake\I18n\Time $Fecha_nacimiento
 * @property \Cake\I18n\Time $Fecha_registro
 * @property \Cake\I18n\Time $Fecha_actualizacion
 * @property int $Nivel-anio
 * @property string $Email
 * @property string $Direccion
 * @property string $Telefono
 * @property string $Celular
 * @property int $Notas
 * @property string $Sexo
 * @property string $genero
 * @property string $nacionalidad
 * @property string $Cedula
 * @property string $Ciudad
 * @property string $Departamento
 */
class Genero extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'Id_Estudiantes' => false,
    ];
}
