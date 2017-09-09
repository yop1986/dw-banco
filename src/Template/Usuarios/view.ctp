<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Usuario $usuario
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Beneficiarios'), ['controller' => 'Beneficiarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Beneficiario'), ['controller' => 'Beneficiarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cuentas'), ['controller' => 'Cuentas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cuenta'), ['controller' => 'Cuentas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->nombre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= h($usuario->usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo') ?></th>
            <td><?= h($usuario->correo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Teléfono') ?></th>
            <td><?= h($usuario->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grupo') ?></th>
            <td><?= $usuario->grupo ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($usuario->creado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($usuario->modificado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activo') ?></th>
            <td><?= $usuario->activo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cuentas') ?></h4>
        <?php if (!empty($usuario->cuentas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Cuenta') ?></th>
                <th scope="col"><?= __('Balance') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->cuentas as $cuentas): ?>
            <tr>
                <td><?= h($cuentas->id) ?></td>
                <td><?= h($cuentas->nombre) ?></td>
                <td><?= h($cuentas->cuenta) ?></td>
                <td><?= h($cuentas->balance) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cuentas', 'action' => 'view', $cuentas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cuentas', 'action' => 'edit', $cuentas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cuentas', 'action' => 'delete', $cuentas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cuentas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Beneficiarios') ?></h4>
        <?php if (!empty($usuario->beneficiarios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Monto Max') ?></th>
                <th scope="col"><?= __('Cant Max') ?></th>
                <th scope="col"><?= __('Clave') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col"><?= __('Cuenta Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->beneficiarios as $beneficiarios): ?>
            <tr>
                <td><?= h($beneficiarios->id) ?></td>
                <td><?= h($beneficiarios->monto_max) ?></td>
                <td><?= h($beneficiarios->cant_max) ?></td>
                <td><?= h($beneficiarios->clave) ?></td>
                <td><?= h($beneficiarios->estado) ?></td>
                <td><?= h($beneficiarios->usuario_id) ?></td>
                <td><?= h($beneficiarios->cuenta_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Beneficiarios', 'action' => 'view', $beneficiarios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Beneficiarios', 'action' => 'edit', $beneficiarios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Beneficiarios', 'action' => 'delete', $beneficiarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $beneficiarios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
