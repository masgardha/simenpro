<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Output $output
 * @var string[]|\Cake\Collection\CollectionInterface $stores
 * @var string[]|\Cake\Collection\CollectionInterface $stocks
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $output->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $output->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Outputs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="outputs form content">
            <?= $this->Form->create($output) ?>
            <fieldset>
                <legend><?= __('Edit Output') ?></legend>
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
