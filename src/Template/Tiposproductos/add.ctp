<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiposproducto $tiposproducto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tiposproductos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tiposproductos form large-9 medium-8 columns content">
    <?= $this->Form->create($tiposproducto) ?>
    <fieldset>
        <legend><?= __('Add Tiposproducto') ?></legend>
        <?php
            echo $this->Form->control('nombreTipo_producto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
