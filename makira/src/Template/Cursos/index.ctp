<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cursos index large-9 medium-8 columns content">
    <h3><?= __('Cursos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Turnos_Id_Turnos') ?></th>
                <th><?= $this->Paginator->sort('Clases_Id_Clases') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cursos as $curso): ?>
            <tr>
                <td><?= $this->Number->format($curso->Turnos_Id_Turnos) ?></td>
                <td><?= $this->Number->format($curso->Clases_Id_Clases) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $curso->Turnos_Id_Turnos]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $curso->Turnos_Id_Turnos]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $curso->Turnos_Id_Turnos], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->Turnos_Id_Turnos)]) ?>
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
