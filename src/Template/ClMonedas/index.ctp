<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\ClMoneda[]|\Cake\Collection\CollectionInterface $clMonedas
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cl Moneda'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clMonedas index large-9 medium-8 columns content">
    <h3><?= __('Cl Monedas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id', __('Id')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('simbolo', __('Simbolo')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion', __('Descripción')) ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clMonedas as $clMoneda): ?>
            <tr>
                <td><?= $this->Number->format($clMoneda->id) ?></td>
                <td><?= h($clMoneda->simbolo) ?></td>
                <td><?= h($clMoneda->descripcion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $clMoneda->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clMoneda->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clMoneda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clMoneda->id)]) ?>
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
