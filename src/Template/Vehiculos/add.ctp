<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vehiculo $vehiculo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Vehiculos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tiposvehiculos'), ['controller' => 'Tiposvehiculos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tiposvehiculo'), ['controller' => 'Tiposvehiculos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vehiculos form large-9 medium-8 columns content">
    <?= $this->Form->create($vehiculo) ?>
    <fieldset>
        <legend><?= __('Add Vehiculo') ?></legend>
        <?php
            echo $this->Form->control('nombre_vehiculo');
            echo $this->Form->control('año_vehiculo');
            echo $this->Form->control('placa_vehiculo');
            echo $this->Form->control('marca_vehiculo');
            echo $this->Form->control('tipovehiculos_id', ['options' => $tiposvehiculos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
