<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Clase Entity.
 *
 * @property int $Id_Clases
 * @property string $Nombre_Clase
 * @property int $Creditos
 * @property int $Activo
 * @property int $Aulas_Id_Aulas
 * @property int $Profesores_Id_Profesores
 * @property int $Turno_Id_Turnos
 * @property int $Departamentos_Id_Depertamentos
 * @property int $Niveles_Id_Niveles
 */
class Clase extends Entity
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
        'Id_Clases' => false,
    ];
}
