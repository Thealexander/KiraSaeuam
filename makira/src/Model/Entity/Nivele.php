<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Nivele Entity.
 *
 * @property int $Id_Niveles
 * @property string $Nombre_Nivel
 */
class Nivele extends Entity
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
        'Id_Niveles' => false,
    ];
}
