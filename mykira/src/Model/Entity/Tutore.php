<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tutore Entity.
 *
 * @property int $Id_tutores
 * @property string $Nombres_Tutor1
 * @property string $Nombres_Tutor2
 * @property string $Nombres_Tutor3
 * @property string $Apellidos_Tutor1
 * @property string $Apellidos_Tutor2
 * @property string $Apellidos_Tutor3
 * @property string $Telefono
 * @property string $Celular_Opcion1
 * @property string $Celuar_opcion2
 * @property string $Direccion
 * @property string $email
 * @property string $Cedula_Tutor1
 * @property string $Cedula_Tutor2
 * @property string $Cedula_Tutor3
 * @property int $Estudiantes_Id_Estudiantes
 */
class Tutore extends Entity
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
        'Id_tutores' => false,
    ];
}
