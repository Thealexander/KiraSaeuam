<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Edificio'), ['action' => 'edit', $edificio->Id_Edificios]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Edificio'), ['action' => 'delete', $edificio->Id_Edificios], ['confirm' => __('Are you sure you want to delete # {0}?', $edificio->Id_Edificios)]) ?> </li>
        <li><?= $this->Html->link(__('List Edificios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Edificio'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="edificios view large-9 medium-8 columns content">
    <h3><?= h($edificio->Id_Edificios) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Codigo Edificio') ?></th>
            <td><?= h($edificio->Codigo_Edificio) ?></td>
        </tr>
        <tr>
            <th><?= __('Descripcion') ?></th>
            <td><?= h($edificio->Descripcion) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Edificios') ?></th>
            <td><?= $this->Number->format($edificio->Id_Edificios) ?></td>
        </tr>
    </table>
</div>
