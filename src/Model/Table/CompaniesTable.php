<?php
namespace App\Model\Table;

use App\Model\Entity\Company;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Companies Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\HasMany $Departments
 * @property \Cake\ORM\Association\HasMany $Designations
 * @property \Cake\ORM\Association\HasMany $Employees
 * @property \Cake\ORM\Association\HasMany $EmployeesBkp
 * @property \Cake\ORM\Association\HasMany $Stations
 * @property \Cake\ORM\Association\HasMany $Users
 * @property \Cake\ORM\Association\HasMany $UsersBkp
 */
class CompaniesTable extends Table
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

        $this->table('companies');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'			
        ]);
        $this->hasMany('Departments', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('Designations', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('Employees', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('EmployeesBkp', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('Stations', [
            'foreignKey' => 'company_id'
        ]);

        $this->hasMany('UsersBkp', [
            'foreignKey' => 'company_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->add('is_active', 'valid', ['rule' => 'boolean'])
            ->requirePresence('is_active', 'create')
            ->notEmpty('is_active');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }
}
