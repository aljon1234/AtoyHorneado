<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProveedorPedidoproveedor $proveedorPedidoproveedor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $proveedorPedidoproveedor->proveedores_idproveedores],
                ['confirm' => __('Are you sure you want to delete # {0}?', $proveedorPedidoproveedor->proveedores_idproveedores)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Proveedor Pedidoproveedor'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="proveedorPedidoproveedor form large-9 medium-8 columns content">
    <?= $this->Form->create($proveedorPedidoproveedor) ?>
    <fieldset>
        <legend><?= __('Edit Proveedor Pedidoproveedor') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
