<?php
namespace App\Model\Table;

use App\Model\Entity\Nivele;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Niveles Model
 *
 */
class NivelesTable extends Table
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

        $this->table('niveles');
        $this->displayField('Id_Niveles');
        $this->primaryKey('Id_Niveles');
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
            ->integer('Id_Niveles')
            ->allowEmpty('Id_Niveles', 'create');

        $validator
            ->requirePresence('Nombre_Nivel', 'create')
            ->notEmpty('Nombre_Nivel');

        return $validator;
    }
}
