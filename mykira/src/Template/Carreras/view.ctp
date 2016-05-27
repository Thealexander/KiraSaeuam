<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Carrera'), ['action' => 'edit', $carrera->IdCarrera]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Carrera'), ['action' => 'delete', $carrera->IdCarrera], ['confirm' => __('Are you sure you want to delete # {0}?', $carrera->IdCarrera)]) ?> </li>
        <li><?= $this->Html->link(__('List Carreras'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Carrera'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="carreras view large-9 medium-8 columns content">
    <h3><?= h($carrera->IdCarrera) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre Carrera') ?></th>
            <td><?= h($carrera->Nombre_Carrera) ?></td>
        </tr>
        <tr>
            <th><?= __('Descripcion') ?></th>
            <td><?= h($carrera->Descripcion) ?></td>
        </tr>
        <tr>
            <th><?= __('IdCarrera') ?></th>
            <td><?= $this->Number->format($carrera->IdCarrera) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Facultad') ?></th>
            <td><?= $this->Number->format($carrera->Id_Facultad) ?></td>
        </tr>
        <tr>
            <th><?= __('Duracion') ?></th>
            <td><?= $this->Number->format($carrera->Duracion) ?></td>
        </tr>
        <tr>
            <th><?= __('Id ConjuntoClases') ?></th>
            <td><?= $this->Number->format($carrera->Id_ConjuntoClases) ?></td>
        </tr>
    </table>
</div>
