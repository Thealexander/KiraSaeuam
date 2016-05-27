<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transacestudiante Entity.
 *
 * @property int $Id_TransacEstudiantes
 * @property \Cake\I18n\Time $Fecha_Tracsaciones
 * @property float $Cantidad_Total
 * @property string $Descripcion
 * @property int $Estudiantes_Id_Estudiantes
 * @property int $Tutores_Id_Tutores
 * @property int $Personal_IdPersonal
 */
class Transacestudiante extends Entity
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
        'Id_TransacEstudiantes' => false,
    ];
}
