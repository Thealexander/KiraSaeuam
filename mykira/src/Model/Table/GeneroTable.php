<?php
namespace App\Model\Table;

use App\Model\Entity\Genero;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Genero Model
 *
 */
class GeneroTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('genero');
        $this->displayField('Id_Estudiantes');
        $this->primaryKey('Id_Estudiantes');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('Id_Estudiantes')
            ->allowEmpty('Id_Estudiantes', 'create');

        $validator
            ->requirePresence('Estudiantes_Nombres', 'create')
            ->notEmpty('Estudiantes_Nombres');

        $validator
            ->requirePresence('Estudiantes_Apellidos', 'create')
            ->notEmpty('Estudiantes_Apellidos');

        $validator
            ->dateTime('Fecha_nacimiento')
            ->allowEmpty('Fecha_nacimiento');

        $validator
            ->dateTime('Fecha_registro')
            ->allowEmpty('Fecha_registro');

        $validator
            ->dateTime('Fecha_actualizacion')
            ->allowEmpty('Fecha_actualizacion');

        $validator
            ->integer('Nivel-anio')
            ->requirePresence('Nivel-anio', 'create')
            ->notEmpty('Nivel-anio');

        $validator
            ->allowEmpty('Email');

        $validator
            ->requirePresence('Direccion', 'create')
            ->notEmpty('Direccion');

        $validator
            ->allowEmpty('Telefono');

        $validator
            ->requirePresence('Celular', 'create')
            ->notEmpty('Celular');

        $validator
            ->integer('Notas')
            ->allowEmpty('Notas');

        $validator
            ->requirePresence('Sexo', 'create')
            ->notEmpty('Sexo');

        $validator
            ->requirePresence('genero', 'create')
            ->notEmpty('genero');

        $validator
            ->requirePresence('nacionalidad', 'create')
            ->notEmpty('nacionalidad');

        $validator
            ->allowEmpty('Cedula');

        $validator
            ->requirePresence('Ciudad', 'create')
            ->notEmpty('Ciudad');

        $validator
            ->requirePresence('Departamento', 'create')
            ->notEmpty('Departamento');

        return $validator;
    }
}
