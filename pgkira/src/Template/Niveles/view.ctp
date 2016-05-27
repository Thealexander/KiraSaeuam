<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Nivele'), ['action' => 'edit', $nivele->Id_Niveles]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Nivele'), ['action' => 'delete', $nivele->Id_Niveles], ['confirm' => __('Are you sure you want to delete # {0}?', $nivele->Id_Niveles)]) ?> </li>
        <li><?= $this->Html->link(__('List Niveles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nivele'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="niveles view large-9 medium-8 columns content">
    <h3><?= h($nivele->Id_Niveles) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre Nivel') ?></th>
            <td><?= h($nivele->Nombre_Nivel) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Niveles') ?></th>
            <td><?= $this->Number->format($nivele->Id_Niveles) ?></td>
        </tr>
    </table>
</div>
