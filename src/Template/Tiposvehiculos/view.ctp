<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiposvehiculo $tiposvehiculo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tiposvehiculo'), ['action' => 'edit', $tiposvehiculo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tiposvehiculo'), ['action' => 'delete', $tiposvehiculo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposvehiculo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tiposvehiculos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tiposvehiculo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tiposvehiculos view large-9 medium-8 columns content">
    <h3><?= h($tiposvehiculo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NombreTipoVehiculo') ?></th>
            <td><?= h($tiposvehiculo->nombreTipoVehiculo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tiposvehiculo->id) ?></td>
        </tr>
    </table>
</div>
