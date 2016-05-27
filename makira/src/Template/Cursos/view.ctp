<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Curso'), ['action' => 'edit', $curso->Turnos_Id_Turnos]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Curso'), ['action' => 'delete', $curso->Turnos_Id_Turnos], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->Turnos_Id_Turnos)]) ?> </li>
        <li><?= $this->Html->link(__('List Cursos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cursos view large-9 medium-8 columns content">
    <h3><?= h($curso->Turnos_Id_Turnos) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Turnos Id Turnos') ?></th>
            <td><?= $this->Number->format($curso->Turnos_Id_Turnos) ?></td>
        </tr>
        <tr>
            <th><?= __('Clases Id Clases') ?></th>
            <td><?= $this->Number->format($curso->Clases_Id_Clases) ?></td>
        </tr>
    </table>
</div>
