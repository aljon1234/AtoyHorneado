<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProveedorPedidoproveedor $proveedorPedidoproveedor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proveedor Pedidoproveedor'), ['action' => 'edit', $proveedorPedidoproveedor->proveedores_idproveedores]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proveedor Pedidoproveedor'), ['action' => 'delete', $proveedorPedidoproveedor->proveedores_idproveedores], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedorPedidoproveedor->proveedores_idproveedores)]) ?> </li>
        <li><?= $this->Html->link(__('List Proveedor Pedidoproveedor'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedor Pedidoproveedor'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="proveedorPedidoproveedor view large-9 medium-8 columns content">
    <h3><?= h($proveedorPedidoproveedor->proveedores_idproveedores) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proveedores Idproveedores') ?></th>
            <td><?= $this->Number->format($proveedorPedidoproveedor->proveedores_idproveedores) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pedido Proveedor Idpedido Proveedor') ?></th>
            <td><?= $this->Number->format($proveedorPedidoproveedor->pedido_proveedor_idpedido_proveedor) ?></td>
        </tr>
    </table>
</div>
