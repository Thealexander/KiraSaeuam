<?php
namespace App\Model\Table;

use App\Model\Entity\Turno;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Turnos Model
 *
 */
class TurnosTable extends Table
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

        $this->table('turnos');
        $this->displayField('Id_Turnos');
        $this->primaryKey('Id_Turnos');
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
            ->integer('Id_Turnos')
            ->allowEmpty('Id_Turnos', 'create');

        $validator
            ->requirePresence('Turno', 'create')
            ->notEmpty('Turno');

        return $validator;
    }
}
