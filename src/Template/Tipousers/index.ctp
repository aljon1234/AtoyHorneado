<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipouser[]|\Cake\Collection\CollectionInterface $tipousers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipouser'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipousers index large-9 medium-8 columns content">
    <h3><?= __('Tipousers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rol') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipousers as $tipouser): ?>
            <tr>
                <td><?= $this->Number->format($tipouser->id) ?></td>
                <td><?= h($tipouser->rol) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tipouser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipouser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipouser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipouser->id)]) ?>
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
