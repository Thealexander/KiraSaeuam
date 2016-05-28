<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PersonalFixture
 *
 */
class PersonalFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'personal';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Id_Personal' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Personal_Nombre' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Personal_Apellidos' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Telefono' => ['type' => 'string', 'length' => 8, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Celular' => ['type' => 'string', 'length' => 8, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Email' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Direccion' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Fecha_nacimiento' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'Fecha_registro' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'Fecha_modificacion' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'Salario' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'Cargos_Id_Cargos' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Id_Personal'], 'length' => []],
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
            'Id_Personal' => 1,
            'Personal_Nombre' => 'Lorem ipsum dolor sit amet',
            'Personal_Apellidos' => 'Lorem ipsum dolor sit amet',
            'Telefono' => 'Lorem ',
            'Celular' => 'Lorem ',
            'Email' => 'Lorem ipsum dolor sit amet',
            'Direccion' => 'Lorem ipsum dolor sit amet',
            'Fecha_nacimiento' => '2016-05-27 20:48:54',
            'Fecha_registro' => '2016-05-27 20:48:54',
            'Fecha_modificacion' => '2016-05-27 20:48:54',
            'Salario' => 1,
            'Cargos_Id_Cargos' => 1
        ],
    ];
}
