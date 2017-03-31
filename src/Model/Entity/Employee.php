<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity.
 *
 * @property int $id
 * @property string $employee_no
 * @property string $employee_name
 * @property string $father_name
 * @property string $gender
 * @property int $station_id
 * @property \App\Model\Entity\Station $station
 * @property int $department_id
 * @property \App\Model\Entity\Department $department
 * @property int $company_id
 * @property \App\Model\Entity\Company $company
 * @property string $temparary_address
 * @property string $permanent_address
 * @property string $city
 * @property string $contact_name
 * @property string $contact_number
 * @property string $residence_number
 * @property string $mobile_number
 * @property string $emergency_contact_number
 * @property string $spouse_name
 * @property int $male_childs
 * @property int $female_childs
 * @property string $others
 * @property string $cnic
 * @property string $id_mark
 * @property \Cake\I18n\Time $date_of_brith
 * @property \Cake\I18n\Time $appointment_date
 * @property \Cake\I18n\Time $last_permanent_date
 * @property string $bank_account
 * @property int $bank_id
 * @property \App\Model\Entity\Bank $bank
 * @property string $eobi_no
 * @property string $tax_no
 * @property int $Tax_deduction
 * @property int $no_of_increment
 * @property int $advance_deduction
 * @property string $social_security_no
 * @property int $designation_id
 * @property \App\Model\Entity\Designation $designation
 * @property int $payscale_id
 * @property \App\Model\Entity\Payscale $payscale
 * @property int $anual_increment
 * @property int $new_increment
 * @property int $basic_pay
 * @property int $dearness_allowance
 * @property int $mess_allowance
 * @property int $gpa_allowance
 * @property int $other_allowance
 * @property \Cake\I18n\Time $leaving_date
 * @property string $leaving_reason
 * @property string $attendance_code
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $is_active
 * @property \App\Model\Entity\SalaryMaster[] $salary_masters
 */
class Employee extends Entity
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
