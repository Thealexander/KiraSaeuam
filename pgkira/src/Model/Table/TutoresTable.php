<?php
namespace App\Model\Table;

use App\Model\Entity\Tutore;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tutores Model
 *
 */
class TutoresTable extends Table
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

        $this->table('tutores');
        $this->displayField('Id_tutores');
        $this->primaryKey('Id_tutores');
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
            ->integer('Id_tutores')
            ->allowEmpty('Id_tutores', 'create');

        $validator
            ->requirePresence('Nombres_Tutor1', 'create')
            ->notEmpty('Nombres_Tutor1');

        $validator
            ->requirePresence('Nombres_Tutor2', 'create')
            ->notEmpty('Nombres_Tutor2');

        $validator
            ->allowEmpty('Nombres_Tutor3');

        $validator
            ->requirePresence('Apellidos_Tutor1', 'create')
            ->notEmpty('Apellidos_Tutor1');

        $validator
            ->allowEmpty('Apellidos_Tutor2');

        $validator
            ->allowEmpty('Apellidos_Tutor3');

        $validator
            ->allowEmpty('Telefono');

        $validator
            ->requirePresence('Celular_Opcion1', 'create')
            ->notEmpty('Celular_Opcion1');

        $validator
            ->allowEmpty('Celuar_opcion2');

        $validator
            ->requirePresence('Direccion', 'create')
            ->notEmpty('Direccion');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->requirePresence('Cedula_Tutor1', 'create')
            ->notEmpty('Cedula_Tutor1');

        $validator
            ->allowEmpty('Cedula_Tutor2');

        $validator
            ->allowEmpty('Cedula_Tutor3');

        $validator
            ->integer('Estudiantes_Id_Estudiantes')
            ->allowEmpty('Estudiantes_Id_Estudiantes');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
