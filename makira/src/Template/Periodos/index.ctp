<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Periodo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="periodos index large-9 medium-8 columns content">
    <h3><?= __('Periodos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id_Periodo') ?></th>
                <th><?= $this->Paginator->sort('NumerodePeriodo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($periodos as $periodo): ?>
            <tr>
                <td><?= $this->Number->format($periodo->Id_Periodo) ?></td>
                <td><?= $this->Number->format($periodo->NumerodePeriodo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $periodo->Id_Periodo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $periodo->Id_Periodo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $periodo->Id_Periodo], ['confirm' => __('Are you sure you want to delete # {0}?', $periodo->Id_Periodo)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
