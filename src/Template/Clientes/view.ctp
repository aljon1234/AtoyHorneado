<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehiculos'), ['controller' => 'Vehiculos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehiculo'), ['controller' => 'Vehiculos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientes view large-9 medium-8 columns content">
    <h3><?= h($cliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre Cliente') ?></th>
            <td><?= h($cliente->Nombre_cliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido Cliente') ?></th>
            <td><?= h($cliente->Apellido_cliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dni Cliente') ?></th>
            <td><?= h($cliente->dni_cliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telef Cliente') ?></th>
            <td><?= h($cliente->telef_cliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion Cliente') ?></th>
            <td><?= h($cliente->direccion_cliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Clientescol') ?></th>
            <td><?= h($cliente->clientescol) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vehiculo') ?></th>
            <td><?= $cliente->has('vehiculo') ? $this->Html->link($cliente->vehiculo->id, ['controller' => 'Vehiculos', 'action' => 'view', $cliente->vehiculo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cliente->id) ?></td>
        </tr>
    </table>
</div>
