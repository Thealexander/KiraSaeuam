<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="departamentos index large-9 medium-8 columns content">
    <h3><?= __('Departamentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id_Departamento') ?></th>
                <th><?= $this->Paginator->sort('Departamento_Nombre') ?></th>
                <th><?= $this->Paginator->sort('Descripcion') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($departamentos as $departamento): ?>
            <tr>
                <td><?= $this->Number->format($departamento->Id_Departamento) ?></td>
                <td><?= h($departamento->Departamento_Nombre) ?></td>
                <td><?= h($departamento->Descripcion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $departamento->Id_Departamento]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $departamento->Id_Departamento]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $departamento->Id_Departamento], ['confirm' => __('Are you sure you want to delete # {0}?', $departamento->Id_Departamento)]) ?>
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
