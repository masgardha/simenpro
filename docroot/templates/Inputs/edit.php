<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Input $input
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
                ['action' => 'delete', $input->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $input->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Inputs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="inputs form content">
            <?= $this->Form->create($input) ?>
            <fieldset>
                <legend><?= __('Edit Input') ?></legend>
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
