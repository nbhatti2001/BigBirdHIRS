<?php
namespace App\Model\Table;

use App\Model\Entity\SalaryMaster;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalaryMasters Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Employees
 * @property \Cake\ORM\Association\BelongsTo $Stations
 * @property \Cake\ORM\Association\BelongsTo $Departments
 * @property \Cake\ORM\Association\BelongsTo $Designations
 * @property \Cake\ORM\Association\BelongsTo $Banks
 */
class SalaryMastersTable extends Table
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

        $this->table('salary_masters');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Employees', [
            'foreignKey' => 'employee_id'
        ]);
        $this->belongsTo('Stations', [
            'foreignKey' => 'station_id'
        ]);
        $this->belongsTo('Departments', [
            'foreignKey' => 'department_id'
        ]);
        $this->belongsTo('Designations', [
            'foreignKey' => 'designation_id'
        ]);
        $this->belongsTo('Banks', [
            'foreignKey' => 'bank_id'
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
            ->allowEmpty('peno');

        $validator
            ->allowEmpty('salary_month');

        $validator
            ->add('working_days', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('working_days');

        $validator
            ->add('actual_basic', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('actual_basic');

        $validator
            ->add('basic_pay', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('basic_pay');

        $validator
            ->add('house_rent_allowance', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('house_rent_allowance');

        $validator
            ->add('medical_allowance', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('medical_allowance');

        $validator
            ->add('over_time_days', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('over_time_days');

        $validator
            ->add('over_time_days_amount', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('over_time_days_amount');

        $validator
            ->add('over_time_hours', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('over_time_hours');

        $validator
            ->add('over_time_hours_amount', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('over_time_hours_amount');

        $validator
            ->add('over_time_amount', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('over_time_amount');

        $validator
            ->add('gross_salary', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('gross_salary');

        $validator
            ->add('tax_deduction', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('tax_deduction');

        $validator
            ->add('eobi_deduction', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('eobi_deduction');

        $validator
            ->add('advance_deduction', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('advance_deduction');

        $validator
            ->add('other_deduction', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('other_deduction');

        $validator
            ->add('mess_deduction', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('mess_deduction');

        $validator
            ->add('net_salary', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('net_salary');

        $validator
            ->add('is_bank', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('is_bank');

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
        $rules->add($rules->existsIn(['employee_id'], 'Employees'));
        $rules->add($rules->existsIn(['station_id'], 'Stations'));
        $rules->add($rules->existsIn(['department_id'], 'Departments'));
        $rules->add($rules->existsIn(['designation_id'], 'Designations'));
        $rules->add($rules->existsIn(['bank_id'], 'Banks'));
        return $rules;
    }
}
