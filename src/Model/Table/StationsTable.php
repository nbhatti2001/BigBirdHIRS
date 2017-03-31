<?php
namespace App\Model\Table;

use App\Model\Entity\Station;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Stations Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Managers
 * @property \Cake\ORM\Association\BelongsTo $Companies
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\HasMany $Employees
 * @property \Cake\ORM\Association\HasMany $EmployeesBkp
 * @property \Cake\ORM\Association\HasMany $SalaryMasters
 * @property \Cake\ORM\Association\HasMany $Users
 * @property \Cake\ORM\Association\HasMany $UsersBkp
 */
class StationsTable extends Table
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

        $this->table('stations');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Managers', [
            'foreignKey' => 'manager_id',
			'className'=> 'Users'
        ]);
        $this->belongsTo('MyUsers', [
            'foreignKey' => 'user_id',
			'className'=> 'Users'
        ]);	
        $this->belongsTo('ModifiedBy', [
            'foreignKey' => 'modified_by',
			'className'=> 'Users'
        ]);			

		
        $this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
            'joinType' => 'INNER'
        ]);

		
        $this->hasMany('Employees', [
            'foreignKey' => 'station_id'
        ]);
        $this->hasMany('EmployeesBkp', [
            'foreignKey' => 'station_id'
        ]);
        $this->hasMany('SalaryMasters', [
            'foreignKey' => 'station_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'station_id'
        ]);
        $this->hasMany('UsersBkp', [
            'foreignKey' => 'station_id'
        ]);
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('name');

        $validator
            ->add('modified_by', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('modified_by');

        $validator
            ->add('is_active', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('is_active');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['manager_id'], 'Managers'));
        $rules->add($rules->existsIn(['company_id'], 'Companies'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }
}
