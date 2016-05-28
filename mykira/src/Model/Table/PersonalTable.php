<?php
namespace App\Model\Table;

use App\Model\Entity\Personal;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Personal Model
 *
 */
class PersonalTable extends Table
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

        $this->table('personal');
        $this->displayField('Id_Personal');
        $this->primaryKey('Id_Personal');
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
            ->integer('Id_Personal')
            ->allowEmpty('Id_Personal', 'create');

        $validator
            ->requirePresence('Personal_Nombre', 'create')
            ->notEmpty('Personal_Nombre');

        $validator
            ->requirePresence('Personal_Apellidos', 'create')
            ->notEmpty('Personal_Apellidos');

        $validator
            ->allowEmpty('Telefono');

        $validator
            ->requirePresence('Celular', 'create')
            ->notEmpty('Celular');

        $validator
            ->allowEmpty('Email');

        $validator
            ->requirePresence('Direccion', 'create')
            ->notEmpty('Direccion');

        $validator
            ->dateTime('Fecha_nacimiento')
            ->allowEmpty('Fecha_nacimiento');

        $validator
            ->dateTime('Fecha_registro')
            ->allowEmpty('Fecha_registro');

        $validator
            ->dateTime('Fecha_modificacion')
            ->allowEmpty('Fecha_modificacion');

        $validator
            ->numeric('Salario')
            ->requirePresence('Salario', 'create')
            ->notEmpty('Salario');

        $validator
            ->integer('Cargos_Id_Cargos')
            ->allowEmpty('Cargos_Id_Cargos');

        return $validator;
    }
}
