<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Output[]|\Cake\Collection\CollectionInterface $outputs
 */
?>
<div class="outputs index content">
    <?= $this->Html->link(__('New Output'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Outputs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('store_id') ?></th>
                    <th><?= $this->Paginator->sort('stock_id') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($outputs as $output): ?>
                <tr>
                    <td><?= $this->Number->format($output->id) ?></td>
                    <td><?= $output->has('store') ? $this->Html->link($output->store->name, ['controller' => 'Stores', 'action' => 'view', $output->store->id]) : '' ?></td>
                    <td><?= $output->has('stock') ? $this->Html->link($output->stock->name, ['controller' => 'Stocks', 'action' => 'view', $output->stock->id]) : '' ?></td>
                    <td><?= $this->Number->format($output->quantity) ?></td>
                    <td><?= h($output->description) ?></td>
                    <td><?= h($output->date) ?></td>
                    <td><?= h($output->created) ?></td>
                    <td><?= h($output->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $output->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $output->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $output->id], ['confirm' => __('Are you sure you want to delete # {0}?', $output->id)]) ?>
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
