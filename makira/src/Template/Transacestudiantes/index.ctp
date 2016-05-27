<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Transacestudiante'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="transacestudiantes index large-9 medium-8 columns content">
    <h3><?= __('Transacestudiantes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id_TransacEstudiantes') ?></th>
                <th><?= $this->Paginator->sort('Fecha_Tracsaciones') ?></th>
                <th><?= $this->Paginator->sort('Cantidad_Total') ?></th>
                <th><?= $this->Paginator->sort('Descripcion') ?></th>
                <th><?= $this->Paginator->sort('Estudiantes_Id_Estudiantes') ?></th>
                <th><?= $this->Paginator->sort('Tutores_Id_Tutores') ?></th>
                <th><?= $this->Paginator->sort('Personal_IdPersonal') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transacestudiantes as $transacestudiante): ?>
            <tr>
                <td><?= $this->Number->format($transacestudiante->Id_TransacEstudiantes) ?></td>
                <td><?= h($transacestudiante->Fecha_Tracsaciones) ?></td>
                <td><?= $this->Number->format($transacestudiante->Cantidad_Total) ?></td>
                <td><?= h($transacestudiante->Descripcion) ?></td>
                <td><?= $this->Number->format($transacestudiante->Estudiantes_Id_Estudiantes) ?></td>
                <td><?= $this->Number->format($transacestudiante->Tutores_Id_Tutores) ?></td>
                <td><?= $this->Number->format($transacestudiante->Personal_IdPersonal) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $transacestudiante->Id_TransacEstudiantes]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transacestudiante->Id_TransacEstudiantes]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transacestudiante->Id_TransacEstudiantes], ['confirm' => __('Are you sure you want to delete # {0}?', $transacestudiante->Id_TransacEstudiantes)]) ?>
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
