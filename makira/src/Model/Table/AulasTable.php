<?php
namespace App\Model\Table;

use App\Model\Entity\Aula;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aulas Model
 *
 */
class AulasTable extends Table
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

        $this->table('aulas');
        $this->displayField('Id_Aulas');
        $this->primaryKey('Id_Aulas');
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
            ->integer('Id_Aulas')
            ->allowEmpty('Id_Aulas', 'create');

        $validator
            ->requirePresence('Codigo_Aula', 'create')
            ->notEmpty('Codigo_Aula');

        $validator
            ->allowEmpty('Descripcion');

        $validator
            ->integer('Edificios_Id_Edificios')
            ->allowEmpty('Edificios_Id_Edificios');

        return $validator;
    }
}
