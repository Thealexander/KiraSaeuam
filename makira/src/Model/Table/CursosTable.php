<?php
namespace App\Model\Table;

use App\Model\Entity\Curso;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cursos Model
 *
 */
class CursosTable extends Table
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

        $this->table('cursos');
        $this->displayField('Turnos_Id_Turnos');
        $this->primaryKey('Turnos_Id_Turnos');
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
            ->integer('Turnos_Id_Turnos')
            ->allowEmpty('Turnos_Id_Turnos', 'create');

        $validator
            ->integer('Clases_Id_Clases')
            ->allowEmpty('Clases_Id_Clases');

        return $validator;
    }
}
