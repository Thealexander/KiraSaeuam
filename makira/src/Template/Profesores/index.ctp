<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Profesore'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profesores index large-9 medium-8 columns content">
    <h3><?= __('Profesores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Personal_Id_Personal') ?></th>
                <th><?= $this->Paginator->sort('Departamentos_Id_Departamentos') ?></th>
                <th><?= $this->Paginator->sort('Fotos_Id_photo') ?></th>
                <th><?= $this->Paginator->sort('documento_vitae') ?></th>
                <th><?= $this->Paginator->sort('Clases_Id_Clases') ?></th>
                <th><?= $this->Paginator->sort('Descripcion') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($profesores as $profesore): ?>
            <tr>
                <td><?= $this->Number->format($profesore->Personal_Id_Personal) ?></td>
                <td><?= $this->Number->format($profesore->Departamentos_Id_Departamentos) ?></td>
                <td><?= h($profesore->Fotos_Id_photo) ?></td>
                <td><?= h($profesore->documento_vitae) ?></td>
                <td><?= $this->Number->format($profesore->Clases_Id_Clases) ?></td>
                <td><?= h($profesore->Descripcion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $profesore->Personal_Id_Personal]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profesore->Personal_Id_Personal]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profesore->Personal_Id_Personal], ['confirm' => __('Are you sure you want to delete # {0}?', $profesore->Personal_Id_Personal)]) ?>
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
