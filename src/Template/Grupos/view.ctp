<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Grupo $grupo
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grupo'), ['action' => 'edit', $grupo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grupo'), ['action' => 'delete', $grupo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grupo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="grupos view large-9 medium-8 columns content">
    <h3><?= h($grupo->nombre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descripción') ?></th>
            <td><?= h($grupo->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($grupo->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Usuarios') ?></h4>
        <?php if (!empty($grupo->usuarios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Usuario') ?></th>
                <th scope="col"><?= __('Correo') ?></th>
                <th scope="col"><?= __('Creado') ?></th>
                <th scope="col"><?= __('Activo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($grupo->usuarios as $usuarios): ?>
            <tr>
                <td><?= h($usuarios->id) ?></td>
                <td><?= h($usuarios->usuario) ?></td>
                <td><?= h($usuarios->correo) ?></td>
                <td><?= h($usuarios->creado) ?></td>
                <td><?= h($usuarios->activo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Usuarios', 'action' => 'view', $usuarios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Usuarios', 'action' => 'edit', $usuarios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usuarios', 'action' => 'delete', $usuarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
