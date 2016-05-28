<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Personal'), ['action' => 'edit', $personal->Id_Personal]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Personal'), ['action' => 'delete', $personal->Id_Personal], ['confirm' => __('Are you sure you want to delete # {0}?', $personal->Id_Personal)]) ?> </li>
        <li><?= $this->Html->link(__('List Personal'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personal'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="personal view large-9 medium-8 columns content">
    <h3><?= h($personal->Id_Personal) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Personal Nombre') ?></th>
            <td><?= h($personal->Personal_Nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Personal Apellidos') ?></th>
            <td><?= h($personal->Personal_Apellidos) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono') ?></th>
            <td><?= h($personal->Telefono) ?></td>
        </tr>
        <tr>
            <th><?= __('Celular') ?></th>
            <td><?= h($personal->Celular) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($personal->Email) ?></td>
        </tr>
        <tr>
            <th><?= __('Direccion') ?></th>
            <td><?= h($personal->Direccion) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Personal') ?></th>
            <td><?= $this->Number->format($personal->Id_Personal) ?></td>
        </tr>
        <tr>
            <th><?= __('Salario') ?></th>
            <td><?= $this->Number->format($personal->Salario) ?></td>
        </tr>
        <tr>
            <th><?= __('Cargos Id Cargos') ?></th>
            <td><?= $this->Number->format($personal->Cargos_Id_Cargos) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Nacimiento') ?></th>
            <td><?= h($personal->Fecha_nacimiento) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Registro') ?></th>
            <td><?= h($personal->Fecha_registro) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Modificacion') ?></th>
            <td><?= h($personal->Fecha_modificacion) ?></td>
        </tr>
    </table>
</div>
