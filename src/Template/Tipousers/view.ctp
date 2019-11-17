<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipouser $tipouser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipouser'), ['action' => 'edit', $tipouser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipouser'), ['action' => 'delete', $tipouser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipouser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipousers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipouser'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipousers view large-9 medium-8 columns content">
    <h3><?= h($tipouser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Rol') ?></th>
            <td><?= h($tipouser->rol) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tipouser->id) ?></td>
        </tr>
    </table>
</div>
