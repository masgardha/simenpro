<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stock $stock
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Stock'), ['action' => 'edit', $stock->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Stock'), ['action' => 'delete', $stock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stock->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Stocks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Stock'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stocks view content">
            <h3><?= h($stock->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Store') ?></th>
                    <td><?= $stock->has('store') ? $this->Html->link($stock->store->name, ['controller' => 'Stores', 'action' => 'view', $stock->store->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($stock->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($stock->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stocks') ?></th>
                    <td><?= $this->Number->format($stock->stocks) ?></td>
                </tr>
                <tr>
                    <th><?= __('Production Price') ?></th>
                    <td><?= $this->Number->format($stock->production_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sell Price') ?></th>
                    <td><?= $this->Number->format($stock->sell_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($stock->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($stock->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($stock->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Inputs') ?></h4>
                <?php if (!empty($stock->inputs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Store Id') ?></th>
                            <th><?= __('Stock Id') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($stock->inputs as $inputs) : ?>
                        <tr>
                            <td><?= h($inputs->id) ?></td>
                            <td><?= h($inputs->store_id) ?></td>
                            <td><?= h($inputs->stock_id) ?></td>
                            <td><?= h($inputs->quantity) ?></td>
                            <td><?= h($inputs->description) ?></td>
                            <td><?= h($inputs->date) ?></td>
                            <td><?= h($inputs->created) ?></td>
                            <td><?= h($inputs->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Inputs', 'action' => 'view', $inputs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Inputs', 'action' => 'edit', $inputs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Inputs', 'action' => 'delete', $inputs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inputs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Outputs') ?></h4>
                <?php if (!empty($stock->outputs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Store Id') ?></th>
                            <th><?= __('Stock Id') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($stock->outputs as $outputs) : ?>
                        <tr>
                            <td><?= h($outputs->id) ?></td>
                            <td><?= h($outputs->store_id) ?></td>
                            <td><?= h($outputs->stock_id) ?></td>
                            <td><?= h($outputs->quantity) ?></td>
                            <td><?= h($outputs->description) ?></td>
                            <td><?= h($outputs->date) ?></td>
                            <td><?= h($outputs->created) ?></td>
                            <td><?= h($outputs->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Outputs', 'action' => 'view', $outputs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Outputs', 'action' => 'edit', $outputs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Outputs', 'action' => 'delete', $outputs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $outputs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
