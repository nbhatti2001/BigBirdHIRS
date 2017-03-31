<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Qualification Entity.
 *
 * @property int $id
 * @property int $employee_id
 * @property \App\Model\Entity\Employee $employee
 * @property string $degree
 * @property string $duration
 * @property string $institute
 * @property string $gpa
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $is_active
 */
class Qualification extends Entity
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
