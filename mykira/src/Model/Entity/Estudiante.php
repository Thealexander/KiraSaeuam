<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estudiante Entity.
 *
 * @property int $Id_Estudiantes
 * @property string $Estudiantes_Nombres
 * @property string $Estudiantes_Apellidos
 * @property \Cake\I18n\Time $Fecha_nacimiento
 * @property \Cake\I18n\Time $Fecha_registro
 * @property \Cake\I18n\Time $Fecha_actualizacion
 * @property int $nivannio
 * @property string $email
 * @property string $Direccion
 * @property string $Telefono
 * @property string $Celular
 * @property int $Notas
 * @property string $sexo
 * @property string $genero
 * @property string $nacionalidad
 * @property string $Cedula
 * @property string $Ciudad
 * @property string $Departamento
 * @property string $photo
 * @property float $decuento
 * @property int $Tutores_Id_Tutores
 * @property float $Monto_a_pagar
 * @property string $photo_di
 */
class Estudiante extends Entity
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
