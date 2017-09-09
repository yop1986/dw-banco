<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Cuenta[]|\Cake\Collection\CollectionInterface $cuentas
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cuenta'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Beneficiarios'), ['controller' => 'Beneficiarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Beneficiario'), ['controller' => 'Beneficiarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transacciones'), ['controller' => 'Transacciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaccione'), ['controller' => 'Transacciones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cuentas index large-9 medium-8 columns content">
    <h3><?= __('Cuentas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id', __('Id')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre', __('Nombre')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('cuenta', __('Cuenta')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('balance', __('Balance')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id', __('Usuario')) ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cuentas as $cuenta): ?>
            <tr>
                <td><?= $this->Number->format($cuenta->id) ?></td>
                <td><?= h($cuenta->nombre) ?></td>
                <td><?= h($cuenta->cuenta) ?></td>
                <td><?= $this->Number->currency($cuenta->balance, $cuenta->cl_moneda->simbolo) ?></td>
                <td><?= $cuenta->has('usuario') ? $this->Html->link($cuenta->usuario->usuario, ['controller' => 'Usuarios', 'action' => 'view', $cuenta->usuario->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cuenta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cuenta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cuenta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cuenta->id)]) ?>
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
