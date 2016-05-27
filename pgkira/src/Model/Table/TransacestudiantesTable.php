<?php
namespace App\Model\Table;

use App\Model\Entity\Transacestudiante;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Transacestudiantes Model
 *
 */
class TransacestudiantesTable extends Table
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

        $this->table('transacestudiantes');
        $this->displayField('Id_TransacEstudiantes');
        $this->primaryKey('Id_TransacEstudiantes');
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
            ->integer('Id_TransacEstudiantes')
            ->allowEmpty('Id_TransacEstudiantes', 'create');

        $validator
            ->time('Fecha_Tracsaciones')
            ->allowEmpty('Fecha_Tracsaciones');

        $validator
            ->numeric('Cantidad_Total')
            ->requirePresence('Cantidad_Total', 'create')
            ->notEmpty('Cantidad_Total');

        $validator
            ->allowEmpty('Descripcion');

        $validator
            ->integer('Estudiantes_Id_Estudiantes')
            ->allowEmpty('Estudiantes_Id_Estudiantes');

        $validator
            ->integer('Tutores_Id_Tutores')
            ->allowEmpty('Tutores_Id_Tutores');

        $validator
            ->integer('Personal_IdPersonal')
            ->allowEmpty('Personal_IdPersonal');

        return $validator;
    }
}
