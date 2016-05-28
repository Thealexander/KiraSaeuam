<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Aula'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aulas index large-9 medium-8 columns content">
    <h3><?= __('Aulas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id_Aulas') ?></th>
                <th><?= $this->Paginator->sort('Codigo_Aula') ?></th>
                <th><?= $this->Paginator->sort('Descripcion') ?></th>
                <th><?= $this->Paginator->sort('Edificios_Id_Edificios') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aulas as $aula): ?>
            <tr>
                <td><?= $this->Number->format($aula->Id_Aulas) ?></td>
                <td><?= h($aula->Codigo_Aula) ?></td>
                <td><?= h($aula->Descripcion) ?></td>
                <td><?= $this->Number->format($aula->Edificios_Id_Edificios) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $aula->Id_Aulas]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aula->Id_Aulas]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aula->Id_Aulas], ['confirm' => __('Are you sure you want to delete # {0}?', $aula->Id_Aulas)]) ?>
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
