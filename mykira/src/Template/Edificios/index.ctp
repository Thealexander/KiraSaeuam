<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Edificio'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="edificios index large-9 medium-8 columns content">
    <h3><?= __('Edificios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id_Edificios') ?></th>
                <th><?= $this->Paginator->sort('Codigo_Edificio') ?></th>
                <th><?= $this->Paginator->sort('Descripcion') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($edificios as $edificio): ?>
            <tr>
                <td><?= $this->Number->format($edificio->Id_Edificios) ?></td>
                <td><?= h($edificio->Codigo_Edificio) ?></td>
                <td><?= h($edificio->Descripcion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $edificio->Id_Edificios]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $edificio->Id_Edificios]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $edificio->Id_Edificios], ['confirm' => __('Are you sure you want to delete # {0}?', $edificio->Id_Edificios)]) ?>
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
