<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Estudiante'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estudiantes index large-9 medium-8 columns content">
    <h3><?= __('Estudiantes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id ') ?></th>
                <th><?= $this->Paginator->sort(' Nombres') ?></th>
                <th><?= $this->Paginator->sort(' Apellidos') ?></th>
                
                <th><?= $this->Paginator->sort('nivel-Periodo') ?></th>
                
               
                <th><?= $this->Paginator->sort('Celular') ?></th>
                
                <th><?= $this->Paginator->sort('Id_Tutores') ?></th>
                <th><?= $this->Paginator->sort('Monto a pagar') ?></th>
               
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estudiantes as $estudiante): ?>
            <tr>
                <td><?= $this->Number->format($estudiante->Id_Estudiantes) ?></td>
                <td><?= h($estudiante->Estudiantes_Nombres) ?></td>
                <td><?= h($estudiante->Estudiantes_Apellidos) ?></td>
                
                <td><?= $this->Number->format($estudiante->nivannio) ?></td>
                
                <td><?= h($estudiante->Celular) ?></td>
                
                <td><?= $this->Number->format($estudiante->Tutores_Id_Tutores) ?></td>
                <td><?= $this->Number->format($estudiante->Monto_a_pagar) ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $estudiante->Id_Estudiantes]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estudiante->Id_Estudiantes]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estudiante->Id_Estudiantes], ['confirm' => __('Are you sure you want to delete # {0}?', $estudiante->Id_Estudiantes)]) ?>
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
