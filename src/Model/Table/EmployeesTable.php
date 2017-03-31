<?php
namespace App\Model\Table;

use App\Model\Entity\Employee;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employees Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Stations
 * @property \Cake\ORM\Association\BelongsTo $Departments
 * @property \Cake\ORM\Association\BelongsTo $Companies
 * @property \Cake\ORM\Association\BelongsTo $Banks
 * @property \Cake\ORM\Association\BelongsTo $Designations
 * @property \Cake\ORM\Association\BelongsTo $Payscales
 * @property \Cake\ORM\Association\HasMany $Qualifications
 * @property \Cake\ORM\Association\HasMany $SalaryMasters
 */
class EmployeesTable extends Table
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

        $this->table('employees');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Stations', [
            'foreignKey' => 'station_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Departments', [
            'foreignKey' => 'department_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Banks', [
            'foreignKey' => 'bank_id'
        ]);
        $this->belongsTo('Designations', [
            'foreignKey' => 'designation_id'
        ]);
        $this->belongsTo('Payscales', [
            'foreignKey' => 'payscale_id'
        ]);
        $this->hasMany('Qualifications', [
            'foreignKey' => 'employee_id'
        ]);
        $this->hasMany('Experiences', [
            'foreignKey' => 'employee_id'
        ]);
        $this->hasMany('SalaryMasters', [
            'foreignKey' => 'employee_id'
        ]);
        $this->hasMany('Attendances', [
            'foreignKey' => 'employee_id'
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
            ->notEmpty('employee_no');

        $validator
            ->notEmpty('employee_name');

        $validator
            ->notEmpty('father_name');

        $validator
            ->requirePresence('gender', 'create')
            ->notEmpty('gender');
			
        $validator
            ->add('date_of_brith', 'valid', ['rule' => 'date'])
            ->notEmpty('date_of_brith');
			
        $validator
            ->allowEmpty('temparary_address');

        $validator
            ->notEmpty('permanent_address');

        $validator
            ->requirePresence('city', 'create')
            ->notEmpty('city');    
			
		$validator
            ->requirePresence('station_id', 'create')
            ->notEmpty('city');
			
        /*$validator
            ->requirePresence('contact_name', 'create')
            ->notEmpty('contact_name');
		*/
		$validator->add('contact_name',[
			'notEmptyCheckCName'=>[
			'rule'=>'notEmptyCheckCName',
			'provider'=>'table',
			'message'=>'Please enter the title'
			 ]
			]);
		$validator->add('contact_number',[
			'notEmptyCheckCNumber'=>[
			'rule'=>'notEmptyCheckCNumber',
			'provider'=>'table',
			'message'=>'Please enter the title'
			 ]
			]);
			$validator
            ->allowEmpty('contact_number');

        /*$validator
            ->requirePresence('residence_number', 'create')
            ->notEmpty('residence_number');
		*/
		$validator->add('residence_number',[
			'notEmptyCheckRNumber'=>[
			'rule'=>'notEmptyCheckRNumber',
			'provider'=>'table',
			'message'=>'Please enter the title'
			 ]
			]);
			
        $validator
            ->allowEmpty('mobile_number');

		$validator->add('emergency_contact_number',[
			'notEmptyCheckEmrCNumber'=>[
			'rule'=>'notEmptyCheckEmrCNumber',
			'provider'=>'table',
			'message'=>'Please enter the title'
			 ]
			]);	       
	   /*$validator
            ->requirePresence('emergency_contact_number', 'create')
            ->notEmpty('emergency_contact_number');

        $validator
            ->requirePresence('spouse_name', 'create')
            ->notEmpty('spouse_name');

        $validator
            ->add('male_childs', 'valid', ['rule' => 'numeric'])
            ->requirePresence('male_childs', 'create')
            ->notEmpty('male_childs');

        $validator
            ->add('female_childs', 'valid', ['rule' => 'numeric'])
            ->requirePresence('female_childs', 'create')
            ->notEmpty('female_childs');

        $validator
            ->requirePresence('others', 'create')
            ->notEmpty('others');

		$validator
            ->requirePresence('id_mark', 'create')
            ->notEmpty('id_mark');

        $validator
            ->add('appointment_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('appointment_date');
		*/	
		$validator->add('appointment_date',[
			'notEmptyCheckDOA'=>[
			'rule'=>'notEmptyCheckDOA',
			'provider'=>'table',
			'message'=>'Please enter the title'
			 ]
			]);	 
			
		/*
        $validator
            ->allowEmpty('bank_account');

        $validator
            ->allowEmpty('eobi_no');

        $validator
            ->requirePresence('tax_no', 'create')
            ->notEmpty('tax_no');

        $validator
            ->add('Tax_deduction', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('Tax_deduction');

        $validator
            ->add('no_of_increment', 'valid', ['rule' => 'numeric'])
            ->requirePresence('no_of_increment', 'create')
            ->notEmpty('no_of_increment');

        $validator
            ->add('advance_deduction', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('advance_deduction');

        $validator
            ->allowEmpty('social_security_no');

        $validator
            ->add('anual_increment', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('anual_increment');

        $validator
            ->add('new_increment', 'valid', ['rule' => 'numeric'])
            ->requirePresence('new_increment', 'create')
            ->notEmpty('new_increment');
		
        $validator
            ->add('basic_pay', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('basic_pay');
		*/
		$validator->add('basic_pay',[
			'notEmptyCheckBPay'=>[
			'rule'=>'notEmptyCheckBPay',
			'provider'=>'table',
			'message'=>'Please enter the title'
			 ]
			]);	 
		/*
        $validator
            ->add('dearness_allowance', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('dearness_allowance');

        $validator
            ->add('mess_allowance', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('mess_allowance');

        $validator
            ->add('gpa_allowance', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('gpa_allowance');

        $validator
            ->add('other_allowance', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('other_allowance');

        $validator
            ->add('leaving_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('leaving_date');

        $validator
            ->allowEmpty('leaving_reason');

        $validator
            ->allowEmpty('attendance_code');

        $validator
            ->add('is_active', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('is_active');
		*/
        return $validator;
    }
	public function notEmptyCheckCName($value,$context)
	{
        if(empty($context['data']['contact_name'])) {
            return false;
        } else {
            return true;
        }
    }
	public function notEmptyCheckCNumber($value,$context)
	{
        if(empty($context['data']['contact_number'])) {
            return false;
        } else {
            return true;
        }
    }	
	public function notEmptyCheckRNumber($value,$context)
	{
        if(empty($context['data']['contact_name'])) {
            return false;
        } else {
            return true;
        }
    }			
	public function notEmptyCheckEmrCNumber($value,$context)
	{
        if(empty($context['data']['emergency_contact_number'])) {
            return false;
        } else {
            return true;
        }
    }		
	
	public function notEmptyCheckSpName($value,$context)
	{
        if(empty($context['data']['spouse_name'])) {
            return false;
        } else {
            return true;
        }
    }
	public function notEmptyCheckPENo($value,$context)
	{
        if(empty($context['data']['employee_number'])) {
            return false;
        } else {
            return true;
        }
    }			
	public function notEmptyCheckEName($value,$context)
	{
        if(empty($context['data']['employee_name'])) {
            return false;
        } else {
            return true;
        }
    }		
	public function notEmptyCheckFName($value,$context)
	{
        if(empty($context['data']['father_name'])) {
            return false;
        } else {
            return true;
        }
    }	
	public function notEmptyCheckDOA($value,$context)
	{
        if(empty($context['data']['appointment_date'])) {
            return false;
        } else {
            return true;
        }
    }
	public function notEmptyCheckBPay($value,$context)
	{
        if(empty($context['data']['basic_pay'])) {
            return false;
        } else {
            return true;
        }
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
        $rules->add($rules->existsIn(['station_id'], 'Stations'));
        $rules->add($rules->existsIn(['department_id'], 'Departments'));
        $rules->add($rules->existsIn(['company_id'], 'Companies'));
        $rules->add($rules->existsIn(['bank_id'], 'Banks'));
        $rules->add($rules->existsIn(['designation_id'], 'Designations'));
        $rules->add($rules->existsIn(['payscale_id'], 'Payscales'));
        return $rules;
    }
}
