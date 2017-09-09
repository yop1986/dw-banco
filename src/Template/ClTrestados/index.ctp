<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\ClTrestado[]|\Cake\Collection\CollectionInterface $clTrestados
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
    </ul>
</nav>
<div class="clTrestados index large-9 medium-8 columns content">
    <h3><?= __('Cl Trestados') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('codigo', __('Código')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre', __('Nombre')) ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clTrestados as $clTrestado): ?>
            <tr>
                <td><?= h($clTrestado->codigo) ?></td>
                <td><?= h($clTrestado->nombre) ?></td>
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
