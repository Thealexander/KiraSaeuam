<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tutore'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tutores index large-9 medium-8 columns content">
    <h3><?= __('Tutores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id_tutores') ?></th>
                <th><?= $this->Paginator->sort('Nombres_Tutor1') ?></th>
                <th><?= $this->Paginator->sort('Nombres_Tutor2') ?></th>
                <th><?= $this->Paginator->sort('Nombres_Tutor3') ?></th>
                <th><?= $this->Paginator->sort('Apellidos_Tutor1') ?></th>
                <th><?= $this->Paginator->sort('Apellidos_Tutor2') ?></th>
                <th><?= $this->Paginator->sort('Apellidos_Tutor3') ?></th>
                <th><?= $this->Paginator->sort('Telefono') ?></th>
                <th><?= $this->Paginator->sort('Celular_Opcion1') ?></th>
                <th><?= $this->Paginator->sort('Celuar_opcion2') ?></th>
                <th><?= $this->Paginator->sort('Direccion') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('Cedula_Tutor1') ?></th>
                <th><?= $this->Paginator->sort('Cedula_Tutor2') ?></th>
                <th><?= $this->Paginator->sort('Cedula_Tutor3') ?></th>
                <th><?= $this->Paginator->sort('Estudiantes_Id_Estudiantes') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tutores as $tutore): ?>
            <tr>
                <td><?= $this->Number->format($tutore->Id_tutores) ?></td>
                <td><?= h($tutore->Nombres_Tutor1) ?></td>
                <td><?= h($tutore->Nombres_Tutor2) ?></td>
                <td><?= h($tutore->Nombres_Tutor3) ?></td>
                <td><?= h($tutore->Apellidos_Tutor1) ?></td>
                <td><?= h($tutore->Apellidos_Tutor2) ?></td>
                <td><?= h($tutore->Apellidos_Tutor3) ?></td>
                <td><?= h($tutore->Telefono) ?></td>
                <td><?= h($tutore->Celular_Opcion1) ?></td>
                <td><?= h($tutore->Celuar_opcion2) ?></td>
                <td><?= h($tutore->Direccion) ?></td>
                <td><?= h($tutore->email) ?></td>
                <td><?= h($tutore->Cedula_Tutor1) ?></td>
                <td><?= h($tutore->Cedula_Tutor2) ?></td>
                <td><?= h($tutore->Cedula_Tutor3) ?></td>
                <td><?= $this->Number->format($tutore->Estudiantes_Id_Estudiantes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tutore->Id_tutores]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tutore->Id_tutores]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tutore->Id_tutores], ['confirm' => __('Are you sure you want to delete # {0}?', $tutore->Id_tutores)]) ?>
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
