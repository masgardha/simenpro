<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Output $output
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Output'), ['action' => 'edit', $output->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Output'), ['action' => 'delete', $output->id], ['confirm' => __('Are you sure you want to delete # {0}?', $output->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Outputs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Output'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="outputs view content">
            <h3><?= h($output->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Store') ?></th>
                    <td><?= $output->has('store') ? $this->Html->link($output->store->name, ['controller' => 'Stores', 'action' => 'view', $output->store->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Stock') ?></th>
                    <td><?= $output->has('stock') ? $this->Html->link($output->stock->name, ['controller' => 'Stocks', 'action' => 'view', $output->stock->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($output->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($output->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($output->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($output->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($output->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($output->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
