<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;
/**
 * User Entity.
 *
 * @property int $id
 * @property string $full_name
 * @property string $email
 * @property string $password
 * @property int $department_id
 * @property \App\Model\Entity\Department $department
 * @property int $station_id
 * @property \App\Model\Entity\Station $station
 * @property int $company_id
 * @property \App\Model\Entity\Company $company
 * @property bool $is_active
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\GroupDetail[] $group_details
 */
class User extends Entity
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

    /**
     * Fields that are excluded from JSON an array versions of the entity.
     *
     * @var array
     */

	protected function _setPassword($value)
	{
		$hasher = new DefaultPasswordHasher();
		return $hasher->hash($value);
	}
}
