<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductoVentum[]|\Cake\Collection\CollectionInterface $productoVenta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Producto Ventum'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ventas'), ['controller' => 'Ventas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Venta'), ['controller' => 'Ventas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productoVenta index large-9 medium-8 columns content">
    <h3><?= __('Producto Venta') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('productos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ventas_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productoVenta as $productoVentum): ?>
            <tr>
                <td><?= $productoVentum->has('producto') ? $this->Html->link($productoVentum->producto->id, ['controller' => 'Productos', 'action' => 'view', $productoVentum->producto->id]) : '' ?></td>
                <td><?= $productoVentum->has('venta') ? $this->Html->link($productoVentum->venta->id, ['controller' => 'Ventas', 'action' => 'view', $productoVentum->venta->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productoVentum->productos_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productoVentum->productos_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productoVentum->productos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productoVentum->productos_id)]) ?>
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
