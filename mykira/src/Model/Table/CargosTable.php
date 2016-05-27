<?php
namespace App\Model\Table;

use App\Model\Entity\Cargo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cargos Model
 *
 */
class CargosTable extends Table
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

        $this->table('cargos');
        $this->displayField('Id_Cargos');
        $this->primaryKey('Id_Cargos');
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
            ->integer('Id_Cargos')
            ->allowEmpty('Id_Cargos', 'create');

        $validator
            ->requirePresence('Cargo', 'create')
            ->notEmpty('Cargo');

        $validator
            ->requirePresence('Descripcion', 'create')
            ->notEmpty('Descripcion');

        return $validator;
    }
}
