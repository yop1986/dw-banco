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
                ['action' => 'delete', $cuenta->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cuenta->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cuentas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Beneficiarios'), ['controller' => 'Beneficiarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Beneficiario'), ['controller' => 'Beneficiarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transacciones'), ['controller' => 'Transacciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaccione'), ['controller' => 'Transacciones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cuentas form large-9 medium-8 columns content">
    <?= $this->Form->create($cuenta) ?>
    <fieldset>
        <legend><?= __('Edit Cuenta') ?></legend>
        <?php
            echo $this->Form->control('nombre', ['label' => __('Nombre')]);
            echo $this->Form->control('cuenta', ['label' => __('Cuenta')]);
            echo $this->Form->control('balance', ['label' => __('Balance')]);
            echo $this->Form->control('usuario_id', ['label' => __('Usuario'), 'options' => $usuarios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
