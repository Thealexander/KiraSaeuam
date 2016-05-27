<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cargo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cargos index large-9 medium-8 columns content">
    <h3><?= __('Cargos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id_Cargos') ?></th>
                <th><?= $this->Paginator->sort('Cargo') ?></th>
                <th><?= $this->Paginator->sort('Descripcion') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cargos as $cargo): ?>
            <tr>
                <td><?= $this->Number->format($cargo->Id_Cargos) ?></td>
                <td><?= h($cargo->Cargo) ?></td>
                <td><?= h($cargo->Descripcion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cargo->Id_Cargos]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cargo->Id_Cargos]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cargo->Id_Cargos], ['confirm' => __('Are you sure you want to delete # {0}?', $cargo->Id_Cargos)]) ?>
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
