<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Carrera'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="carreras index large-9 medium-8 columns content">
    <h3><?= __('Carreras') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('IdCarrera') ?></th>
                <th><?= $this->Paginator->sort('Nombre_Carrera') ?></th>
                <th><?= $this->Paginator->sort('Id_Facultad') ?></th>
                <th><?= $this->Paginator->sort('Descripcion') ?></th>
                <th><?= $this->Paginator->sort('Duracion') ?></th>
                <th><?= $this->Paginator->sort('Id_ConjuntoClases') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($carreras as $carrera): ?>
            <tr>
                <td><?= $this->Number->format($carrera->IdCarrera) ?></td>
                <td><?= h($carrera->Nombre_Carrera) ?></td>
                <td><?= $this->Number->format($carrera->Id_Facultad) ?></td>
                <td><?= h($carrera->Descripcion) ?></td>
                <td><?= $this->Number->format($carrera->Duracion) ?></td>
                <td><?= $this->Number->format($carrera->Id_ConjuntoClases) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $carrera->IdCarrera]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carrera->IdCarrera]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carrera->IdCarrera], ['confirm' => __('Are you sure you want to delete # {0}?', $carrera->IdCarrera)]) ?>
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
