<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Carrera Entity.
 *
 * @property int $IdCarrera
 * @property string $Nombre_Carrera
 * @property int $Id_Facultad
 * @property string $Descripcion
 * @property float $Duracion
 * @property int $Id_ConjuntoClases
 */
class Carrera extends Entity
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
        'IdCarrera' => false,
    ];
}
