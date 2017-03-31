<?php
namespace App\Model\Table;

use App\Model\Entity\Payscale;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Payscales Model
 *
 * @property \Cake\ORM\Association\HasMany $Employees
 */
class PayscalesTable extends Table
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

        $this->table('payscales');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Employees', [
            'foreignKey' => 'payscale_id'
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
            ->allowEmpty('code');

        $validator
            ->allowEmpty('name');

        $validator
            ->allowEmpty('description');

        $validator
            ->add('min_basic', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('min_basic');

        $validator
            ->add('max_basic', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('max_basic');

        $validator
            ->add('is_active', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('is_active');

        return $validator;
    }
}
