<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Profesore'), ['action' => 'edit', $profesore->Personal_Id_Personal]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Profesore'), ['action' => 'delete', $profesore->Personal_Id_Personal], ['confirm' => __('Are you sure you want to delete # {0}?', $profesore->Personal_Id_Personal)]) ?> </li>
        <li><?= $this->Html->link(__('List Profesores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profesore'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="profesores view large-9 medium-8 columns content">
    <h3><?= h($profesore->Personal_Id_Personal) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Fotos Id Photo') ?></th>
            <td><?= h($profesore->Fotos_Id_photo) ?></td>
        </tr>
        <tr>
            <th><?= __('Documento Vitae') ?></th>
            <td><?= h($profesore->documento_vitae) ?></td>
        </tr>
        <tr>
            <th><?= __('Descripcion') ?></th>
            <td><?= h($profesore->Descripcion) ?></td>
        </tr>
        <tr>
            <th><?= __('Personal Id Personal') ?></th>
            <td><?= $this->Number->format($profesore->Personal_Id_Personal) ?></td>
        </tr>
        <tr>
            <th><?= __('Departamentos Id Departamentos') ?></th>
            <td><?= $this->Number->format($profesore->Departamentos_Id_Departamentos) ?></td>
        </tr>
        <tr>
            <th><?= __('Clases Id Clases') ?></th>
            <td><?= $this->Number->format($profesore->Clases_Id_Clases) ?></td>
        </tr>
    </table>
</div>
