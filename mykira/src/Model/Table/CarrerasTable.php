<?php
namespace App\Model\Table;

use App\Model\Entity\Carrera;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Carreras Model
 *
 */
class CarrerasTable extends Table
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

        $this->table('carreras');
        $this->displayField('IdCarrera');
        $this->primaryKey('IdCarrera');
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
            ->integer('IdCarrera')
            ->allowEmpty('IdCarrera', 'create');

        $validator
            ->requirePresence('Nombre_Carrera', 'create')
            ->notEmpty('Nombre_Carrera');

        $validator
            ->integer('Id_Facultad')
            ->requirePresence('Id_Facultad', 'create')
            ->notEmpty('Id_Facultad');

        $validator
            ->requirePresence('Descripcion', 'create')
            ->notEmpty('Descripcion');

        $validator
            ->numeric('Duracion')
            ->requirePresence('Duracion', 'create')
            ->notEmpty('Duracion');

        $validator
            ->integer('Id_ConjuntoClases')
            ->requirePresence('Id_ConjuntoClases', 'create')
            ->notEmpty('Id_ConjuntoClases');

        return $validator;
    }
}
