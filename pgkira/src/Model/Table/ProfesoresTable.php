<?php
namespace App\Model\Table;

use App\Model\Entity\Profesore;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profesores Model
 *
 */
class ProfesoresTable extends Table
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

        $this->table('profesores');
        $this->displayField('Personal_Id_Personal');
        $this->primaryKey('Personal_Id_Personal');
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
            ->integer('Personal_Id_Personal')
            ->allowEmpty('Personal_Id_Personal', 'create');

        $validator
            ->integer('Departamentos_Id_Departamentos')
            ->allowEmpty('Departamentos_Id_Departamentos');

        $validator
            ->allowEmpty('Fotos_Id_photo');

        $validator
            ->allowEmpty('documento_vitae');

        $validator
            ->integer('Clases_Id_Clases')
            ->allowEmpty('Clases_Id_Clases');

        $validator
            ->allowEmpty('Descripcion');

        return $validator;
    }
}
