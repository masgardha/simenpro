<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store $store
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Store'), ['action' => 'edit', $store->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Store'), ['action' => 'delete', $store->id], ['confirm' => __('Are you sure you want to delete # {0}?', $store->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Stores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Store'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stores view content">
            <h3><?= h($store->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $store->has('user') ? $this->Html->link($store->user->name, ['controller' => 'Users', 'action' => 'view', $store->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($store->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($store->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($store->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($store->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($store->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($store->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Inputs') ?></h4>
                <?php if (!empty($store->inputs)) : ?>
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
                        <?php foreach ($store->inputs as $inputs) : ?>
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
                <?php if (!empty($store->outputs)) : ?>
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
                        <?php foreach ($store->outputs as $outputs) : ?>
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
            <div class="related">
                <h4><?= __('Related Stocks') ?></h4>
                <?php if (!empty($store->stocks)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Store Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Stocks') ?></th>
                            <th><?= __('Production Price') ?></th>
                            <th><?= __('Sell Price') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($store->stocks as $stocks) : ?>
                        <tr>
                            <td><?= h($stocks->id) ?></td>
                            <td><?= h($stocks->store_id) ?></td>
                            <td><?= h($stocks->name) ?></td>
                            <td><?= h($stocks->description) ?></td>
                            <td><?= h($stocks->stocks) ?></td>
                            <td><?= h($stocks->production_price) ?></td>
                            <td><?= h($stocks->sell_price) ?></td>
                            <td><?= h($stocks->created) ?></td>
                            <td><?= h($stocks->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Stocks', 'action' => 'view', $stocks->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Stocks', 'action' => 'edit', $stocks->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Stocks', 'action' => 'delete', $stocks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stocks->id)]) ?>
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
