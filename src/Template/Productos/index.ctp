<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto[]|\Cake\Collection\CollectionInterface $productos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proveedors'), ['controller' => 'Proveedors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proveedor'), ['controller' => 'Proveedors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tiposproductos'), ['controller' => 'Tiposproductos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tiposproducto'), ['controller' => 'Tiposproductos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productos index large-9 medium-8 columns content">
    <h3><?= __('Productos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_producto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stock_producto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedors_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipoproductos_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= $this->Number->format($producto->id) ?></td>
                <td><?= h($producto->nombre_producto) ?></td>
                <td><?= h($producto->stock_producto) ?></td>
                <td><?= $producto->has('proveedor') ? $this->Html->link($producto->proveedor->id, ['controller' => 'Proveedors', 'action' => 'view', $producto->proveedor->id]) : '' ?></td>
                <td><?= $producto->has('tiposproducto') ? $this->Html->link($producto->tiposproducto->id, ['controller' => 'Tiposproductos', 'action' => 'view', $producto->tiposproducto->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $producto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $producto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
