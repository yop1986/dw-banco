<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="usuarios form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Ingreso') ?></legend>
        <?php
            echo $this->Form->control('usuario', ['label' => __('Usuario')]);
            echo $this->Form->control('contrasena', ['label' => __('Contraseña'), 'type' => 'password']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
