<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Curso Entity.
 *
 * @property int $Turnos_Id_Turnos
 * @property int $Clases_Id_Clases
 */
class Curso extends Entity
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
        'Turnos_Id_Turnos' => false,
    ];
}
