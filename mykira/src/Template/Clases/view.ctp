<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Clase'), ['action' => 'edit', $clase->Id_Clases]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Clase'), ['action' => 'delete', $clase->Id_Clases], ['confirm' => __('Are you sure you want to delete # {0}?', $clase->Id_Clases)]) ?> </li>
        <li><?= $this->Html->link(__('List Clases'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Clase'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clases view large-9 medium-8 columns content">
    <h3><?= h($clase->Id_Clases) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre Clase') ?></th>
            <td><?= h($clase->Nombre_Clase) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Clases') ?></th>
            <td><?= $this->Number->format($clase->Id_Clases) ?></td>
        </tr>
        <tr>
            <th><?= __('Creditos') ?></th>
            <td><?= $this->Number->format($clase->Creditos) ?></td>
        </tr>
        <tr>
            <th><?= __('Activo') ?></th>
            <td><?= $this->Number->format($clase->Activo) ?></td>
        </tr>
        <tr>
            <th><?= __('Aulas Id Aulas') ?></th>
            <td><?= $this->Number->format($clase->Aulas_Id_Aulas) ?></td>
        </tr>
        <tr>
            <th><?= __('Profesores Id Profesores') ?></th>
            <td><?= $this->Number->format($clase->Profesores_Id_Profesores) ?></td>
        </tr>
        <tr>
            <th><?= __('Turno Id Turnos') ?></th>
            <td><?= $this->Number->format($clase->Turno_Id_Turnos) ?></td>
        </tr>
        <tr>
            <th><?= __('Departamentos Id Depertamentos') ?></th>
            <td><?= $this->Number->format($clase->Departamentos_Id_Depertamentos) ?></td>
        </tr>
        <tr>
            <th><?= __('Niveles Id Niveles') ?></th>
            <td><?= $this->Number->format($clase->Niveles_Id_Niveles) ?></td>
        </tr>
    </table>
</div>
