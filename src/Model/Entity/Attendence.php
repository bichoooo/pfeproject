<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Attendence Entity
 *
 * @property int $id
 * @property int|null $users_id
 * @property \Cake\I18n\Date|null $date
 * @property \Cake\I18n\Time|null $check_in_time
 * @property \Cake\I18n\Time|null $check_out_time
 * @property string|null $status
 *
 * @property \App\Model\Entity\User $user
 */
class Attendence extends Entity
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
        'users_id' => true,
        'date' => true,
        'check_in_time' => true,
        'check_out_time' => true,
        'status' => true,
        'user' => true,
    ];
}
