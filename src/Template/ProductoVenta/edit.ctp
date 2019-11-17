<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductoVentum $productoVentum
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productoVentum->productos_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productoVentum->productos_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Producto Venta'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ventas'), ['controller' => 'Ventas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Venta'), ['controller' => 'Ventas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productoVenta form large-9 medium-8 columns content">
    <?= $this->Form->create($productoVentum) ?>
    <fieldset>
        <legend><?= __('Edit Producto Ventum') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
