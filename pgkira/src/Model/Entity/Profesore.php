<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profesore Entity.
 *
 * @property int $Personal_Id_Personal
 * @property int $Departamentos_Id_Departamentos
 * @property string $Fotos_Id_photo
 * @property string $documento_vitae
 * @property int $Clases_Id_Clases
 * @property string $Descripcion
 */
class Profesore extends Entity
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
        'Personal_Id_Personal' => false,
    ];
}
