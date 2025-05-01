<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Job Entity
 *
 * @property int $id
 * @property int|null $departments_id
 * @property string|null $title
 * @property string|null $code
 * @property string|null $qualification_required
 * @property string|null $job_state
 * @property string|null $description
 * @property string|null $salary
 * @property string|null $benifits
 *
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\User[] $users
 */
class Job extends Entity
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
        'departments_id' => true,
        'title' => true,
        'code' => true,
        'qualification_required' => true,
        'job_state' => true,
        'description' => true,
        'salary' => true,
        'benifits' => true,
        'department' => true,
        'users' => true,
    ];
}
