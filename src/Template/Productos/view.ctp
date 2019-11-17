<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Producto'), ['action' => 'edit', $producto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Producto'), ['action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Productos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proveedors'), ['controller' => 'Proveedors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedor'), ['controller' => 'Proveedors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tiposproductos'), ['controller' => 'Tiposproductos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tiposproducto'), ['controller' => 'Tiposproductos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productos view large-9 medium-8 columns content">
    <h3><?= h($producto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre Producto') ?></th>
            <td><?= h($producto->nombre_producto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stock Producto') ?></th>
            <td><?= h($producto->stock_producto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proveedor') ?></th>
            <td><?= $producto->has('proveedor') ? $this->Html->link($producto->proveedor->id, ['controller' => 'Proveedors', 'action' => 'view', $producto->proveedor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tiposproducto') ?></th>
            <td><?= $producto->has('tiposproducto') ? $this->Html->link($producto->tiposproducto->id, ['controller' => 'Tiposproductos', 'action' => 'view', $producto->tiposproducto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($producto->id) ?></td>
        </tr>
    </table>
</div>
