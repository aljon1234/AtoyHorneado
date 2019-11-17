<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor $proveedor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proveedor'), ['action' => 'edit', $proveedor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proveedor'), ['action' => 'delete', $proveedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Proveedors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedor'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="proveedors view large-9 medium-8 columns content">
    <h3><?= h($proveedor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre Proveedor') ?></th>
            <td><?= h($proveedor->nombre_proveedor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ruc Proveedor') ?></th>
            <td><?= h($proveedor->ruc_proveedor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($proveedor->id) ?></td>
        </tr>
    </table>
</div>
