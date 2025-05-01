<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * JobApplication Entity
 *
 * @property int $id
 * @property int|null $jobs_id
 * @property string|null $condidate_name
 * @property string|null $email
 * @property string|null $resume
 * @property string|null $cover_letter
 * @property string|null $status
 *
 * @property \App\Model\Entity\Job $job
 */
class JobApplication extends Entity
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
        'condidate_name' => true,
        'email' => true,
        'resume' => true,
        'cover_letter' => true,
        'status' => true,
        'job' => true,
    ];
}
