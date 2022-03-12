<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Output $output
 * @var \Cake\Collection\CollectionInterface|string[] $stores
 * @var \Cake\Collection\CollectionInterface|string[] $stocks
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Outputs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="outputs form content">
            <?= $this->Form->create($output) ?>
            <fieldset>
                <legend><?= __('Add Output') ?></legend>
                <?php
                    echo $this->Form->control('store_id', ['options' => $stores]);
                    echo $this->Form->control('stock_id', ['options' => $stocks]);
                    echo $this->Form->control('quantity');
                    echo $this->Form->control('description');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
