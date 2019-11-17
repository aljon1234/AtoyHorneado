<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedidoproveedor $pedidoproveedor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pedidoproveedor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pedidoproveedor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pedidoproveedors'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pedidoproveedors form large-9 medium-8 columns content">
    <?= $this->Form->create($pedidoproveedor) ?>
    <fieldset>
        <legend><?= __('Edit Pedidoproveedor') ?></legend>
        <?php
            echo $this->Form->control('id_proveedor');
            echo $this->Form->control('pedido_proveedorcol');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
