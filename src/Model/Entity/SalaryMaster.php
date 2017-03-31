<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SalaryMaster Entity.
 *
 * @property int $id
 * @property int $employee_id
 * @property \App\Model\Entity\Employee $employee
 * @property int $station_id
 * @property \App\Model\Entity\Station $station
 * @property int $department_id
 * @property \App\Model\Entity\Department $department
 * @property int $designation_id
 * @property \App\Model\Entity\Designation $designation
 * @property string $peno
 * @property string $salary_month
 * @property int $working_days
 * @property float $actual_basic
 * @property float $basic_pay
 * @property float $house_rent_allowance
 * @property float $medical_allowance
 * @property int $over_time_days
 * @property int $over_time_days_amount
 * @property int $over_time_hours
 * @property int $over_time_hours_amount
 * @property int $over_time_amount
 * @property int $gross_salary
 * @property int $tax_deduction
 * @property int $eobi_deduction
 * @property int $advance_deduction
 * @property int $other_deduction
 * @property int $mess_deduction
 * @property int $net_salary
 * @property int $bank_id
 * @property \App\Model\Entity\Bank $bank
 * @property bool $is_bank
 */
class SalaryMaster extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
