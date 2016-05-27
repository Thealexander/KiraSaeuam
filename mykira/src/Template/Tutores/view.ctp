<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tutore'), ['action' => 'edit', $tutore->Id_tutores]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tutore'), ['action' => 'delete', $tutore->Id_tutores], ['confirm' => __('Are you sure you want to delete # {0}?', $tutore->Id_tutores)]) ?> </li>
        <li><?= $this->Html->link(__('List Tutores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tutore'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tutores view large-9 medium-8 columns content">
    <h3><?= h($tutore->Id_tutores) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombres Tutor1') ?></th>
            <td><?= h($tutore->Nombres_Tutor1) ?></td>
        </tr>
        <tr>
            <th><?= __('Nombres Tutor2') ?></th>
            <td><?= h($tutore->Nombres_Tutor2) ?></td>
        </tr>
        <tr>
            <th><?= __('Nombres Tutor3') ?></th>
            <td><?= h($tutore->Nombres_Tutor3) ?></td>
        </tr>
        <tr>
            <th><?= __('Apellidos Tutor1') ?></th>
            <td><?= h($tutore->Apellidos_Tutor1) ?></td>
        </tr>
        <tr>
            <th><?= __('Apellidos Tutor2') ?></th>
            <td><?= h($tutore->Apellidos_Tutor2) ?></td>
        </tr>
        <tr>
            <th><?= __('Apellidos Tutor3') ?></th>
            <td><?= h($tutore->Apellidos_Tutor3) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono') ?></th>
            <td><?= h($tutore->Telefono) ?></td>
        </tr>
        <tr>
            <th><?= __('Celular Opcion1') ?></th>
            <td><?= h($tutore->Celular_Opcion1) ?></td>
        </tr>
        <tr>
            <th><?= __('Celuar Opcion2') ?></th>
            <td><?= h($tutore->Celuar_opcion2) ?></td>
        </tr>
        <tr>
            <th><?= __('Direccion') ?></th>
            <td><?= h($tutore->Direccion) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($tutore->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Cedula Tutor1') ?></th>
            <td><?= h($tutore->Cedula_Tutor1) ?></td>
        </tr>
        <tr>
            <th><?= __('Cedula Tutor2') ?></th>
            <td><?= h($tutore->Cedula_Tutor2) ?></td>
        </tr>
        <tr>
            <th><?= __('Cedula Tutor3') ?></th>
            <td><?= h($tutore->Cedula_Tutor3) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Tutores') ?></th>
            <td><?= $this->Number->format($tutore->Id_tutores) ?></td>
        </tr>
        <tr>
            <th><?= __('Estudiantes Id Estudiantes') ?></th>
            <td><?= $this->Number->format($tutore->Estudiantes_Id_Estudiantes) ?></td>
        </tr>
    </table>
</div>
