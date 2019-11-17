<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tipousers'), ['controller' => 'Tipousers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipouser'), ['controller' => 'Tipousers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('nombre_usuario');
            echo $this->Form->control('apellido_usuario');
            echo $this->Form->control('dni_usuario');
            echo $this->Form->control('direccion_usuario');
            echo $this->Form->control('tipousers_id', ['options' => $tipousers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
