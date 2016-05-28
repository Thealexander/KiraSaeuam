<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Turno'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="turnos index large-9 medium-8 columns content">
    <h3><?= __('Turnos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id_Turnos') ?></th>
                <th><?= $this->Paginator->sort('Turno') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($turnos as $turno): ?>
            <tr>
                <td><?= $this->Number->format($turno->Id_Turnos) ?></td>
                <td><?= h($turno->Turno) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $turno->Id_Turnos]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $turno->Id_Turnos]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $turno->Id_Turnos], ['confirm' => __('Are you sure you want to delete # {0}?', $turno->Id_Turnos)]) ?>
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
