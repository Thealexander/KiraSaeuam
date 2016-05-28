<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Carreras'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="carreras form large-9 medium-8 columns content">
    <?= $this->Form->create($carrera) ?>
    <fieldset>
        <legend><?= __('Add Carrera') ?></legend>
        <?php
            echo $this->Form->input('Nombre_Carrera');
            echo $this->Form->input('Id_Facultad');
            echo $this->Form->input('Descripcion');
            echo $this->Form->input('Duracion');
            echo $this->Form->input('Id_ConjuntoClases');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
