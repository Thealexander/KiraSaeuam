<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estudiante'), ['action' => 'edit', $estudiante->Id_Estudiantes]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estudiante'), ['action' => 'delete', $estudiante->Id_Estudiantes], ['confirm' => __('Are you sure you want to delete # {0}?', $estudiante->Id_Estudiantes)]) ?> </li>
        <li><?= $this->Html->link(__('List Estudiantes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estudiante'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estudiantes view large-9 medium-8 columns content">
    <h3><?= h($estudiante->Id_Estudiantes) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Estudiantes Nombres') ?></th>
            <td><?= h($estudiante->Estudiantes_Nombres) ?></td>
        </tr>
        <tr>
            <th><?= __('Estudiantes Apellidos') ?></th>
            <td><?= h($estudiante->Estudiantes_Apellidos) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($estudiante->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Direccion') ?></th>
            <td><?= h($estudiante->Direccion) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono') ?></th>
            <td><?= h($estudiante->Telefono) ?></td>
        </tr>
        <tr>
            <th><?= __('Celular') ?></th>
            <td><?= h($estudiante->Celular) ?></td>
        </tr>
        <tr>
            <th><?= __('Sexo') ?></th>
            <td><?= h($estudiante->sexo) ?></td>
        </tr>
        <tr>
            <th><?= __('Genero') ?></th>
            <td><?= h($estudiante->genero) ?></td>
        </tr>
        <tr>
            <th><?= __('Nacionalidad') ?></th>
            <td><?= h($estudiante->nacionalidad) ?></td>
        </tr>
        <tr>
            <th><?= __('Cedula') ?></th>
            <td><?= h($estudiante->Cedula) ?></td>
        </tr>
        <tr>
            <th><?= __('Ciudad') ?></th>
            <td><?= h($estudiante->Ciudad) ?></td>
        </tr>
        <tr>
            <th><?= __('Departamento') ?></th>
            <td><?= h($estudiante->Departamento) ?></td>
        </tr>
        <tr>
            <th><?= __('Photo') ?></th>
            <td><?= h($estudiante->photo) ?></td>
        </tr>
        <tr>
            <th><?= __('Photo Di') ?></th>
            <td><?= h($estudiante->photo_di) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Estudiantes') ?></th>
            <td><?= $this->Number->format($estudiante->Id_Estudiantes) ?></td>
        </tr>
        <tr>
            <th><?= __('Nivannio') ?></th>
            <td><?= $this->Number->format($estudiante->nivannio) ?></td>
        </tr>
        <tr>
            <th><?= __('Notas') ?></th>
            <td><?= $this->Number->format($estudiante->Notas) ?></td>
        </tr>
        <tr>
            <th><?= __('Decuento') ?></th>
            <td><?= $this->Number->format($estudiante->decuento) ?></td>
        </tr>
        <tr>
            <th><?= __('Tutores Id Tutores') ?></th>
            <td><?= $this->Number->format($estudiante->Tutores_Id_Tutores) ?></td>
        </tr>
        <tr>
            <th><?= __('Monto A Pagar') ?></th>
            <td><?= $this->Number->format($estudiante->Monto_a_pagar) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Nacimiento') ?></th>
            <td><?= h($estudiante->Fecha_nacimiento) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Registro') ?></th>
            <td><?= h($estudiante->Fecha_registro) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Actualizacion') ?></th>
            <td><?= h($estudiante->Fecha_actualizacion) ?></td>
        </tr>
    </table>
</div>
