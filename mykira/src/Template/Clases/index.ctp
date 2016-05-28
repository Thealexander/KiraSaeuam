<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Clase'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clases index large-9 medium-8 columns content">
    <h3><?= __('Clases') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id_Clases') ?></th>
                <th><?= $this->Paginator->sort('Nombre_Clase') ?></th>
                <th><?= $this->Paginator->sort('Creditos') ?></th>
                <th><?= $this->Paginator->sort('Activo') ?></th>
                <th><?= $this->Paginator->sort('Aulas_Id_Aulas') ?></th>
                <th><?= $this->Paginator->sort('Profesores_Id_Profesores') ?></th>
                <th><?= $this->Paginator->sort('Turno_Id_Turnos') ?></th>
                <th><?= $this->Paginator->sort('Departamentos_Id_Depertamentos') ?></th>
                <th><?= $this->Paginator->sort('Niveles_Id_Niveles') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clases as $clase): ?>
            <tr>
                <td><?= $this->Number->format($clase->Id_Clases) ?></td>
                <td><?= h($clase->Nombre_Clase) ?></td>
                <td><?= $this->Number->format($clase->Creditos) ?></td>
                <td><?= $this->Number->format($clase->Activo) ?></td>
                <td><?= $this->Number->format($clase->Aulas_Id_Aulas) ?></td>
                <td><?= $this->Number->format($clase->Profesores_Id_Profesores) ?></td>
                <td><?= $this->Number->format($clase->Turno_Id_Turnos) ?></td>
                <td><?= $this->Number->format($clase->Departamentos_Id_Depertamentos) ?></td>
                <td><?= $this->Number->format($clase->Niveles_Id_Niveles) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $clase->Id_Clases]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clase->Id_Clases]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clase->Id_Clases], ['confirm' => __('Are you sure you want to delete # {0}?', $clase->Id_Clases)]) ?>
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
