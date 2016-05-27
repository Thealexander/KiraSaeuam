<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aula'), ['action' => 'edit', $aula->Id_Aulas]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aula'), ['action' => 'delete', $aula->Id_Aulas], ['confirm' => __('Are you sure you want to delete # {0}?', $aula->Id_Aulas)]) ?> </li>
        <li><?= $this->Html->link(__('List Aulas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aula'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aulas view large-9 medium-8 columns content">
    <h3><?= h($aula->Id_Aulas) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Codigo Aula') ?></th>
            <td><?= h($aula->Codigo_Aula) ?></td>
        </tr>
        <tr>
            <th><?= __('Descripcion') ?></th>
            <td><?= h($aula->Descripcion) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Aulas') ?></th>
            <td><?= $this->Number->format($aula->Id_Aulas) ?></td>
        </tr>
        <tr>
            <th><?= __('Edificios Id Edificios') ?></th>
            <td><?= $this->Number->format($aula->Edificios_Id_Edificios) ?></td>
        </tr>
    </table>
</div>
