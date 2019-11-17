<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venta $venta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Venta'), ['action' => 'edit', $venta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Venta'), ['action' => 'delete', $venta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ventas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Venta'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ventas view large-9 medium-8 columns content">
    <h3><?= h($venta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cliente') ?></th>
            <td><?= $venta->has('cliente') ? $this->Html->link($venta->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $venta->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($venta->id) ?></td>
        </tr>
    </table>
</div>
