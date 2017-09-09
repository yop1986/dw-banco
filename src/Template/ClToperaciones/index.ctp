<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\ClToperacione[]|\Cake\Collection\CollectionInterface $clToperaciones
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
    </ul>
</nav>
<div class="clToperaciones index large-9 medium-8 columns content">
    <h3><?= __('Cl Toperaciones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id', __('Id')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre', __('Nombre')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion', __('Descripción')) ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clToperaciones as $clToperacione): ?>
            <tr>
                <td><?= $this->Number->format($clToperacione->id) ?></td>
                <td><?= h($clToperacione->nombre) ?></td>
                <td><?= h($clToperacione->descripcion) ?></td>
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
