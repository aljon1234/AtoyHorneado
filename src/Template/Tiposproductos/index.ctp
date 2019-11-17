<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiposproducto[]|\Cake\Collection\CollectionInterface $tiposproductos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tiposproducto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tiposproductos index large-9 medium-8 columns content">
    <h3><?= __('Tiposproductos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombreTipo_producto') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tiposproductos as $tiposproducto): ?>
            <tr>
                <td><?= $this->Number->format($tiposproducto->id) ?></td>
                <td><?= h($tiposproducto->nombreTipo_producto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tiposproducto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposproducto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposproducto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposproducto->id)]) ?>
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
