<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Stock Entity
 *
 * @property int $id
 * @property int $store_id
 * @property string $name
 * @property string|null $description
 * @property int $stocks
 * @property int|null $production_price
 * @property int|null $sell_price
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Store $store
 * @property \App\Model\Entity\Input[] $inputs
 * @property \App\Model\Entity\Output[] $outputs
 */
class Stock extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'store_id' => true,
        'name' => true,
        'description' => true,
        'stocks' => true,
        'production_price' => true,
        'sell_price' => true,
        'created' => true,
        'modified' => true,
        'store' => true,
        'inputs' => true,
        'outputs' => true,
    ];
}
