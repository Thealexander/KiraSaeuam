<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Periodo'), ['action' => 'edit', $periodo->Id_Periodo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Periodo'), ['action' => 'delete', $periodo->Id_Periodo], ['confirm' => __('Are you sure you want to delete # {0}?', $periodo->Id_Periodo)]) ?> </li>
        <li><?= $this->Html->link(__('List Periodos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Periodo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="periodos view large-9 medium-8 columns content">
    <h3><?= h($periodo->Id_Periodo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id Periodo') ?></th>
            <td><?= $this->Number->format($periodo->Id_Periodo) ?></td>
        </tr>
        <tr>
            <th><?= __('NumerodePeriodo') ?></th>
            <td><?= $this->Number->format($periodo->NumerodePeriodo) ?></td>
        </tr>
    </table>
</div>
