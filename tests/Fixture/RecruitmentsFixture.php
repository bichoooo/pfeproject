<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RecruitmentsFixture
 */
class RecruitmentsFixture extends TestFixture
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
                'jobs_id' => 1,
                'departments_id' => 1,
                'recruitment_type' => 'Lorem ipsum dolor sit amet',
                'available_profile_nbr' => 'Lorem ipsum dolor sit amet',
                'state' => 'Lorem ipsum dolor sit amet',
                'users_id' => 1,
                'posted_date' => 1745663436,
                'deadline_date' => 1745663436,
            ],
        ];
        parent::init();
    }
}
