<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Recruitment Entity
 *
 * @property int $id
 * @property int|null $jobs_id
 * @property int|null $departments_id
 * @property string $recruitment_type
 * @property string|null $available_profile_nbr
 * @property string $state
 * @property int|null $users_id
 * @property \Cake\I18n\DateTime|null $posted_date
 * @property \Cake\I18n\DateTime|null $deadline_date
 *
 * @property \App\Model\Entity\Job $job
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\User $user
 */
class Recruitment extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'jobs_id' => true,
        'departments_id' => true,
        'recruitment_type' => true,
        'available_profile_nbr' => true,
        'state' => true,
        'users_id' => true,
        'posted_date' => true,
        'deadline_date' => true,
        'job' => true,
        'department' => true,
        'user' => true,
    ];
}
