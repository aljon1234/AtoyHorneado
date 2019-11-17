<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipouser $tipouser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipouser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipouser->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipousers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tipousers form large-9 medium-8 columns content">
    <?= $this->Form->create($tipouser) ?>
    <fieldset>
        <legend><?= __('Edit Tipouser') ?></legend>
        <?php
            echo $this->Form->control('rol');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
