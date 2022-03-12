<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Input[]|\Cake\Collection\CollectionInterface $inputs
 */
?>
<div class="inputs index content">
    <?= $this->Html->link(__('New Input'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Inputs') ?></h3>
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
                <?php foreach ($inputs as $input): ?>
                <tr>
                    <td><?= $this->Number->format($input->id) ?></td>
                    <td><?= $input->has('store') ? $this->Html->link($input->store->name, ['controller' => 'Stores', 'action' => 'view', $input->store->id]) : '' ?></td>
                    <td><?= $input->has('stock') ? $this->Html->link($input->stock->name, ['controller' => 'Stocks', 'action' => 'view', $input->stock->id]) : '' ?></td>
                    <td><?= $this->Number->format($input->quantity) ?></td>
                    <td><?= h($input->description) ?></td>
                    <td><?= h($input->date) ?></td>
                    <td><?= h($input->created) ?></td>
                    <td><?= h($input->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $input->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $input->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $input->id], ['confirm' => __('Are you sure you want to delete # {0}?', $input->id)]) ?>
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
