<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Personal Entity.
 *
 * @property int $Id_Personal
 * @property string $Personal_Nombre
 * @property string $Personal_Apellidos
 * @property string $Telefono
 * @property string $Celular
 * @property string $Email
 * @property string $Direccion
 * @property \Cake\I18n\Time $Fecha_nacimiento
 * @property \Cake\I18n\Time $Fecha_registro
 * @property \Cake\I18n\Time $Fecha_modificacion
 * @property float $Salario
 * @property int $Cargos_Id_Cargos
 */
class Personal extends Entity
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
        'Id_Personal' => false,
    ];
}
