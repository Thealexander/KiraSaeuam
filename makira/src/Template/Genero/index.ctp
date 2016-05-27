<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Genero'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="genero index large-9 medium-8 columns content">
    <h3><?= __('Genero') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id_Estudiantes') ?></th>
                <th><?= $this->Paginator->sort('Estudiantes_Nombres') ?></th>
                <th><?= $this->Paginator->sort('Estudiantes_Apellidos') ?></th>
                <th><?= $this->Paginator->sort('Fecha_nacimiento') ?></th>
                <th><?= $this->Paginator->sort('Fecha_registro') ?></th>
                <th><?= $this->Paginator->sort('Fecha_actualizacion') ?></th>
                <th><?= $this->Paginator->sort('Nivel-anio') ?></th>
                <th><?= $this->Paginator->sort('Email') ?></th>
                <th><?= $this->Paginator->sort('Direccion') ?></th>
                <th><?= $this->Paginator->sort('Telefono') ?></th>
                <th><?= $this->Paginator->sort('Celular') ?></th>
                <th><?= $this->Paginator->sort('Notas') ?></th>
                <th><?= $this->Paginator->sort('Sexo') ?></th>
                <th><?= $this->Paginator->sort('genero') ?></th>
                <th><?= $this->Paginator->sort('nacionalidad') ?></th>
                <th><?= $this->Paginator->sort('Cedula') ?></th>
                <th><?= $this->Paginator->sort('Ciudad') ?></th>
                <th><?= $this->Paginator->sort('Departamento') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($genero as $genero): ?>
            <tr>
                <td><?= $this->Number->format($genero->Id_Estudiantes) ?></td>
                <td><?= h($genero->Estudiantes_Nombres) ?></td>
                <td><?= h($genero->Estudiantes_Apellidos) ?></td>
                <td><?= h($genero->Fecha_nacimiento) ?></td>
                <td><?= h($genero->Fecha_registro) ?></td>
                <td><?= h($genero->Fecha_actualizacion) ?></td>
                <td><?= $this->Number->format($genero->Nivel-anio) ?></td>
                <td><?= h($genero->Email) ?></td>
                <td><?= h($genero->Direccion) ?></td>
                <td><?= h($genero->Telefono) ?></td>
                <td><?= h($genero->Celular) ?></td>
                <td><?= $this->Number->format($genero->Notas) ?></td>
                <td><?= h($genero->Sexo) ?></td>
                <td><?= h($genero->genero) ?></td>
                <td><?= h($genero->nacionalidad) ?></td>
                <td><?= h($genero->Cedula) ?></td>
                <td><?= h($genero->Ciudad) ?></td>
                <td><?= h($genero->Departamento) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $genero->Id_Estudiantes]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $genero->Id_Estudiantes]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $genero->Id_Estudiantes], ['confirm' => __('Are you sure you want to delete # {0}?', $genero->Id_Estudiantes)]) ?>
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
