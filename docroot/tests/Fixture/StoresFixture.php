<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StoresFixture
 */
class StoresFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum d',
                'created' => '2022-03-12 09:54:54',
                'modified' => '2022-03-12 09:54:54',
            ],
        ];
        parent::init();
    }
}
