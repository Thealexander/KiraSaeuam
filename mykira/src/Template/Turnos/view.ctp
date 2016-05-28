<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Turno'), ['action' => 'edit', $turno->Id_Turnos]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Turno'), ['action' => 'delete', $turno->Id_Turnos], ['confirm' => __('Are you sure you want to delete # {0}?', $turno->Id_Turnos)]) ?> </li>
        <li><?= $this->Html->link(__('List Turnos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Turno'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="turnos view large-9 medium-8 columns content">
    <h3><?= h($turno->Id_Turnos) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Turno') ?></th>
            <td><?= h($turno->Turno) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Turnos') ?></th>
            <td><?= $this->Number->format($turno->Id_Turnos) ?></td>
        </tr>
    </table>
</div>
