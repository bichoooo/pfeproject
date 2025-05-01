<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LeaveRequestsFixture
 */
class LeaveRequestsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'leaves_type' => 'Lorem ipsum dolor sit amet',
                'start_date' => '2025-04-26',
                'end_date' => '2025-04-26',
                'state' => 'Lorem ipsum dolor sit amet',
                'requested_date' => '2025-04-26',
                'approval_date' => '2025-04-26',
                'reason' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
