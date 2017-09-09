<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clMoneda->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clMoneda->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cl Monedas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="clMonedas form large-9 medium-8 columns content">
    <?= $this->Form->create($clMoneda) ?>
    <fieldset>
        <legend><?= __('Edit Cl Moneda') ?></legend>
        <?php
            echo $this->Form->control('simbolo', ['label' => __('Simbolo')]);
            echo $this->Form->control('descripcion', ['label' => __('Descripción')]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
