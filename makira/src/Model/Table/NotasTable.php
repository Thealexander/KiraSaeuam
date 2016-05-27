<?php
namespace App\Model\Table;

use App\Model\Entity\Nota;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Notas Model
 *
 */
class NotasTable extends Table
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

        $this->table('notas');
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
            ->numeric('Primer_Parcial')
            ->allowEmpty('Primer_Parcial');

        $validator
            ->numeric('Segundo_Parcial')
            ->allowEmpty('Segundo_Parcial');

        $validator
            ->numeric('Nota_Final')
            ->allowEmpty('Nota_Final');

        $validator
            ->integer('Periodo_Id_Periodo')
            ->allowEmpty('Periodo_Id_Periodo');

        $validator
            ->integer('Estudiantes_Id_Estudiantes')
            ->allowEmpty('Estudiantes_Id_Estudiantes');

        $validator
            ->integer('Clases_Id_Clases')
            ->allowEmpty('Clases_Id_Clases');

        return $validator;
    }
}
