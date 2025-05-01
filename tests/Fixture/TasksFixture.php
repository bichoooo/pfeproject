<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TasksFixture
 */
class TasksFixture extends TestFixture
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
                'users_id' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'priority' => 'Lorem ipsum dolor sit amet',
                'status' => 'Lorem ipsum dolor sit amet',
                'start_date' => '2025-04-26',
                'deadline' => '2025-04-26',
            ],
        ];
        parent::init();
    }
}
