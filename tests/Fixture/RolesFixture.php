<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RolesFixture
 */
class RolesFixture extends TestFixture
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
                'is_active' => 'Lorem ipsum dolor sit amet',
                'created_at' => '2025-04-26',
                'updated_at' => '2025-04-26',
            ],
        ];
        parent::init();
    }
}
