<?php
namespace App\Model\Table;

use App\Model\Entity\Departamento;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Departamentos Model
 *
 */
class DepartamentosTable extends Table
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

        $this->table('departamentos');
        $this->displayField('Id_Departamento');
        $this->primaryKey('Id_Departamento');
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
            ->integer('Id_Departamento')
            ->allowEmpty('Id_Departamento', 'create');

        $validator
            ->requirePresence('Departamento_Nombre', 'create')
            ->notEmpty('Departamento_Nombre');

        $validator
            ->allowEmpty('Descripcion');

        return $validator;
    }
}
