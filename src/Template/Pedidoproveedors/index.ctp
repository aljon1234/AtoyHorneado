<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedidoproveedor[]|\Cake\Collection\CollectionInterface $pedidoproveedors
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pedidoproveedor'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedidoproveedors index large-9 medium-8 columns content">
    <h3><?= __('Pedidoproveedors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_proveedor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pedido_proveedorcol') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidoproveedors as $pedidoproveedor): ?>
            <tr>
                <td><?= $this->Number->format($pedidoproveedor->id) ?></td>
                <td><?= h($pedidoproveedor->id_proveedor) ?></td>
                <td><?= h($pedidoproveedor->pedido_proveedorcol) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pedidoproveedor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pedidoproveedor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pedidoproveedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidoproveedor->id)]) ?>
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
