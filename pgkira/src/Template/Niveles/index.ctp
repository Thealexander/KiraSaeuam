<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Nivele'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="niveles index large-9 medium-8 columns content">
    <h3><?= __('Niveles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id_Niveles') ?></th>
                <th><?= $this->Paginator->sort('Nombre_Nivel') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($niveles as $nivele): ?>
            <tr>
                <td><?= $this->Number->format($nivele->Id_Niveles) ?></td>
                <td><?= h($nivele->Nombre_Nivel) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $nivele->Id_Niveles]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $nivele->Id_Niveles]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $nivele->Id_Niveles], ['confirm' => __('Are you sure you want to delete # {0}?', $nivele->Id_Niveles)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
