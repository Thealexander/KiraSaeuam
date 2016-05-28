<?php
namespace App\Model\Table;

use App\Model\Entity\Periodo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Periodos Model
 *
 */
class PeriodosTable extends Table
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

        $this->table('periodos');
        $this->displayField('Id_Periodo');
        $this->primaryKey('Id_Periodo');
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
            ->integer('Id_Periodo')
            ->allowEmpty('Id_Periodo', 'create');

        $validator
            ->integer('NumerodePeriodo')
            ->requirePresence('NumerodePeriodo', 'create')
            ->notEmpty('NumerodePeriodo');

        return $validator;
    }
}
