<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Personal'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="personal index large-9 medium-8 columns content">
    <h3><?= __('Personal') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id_Personal') ?></th>
                <th><?= $this->Paginator->sort('Personal_Nombre') ?></th>
                <th><?= $this->Paginator->sort('Personal_Apellidos') ?></th>
                <th><?= $this->Paginator->sort('Telefono') ?></th>
                <th><?= $this->Paginator->sort('Celular') ?></th>
                <th><?= $this->Paginator->sort('Email') ?></th>
                <th><?= $this->Paginator->sort('Direccion') ?></th>
                <th><?= $this->Paginator->sort('Fecha_nacimiento') ?></th>
                <th><?= $this->Paginator->sort('Fecha_registro') ?></th>
                <th><?= $this->Paginator->sort('Fecha_modificacion') ?></th>
                <th><?= $this->Paginator->sort('Salario') ?></th>
                <th><?= $this->Paginator->sort('Cargos_Id_Cargos') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($personal as $personal): ?>
            <tr>
                <td><?= $this->Number->format($personal->Id_Personal) ?></td>
                <td><?= h($personal->Personal_Nombre) ?></td>
                <td><?= h($personal->Personal_Apellidos) ?></td>
                <td><?= h($personal->Telefono) ?></td>
                <td><?= h($personal->Celular) ?></td>
                <td><?= h($personal->Email) ?></td>
                <td><?= h($personal->Direccion) ?></td>
                <td><?= h($personal->Fecha_nacimiento) ?></td>
                <td><?= h($personal->Fecha_registro) ?></td>
                <td><?= h($personal->Fecha_modificacion) ?></td>
                <td><?= $this->Number->format($personal->Salario) ?></td>
                <td><?= $this->Number->format($personal->Cargos_Id_Cargos) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $personal->Id_Personal]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $personal->Id_Personal]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $personal->Id_Personal], ['confirm' => __('Are you sure you want to delete # {0}?', $personal->Id_Personal)]) ?>
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
