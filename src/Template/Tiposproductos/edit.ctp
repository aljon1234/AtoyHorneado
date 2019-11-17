<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiposproducto $tiposproducto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tiposproducto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tiposproducto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tiposproductos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tiposproductos form large-9 medium-8 columns content">
    <?= $this->Form->create($tiposproducto) ?>
    <fieldset>
        <legend><?= __('Edit Tiposproducto') ?></legend>
        <?php
            echo $this->Form->control('nombreTipo_producto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
