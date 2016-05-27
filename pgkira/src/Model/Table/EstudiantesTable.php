<?php
namespace App\Model\Table;

use App\Model\Entity\Estudiante;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estudiantes Model
 *
 */
class EstudiantesTable extends Table
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

        $this->table('estudiantes');
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
            ->integer('nivannio')
            ->requirePresence('nivannio', 'create')
            ->notEmpty('nivannio');

        $validator
            ->email('email')
            ->allowEmpty('email');

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
            ->requirePresence('sexo', 'create')
            ->notEmpty('sexo');

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

        $validator
            ->allowEmpty('photo');

        $validator
            ->numeric('decuento')
            ->requirePresence('decuento', 'create')
            ->notEmpty('decuento');

        $validator
            ->integer('Tutores_Id_Tutores')
            ->allowEmpty('Tutores_Id_Tutores');

        $validator
            ->numeric('Monto_a_pagar')
            ->allowEmpty('Monto_a_pagar');

        $validator
            ->allowEmpty('photo_di');

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
