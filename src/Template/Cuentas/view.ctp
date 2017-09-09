<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Cuenta $cuenta
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cuenta'), ['action' => 'edit', $cuenta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cuenta'), ['action' => 'delete', $cuenta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cuenta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cuentas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cuenta'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Beneficiarios'), ['controller' => 'Beneficiarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Beneficiario'), ['controller' => 'Beneficiarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transacciones'), ['controller' => 'Transacciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaccione'), ['controller' => 'Transacciones', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cuentas view large-9 medium-8 columns content">
    <h3><?= h($cuenta->nombre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cuenta') ?></th>
            <td><?= h($cuenta->cuenta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titular') ?></th>
            <td><?= $cuenta->has('usuario') ? $this->Html->link($cuenta->usuario->nombre, ['controller' => 'Usuarios', 'action' => 'view', $cuenta->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Balance') ?></th>
            <td><?= $this->Number->currency($cuenta->balance, $cuenta->cl_moneda->simbolo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reserva') ?></th>
            <td><?= $this->Number->currency($cuenta->reserva, $cuenta->cl_moneda->simbolo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($cuenta->creado) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Beneficiarios') ?></h4>
        <?php if (!empty($cuenta->beneficiarios)): ?>
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
            <?php foreach ($cuenta->beneficiarios as $beneficiarios): ?>
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
    <div class="related">
        <h4><?= __('Related Transacciones') ?></h4>
        <?php if (!empty($cuenta->transacciones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Correlativo') ?></th>
                <th scope="col"><?= __('Monto') ?></th>
                <th scope="col"><?= __('Cuenta Id') ?></th>
                <th scope="col"><?= __('Estado Operacion') ?></th>
                <th scope="col"><?= __('Tipo Operacion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cuenta->transacciones as $transacciones): ?>
            <tr>
                <td><?= h($transacciones->id) ?></td>
                <td><?= h($transacciones->correlativo) ?></td>
                <td><?= h($transacciones->monto) ?></td>
                <td><?= h($transacciones->cuenta_id) ?></td>
                <td><?= h($transacciones->estado_operacion) ?></td>
                <td><?= h($transacciones->tipo_operacion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Transacciones', 'action' => 'view', $transacciones->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Transacciones', 'action' => 'edit', $transacciones->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transacciones', 'action' => 'delete', $transacciones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transacciones->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
