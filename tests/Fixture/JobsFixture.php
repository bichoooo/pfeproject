<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * JobsFixture
 */
class JobsFixture extends TestFixture
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
                'departments_id' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'code' => 'Lorem ip',
                'qualification_required' => 'Lorem ipsum dolor sit amet',
                'job_state' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                'salary' => 'Lorem ipsum dolor sit amet',
                'benifits' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
