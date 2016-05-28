<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TutoresFixture
 *
 */
class TutoresFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Id_tutores' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Nombres_Tutor1' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Nombres_Tutor2' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Nombres_Tutor3' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Apellidos_Tutor1' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Apellidos_Tutor2' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Apellidos_Tutor3' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Telefono' => ['type' => 'string', 'length' => 8, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Celular_Opcion1' => ['type' => 'string', 'length' => 8, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Celuar_opcion2' => ['type' => 'string', 'length' => 8, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Direccion' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 35, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Cedula_Tutor1' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Cedula_Tutor2' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Cedula_Tutor3' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Estudiantes_Id_Estudiantes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Id_tutores'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MyISAM',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'Id_tutores' => 1,
            'Nombres_Tutor1' => 'Lorem ipsum dolor sit amet',
            'Nombres_Tutor2' => 'Lorem ipsum dolor sit amet',
            'Nombres_Tutor3' => 'Lorem ipsum dolor sit amet',
            'Apellidos_Tutor1' => 'Lorem ipsum dolor sit amet',
            'Apellidos_Tutor2' => 'Lorem ipsum dolor sit amet',
            'Apellidos_Tutor3' => 'Lorem ipsum dolor sit amet',
            'Telefono' => 'Lorem ',
            'Celular_Opcion1' => 'Lorem ',
            'Celuar_opcion2' => 'Lorem ',
            'Direccion' => 'Lorem ipsum dolor sit amet',
            'email' => 'Lorem ipsum dolor sit amet',
            'Cedula_Tutor1' => 'Lorem ipsum d',
            'Cedula_Tutor2' => 'Lorem ipsum d',
            'Cedula_Tutor3' => 'Lorem ipsum d',
            'Estudiantes_Id_Estudiantes' => 1
        ],
    ];
}
