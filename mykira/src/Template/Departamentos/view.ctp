<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Departamento'), ['action' => 'edit', $departamento->Id_Departamento]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Departamento'), ['action' => 'delete', $departamento->Id_Departamento], ['confirm' => __('Are you sure you want to delete # {0}?', $departamento->Id_Departamento)]) ?> </li>
        <li><?= $this->Html->link(__('List Departamentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departamento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="departamentos view large-9 medium-8 columns content">
    <h3><?= h($departamento->Id_Departamento) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Departamento Nombre') ?></th>
            <td><?= h($departamento->Departamento_Nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Descripcion') ?></th>
            <td><?= h($departamento->Descripcion) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Departamento') ?></th>
            <td><?= $this->Number->format($departamento->Id_Departamento) ?></td>
        </tr>
    </table>
</div>
