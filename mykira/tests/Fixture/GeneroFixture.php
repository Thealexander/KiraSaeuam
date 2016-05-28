<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GeneroFixture
 *
 */
class GeneroFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'genero';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Id_Estudiantes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Estudiantes_Nombres' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Estudiantes_Apellidos' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Fecha_nacimiento' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'Fecha_registro' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'Fecha_actualizacion' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'Nivel-anio' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Email' => ['type' => 'string', 'length' => 35, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Direccion' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Telefono' => ['type' => 'string', 'length' => 8, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Celular' => ['type' => 'string', 'length' => 8, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Notas' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Sexo' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'genero' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'nacionalidad' => ['type' => 'string', 'length' => 35, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Cedula' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Ciudad' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Departamento' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Id_Estudiantes'], 'length' => []],
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
            'Id_Estudiantes' => 1,
            'Estudiantes_Nombres' => 'Lorem ipsum dolor sit amet',
            'Estudiantes_Apellidos' => 'Lorem ipsum dolor sit amet',
            'Fecha_nacimiento' => '2016-05-27 20:49:04',
            'Fecha_registro' => '2016-05-27 20:49:04',
            'Fecha_actualizacion' => '2016-05-27 20:49:04',
            'Nivel-anio' => 1,
            'Email' => 'Lorem ipsum dolor sit amet',
            'Direccion' => 'Lorem ipsum dolor sit amet',
            'Telefono' => 'Lorem ',
            'Celular' => 'Lorem ',
            'Notas' => 1,
            'Sexo' => 'Lorem ip',
            'genero' => 'Lorem ipsum d',
            'nacionalidad' => 'Lorem ipsum dolor sit amet',
            'Cedula' => 'Lorem ipsum d',
            'Ciudad' => 'Lorem ipsum dolor sit amet',
            'Departamento' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
