<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cargo'), ['action' => 'edit', $cargo->Id_Cargos]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cargo'), ['action' => 'delete', $cargo->Id_Cargos], ['confirm' => __('Are you sure you want to delete # {0}?', $cargo->Id_Cargos)]) ?> </li>
        <li><?= $this->Html->link(__('List Cargos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cargo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cargos view large-9 medium-8 columns content">
    <h3><?= h($cargo->Id_Cargos) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Cargo') ?></th>
            <td><?= h($cargo->Cargo) ?></td>
        </tr>
        <tr>
            <th><?= __('Descripcion') ?></th>
            <td><?= h($cargo->Descripcion) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Cargos') ?></th>
            <td><?= $this->Number->format($cargo->Id_Cargos) ?></td>
        </tr>
    </table>
</div>
