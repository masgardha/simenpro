<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InputsFixture
 */
class InputsFixture extends TestFixture
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
                'store_id' => 1,
                'stock_id' => 1,
                'quantity' => 1,
                'description' => 'Lorem ipsum dolor sit amet',
                'date' => '2022-03-12',
                'created' => '2022-03-12 11:10:50',
                'modified' => '2022-03-12 11:10:50',
            ],
        ];
        parent::init();
    }
}
