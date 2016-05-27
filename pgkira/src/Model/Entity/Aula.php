<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aula Entity.
 *
 * @property int $Id_Aulas
 * @property string $Codigo_Aula
 * @property string $Descripcion
 * @property int $Edificios_Id_Edificios
 */
class Aula extends Entity
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
        'Id_Aulas' => false,
    ];
}
