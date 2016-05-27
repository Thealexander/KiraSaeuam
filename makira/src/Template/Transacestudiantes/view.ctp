<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Transacestudiante'), ['action' => 'edit', $transacestudiante->Id_TransacEstudiantes]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Transacestudiante'), ['action' => 'delete', $transacestudiante->Id_TransacEstudiantes], ['confirm' => __('Are you sure you want to delete # {0}?', $transacestudiante->Id_TransacEstudiantes)]) ?> </li>
        <li><?= $this->Html->link(__('List Transacestudiantes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transacestudiante'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="transacestudiantes view large-9 medium-8 columns content">
    <h3><?= h($transacestudiante->Id_TransacEstudiantes) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Descripcion') ?></th>
            <td><?= h($transacestudiante->Descripcion) ?></td>
        </tr>
        <tr>
            <th><?= __('Id TransacEstudiantes') ?></th>
            <td><?= $this->Number->format($transacestudiante->Id_TransacEstudiantes) ?></td>
        </tr>
        <tr>
            <th><?= __('Cantidad Total') ?></th>
            <td><?= $this->Number->format($transacestudiante->Cantidad_Total) ?></td>
        </tr>
        <tr>
            <th><?= __('Estudiantes Id Estudiantes') ?></th>
            <td><?= $this->Number->format($transacestudiante->Estudiantes_Id_Estudiantes) ?></td>
        </tr>
        <tr>
            <th><?= __('Tutores Id Tutores') ?></th>
            <td><?= $this->Number->format($transacestudiante->Tutores_Id_Tutores) ?></td>
        </tr>
        <tr>
            <th><?= __('Personal IdPersonal') ?></th>
            <td><?= $this->Number->format($transacestudiante->Personal_IdPersonal) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Tracsaciones') ?></th>
            <td><?= h($transacestudiante->Fecha_Tracsaciones) ?></td>
        </tr>
    </table>
</div>
