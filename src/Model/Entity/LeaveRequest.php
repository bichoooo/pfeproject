<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LeaveRequest Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $leaves_type
 * @property \Cake\I18n\Date|null $start_date
 * @property \Cake\I18n\Date|null $end_date
 * @property string|null $state
 * @property \Cake\I18n\Date|null $requested_date
 * @property \Cake\I18n\Date|null $approval_date
 * @property string|null $reason
 *
 * @property \App\Model\Entity\User $user
 */
class LeaveRequest extends Entity
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
        'user_id' => true,
        'leaves_type' => true,
        'start_date' => true,
        'end_date' => true,
        'state' => true,
        'requested_date' => true,
        'approval_date' => true,
        'reason' => true,
        'user' => true,
    ];
}
