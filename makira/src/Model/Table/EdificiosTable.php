<?php
namespace App\Model\Table;

use App\Model\Entity\Edificio;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Edificios Model
 *
 */
class EdificiosTable extends Table
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

        $this->table('edificios');
        $this->displayField('Id_Edificios');
        $this->primaryKey('Id_Edificios');
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
            ->integer('Id_Edificios')
            ->allowEmpty('Id_Edificios', 'create');

        $validator
            ->requirePresence('Codigo_Edificio', 'create')
            ->notEmpty('Codigo_Edificio');

        $validator
            ->requirePresence('Descripcion', 'create')
            ->notEmpty('Descripcion');

        return $validator;
    }
}
