<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'full_name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'adress' => 'Lorem ipsum dolor sit amet',
                'phone_number' => 1,
                'birth_date' => 1745663355,
                'profile_picture' => 'Lorem ipsum dolor sit amet',
                'created_at' => 1745663355,
                'updated_at' => 1745663355,
                'state' => 'Lorem ipsum dolor sit amet',
                'gender' => 'Lorem ipsum dolor sit amet',
                'hire_date' => '2025-04-26',
                'job_id' => 1,
                'departments_id' => 1,
            ],
        ];
        parent::init();
    }
}
