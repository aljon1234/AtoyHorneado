<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $producto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Proveedors'), ['controller' => 'Proveedors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proveedor'), ['controller' => 'Proveedors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tiposproductos'), ['controller' => 'Tiposproductos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tiposproducto'), ['controller' => 'Tiposproductos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productos form large-9 medium-8 columns content">
    <?= $this->Form->create($producto) ?>
    <fieldset>
        <legend><?= __('Edit Producto') ?></legend>
        <?php
            echo $this->Form->control('nombre_producto');
            echo $this->Form->control('stock_producto');
            echo $this->Form->control('proveedors_id', ['options' => $proveedors]);
            echo $this->Form->control('tipoproductos_id', ['options' => $tiposproductos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
