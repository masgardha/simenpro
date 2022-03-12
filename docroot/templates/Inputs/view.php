<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Input $input
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Input'), ['action' => 'edit', $input->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Input'), ['action' => 'delete', $input->id], ['confirm' => __('Are you sure you want to delete # {0}?', $input->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Inputs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Input'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="inputs view content">
            <h3><?= h($input->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Store') ?></th>
                    <td><?= $input->has('store') ? $this->Html->link($input->store->name, ['controller' => 'Stores', 'action' => 'view', $input->store->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Stock') ?></th>
                    <td><?= $input->has('stock') ? $this->Html->link($input->stock->name, ['controller' => 'Stocks', 'action' => 'view', $input->stock->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($input->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($input->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($input->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($input->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($input->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($input->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
