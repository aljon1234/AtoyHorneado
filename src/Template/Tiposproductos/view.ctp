<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiposproducto $tiposproducto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tiposproducto'), ['action' => 'edit', $tiposproducto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tiposproducto'), ['action' => 'delete', $tiposproducto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposproducto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tiposproductos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tiposproducto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tiposproductos view large-9 medium-8 columns content">
    <h3><?= h($tiposproducto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NombreTipo Producto') ?></th>
            <td><?= h($tiposproducto->nombreTipo_producto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tiposproducto->id) ?></td>
        </tr>
    </table>
</div>
