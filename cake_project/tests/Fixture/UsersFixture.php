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
                'name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit a',
                'mobile' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '2025-01-10 09:15:49',
                'modified' => '2025-01-10 09:15:49',
            ],
        ];
        parent::init();
    }
}
