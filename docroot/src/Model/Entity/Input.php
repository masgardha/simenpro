<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Input Entity
 *
 * @property int $id
 * @property int $store_id
 * @property int $stock_id
 * @property int $quantity
 * @property string|null $description
 * @property \Cake\I18n\FrozenDate $date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Store $store
 * @property \App\Model\Entity\Stock $stock
 */
class Input extends Entity
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
        'stock_id' => true,
        'quantity' => true,
        'description' => true,
        'date' => true,
        'created' => true,
        'modified' => true,
        'store' => true,
        'stock' => true,
    ];
}
