<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stock[]|\Cake\Collection\CollectionInterface $stocks
 */
?>
<div class="stocks index content">
    <?= $this->Html->link(__('New Stock'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Stocks') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('store_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('stocks') ?></th>
                    <th><?= $this->Paginator->sort('production_price') ?></th>
                    <th><?= $this->Paginator->sort('sell_price') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stocks as $stock): ?>
                <tr>
                    <td><?= $this->Number->format($stock->id) ?></td>
                    <td><?= $stock->has('store') ? $this->Html->link($stock->store->name, ['controller' => 'Stores', 'action' => 'view', $stock->store->id]) : '' ?></td>
                    <td><?= h($stock->name) ?></td>
                    <td><?= $this->Number->format($stock->stocks) ?></td>
                    <td><?= $this->Number->format($stock->production_price) ?></td>
                    <td><?= $this->Number->format($stock->sell_price) ?></td>
                    <td><?= h($stock->created) ?></td>
                    <td><?= h($stock->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $stock->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stock->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stock->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
