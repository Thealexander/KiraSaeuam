<?php
namespace App\Model\Table;

use App\Model\Entity\Clase;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clases Model
 *
 */
class ClasesTable extends Table
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

        $this->table('clases');
        $this->displayField('Id_Clases');
        $this->primaryKey('Id_Clases');
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
            ->integer('Id_Clases')
            ->allowEmpty('Id_Clases', 'create');

        $validator
            ->requirePresence('Nombre_Clase', 'create')
            ->notEmpty('Nombre_Clase');

        $validator
            ->integer('Creditos')
            ->requirePresence('Creditos', 'create')
            ->notEmpty('Creditos');

        $validator
            ->integer('Activo')
            ->requirePresence('Activo', 'create')
            ->notEmpty('Activo');

        $validator
            ->integer('Aulas_Id_Aulas')
            ->allowEmpty('Aulas_Id_Aulas');

        $validator
            ->integer('Profesores_Id_Profesores')
            ->allowEmpty('Profesores_Id_Profesores');

        $validator
            ->integer('Turno_Id_Turnos')
            ->allowEmpty('Turno_Id_Turnos');

        $validator
            ->integer('Departamentos_Id_Depertamentos')
            ->allowEmpty('Departamentos_Id_Depertamentos');

        $validator
            ->integer('Niveles_Id_Niveles')
            ->allowEmpty('Niveles_Id_Niveles');

        return $validator;
    }
}
