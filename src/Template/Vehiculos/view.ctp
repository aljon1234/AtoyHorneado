<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vehiculo $vehiculo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vehiculo'), ['action' => 'edit', $vehiculo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vehiculo'), ['action' => 'delete', $vehiculo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehiculo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vehiculos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehiculo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tiposvehiculos'), ['controller' => 'Tiposvehiculos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tiposvehiculo'), ['controller' => 'Tiposvehiculos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vehiculos view large-9 medium-8 columns content">
    <h3><?= h($vehiculo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre Vehiculo') ?></th>
            <td><?= h($vehiculo->nombre_vehiculo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Año Vehiculo') ?></th>
            <td><?= h($vehiculo->año_vehiculo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Placa Vehiculo') ?></th>
            <td><?= h($vehiculo->placa_vehiculo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marca Vehiculo') ?></th>
            <td><?= h($vehiculo->marca_vehiculo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tiposvehiculo') ?></th>
            <td><?= $vehiculo->has('tiposvehiculo') ? $this->Html->link($vehiculo->tiposvehiculo->id, ['controller' => 'Tiposvehiculos', 'action' => 'view', $vehiculo->tiposvehiculo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vehiculo->id) ?></td>
        </tr>
    </table>
</div>
