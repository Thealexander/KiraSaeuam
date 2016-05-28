<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Genero'), ['action' => 'edit', $genero->Id_Estudiantes]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Genero'), ['action' => 'delete', $genero->Id_Estudiantes], ['confirm' => __('Are you sure you want to delete # {0}?', $genero->Id_Estudiantes)]) ?> </li>
        <li><?= $this->Html->link(__('List Genero'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genero'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="genero view large-9 medium-8 columns content">
    <h3><?= h($genero->Id_Estudiantes) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Estudiantes Nombres') ?></th>
            <td><?= h($genero->Estudiantes_Nombres) ?></td>
        </tr>
        <tr>
            <th><?= __('Estudiantes Apellidos') ?></th>
            <td><?= h($genero->Estudiantes_Apellidos) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($genero->Email) ?></td>
        </tr>
        <tr>
            <th><?= __('Direccion') ?></th>
            <td><?= h($genero->Direccion) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono') ?></th>
            <td><?= h($genero->Telefono) ?></td>
        </tr>
        <tr>
            <th><?= __('Celular') ?></th>
            <td><?= h($genero->Celular) ?></td>
        </tr>
        <tr>
            <th><?= __('Sexo') ?></th>
            <td><?= h($genero->Sexo) ?></td>
        </tr>
        <tr>
            <th><?= __('Genero') ?></th>
            <td><?= h($genero->genero) ?></td>
        </tr>
        <tr>
            <th><?= __('Nacionalidad') ?></th>
            <td><?= h($genero->nacionalidad) ?></td>
        </tr>
        <tr>
            <th><?= __('Cedula') ?></th>
            <td><?= h($genero->Cedula) ?></td>
        </tr>
        <tr>
            <th><?= __('Ciudad') ?></th>
            <td><?= h($genero->Ciudad) ?></td>
        </tr>
        <tr>
            <th><?= __('Departamento') ?></th>
            <td><?= h($genero->Departamento) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Estudiantes') ?></th>
            <td><?= $this->Number->format($genero->Id_Estudiantes) ?></td>
        </tr>
        <tr>
            <th><?= __('Nivel-anio') ?></th>
            <td><?= $this->Number->format($genero->Nivel-anio) ?></td>
        </tr>
        <tr>
            <th><?= __('Notas') ?></th>
            <td><?= $this->Number->format($genero->Notas) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Nacimiento') ?></th>
            <td><?= h($genero->Fecha_nacimiento) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Registro') ?></th>
            <td><?= h($genero->Fecha_registro) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Actualizacion') ?></th>
            <td><?= h($genero->Fecha_actualizacion) ?></td>
        </tr>
    </table>
</div>
