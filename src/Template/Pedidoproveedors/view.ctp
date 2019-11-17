<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedidoproveedor $pedidoproveedor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pedidoproveedor'), ['action' => 'edit', $pedidoproveedor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pedidoproveedor'), ['action' => 'delete', $pedidoproveedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidoproveedor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pedidoproveedors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedidoproveedor'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pedidoproveedors view large-9 medium-8 columns content">
    <h3><?= h($pedidoproveedor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Proveedor') ?></th>
            <td><?= h($pedidoproveedor->id_proveedor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pedido Proveedorcol') ?></th>
            <td><?= h($pedidoproveedor->pedido_proveedorcol) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pedidoproveedor->id) ?></td>
        </tr>
    </table>
</div>
