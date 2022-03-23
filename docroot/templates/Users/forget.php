<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="row">
    <div class="column-responsive column-100">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Lupa Password') ?></legend>
                <?php
                echo $this->Form->control('email');
                echo $this->Form->control('Password Baru', ['type' => 'password']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <p><a href="login">Login</a> | <a href="registration">Registration</a>  <p>
                <?= $this->Form->end() ?>
        </div>
    </div>
</div>
