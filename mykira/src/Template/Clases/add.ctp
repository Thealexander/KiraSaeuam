<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Clases'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="clases form large-9 medium-8 columns content">
    <?= $this->Form->create($clase) ?>
    <fieldset>
        <legend><?= __('Add Clase') ?></legend>
        <?php
            echo $this->Form->input('Nombre_Clase');
            echo $this->Form->input('Creditos');
            echo $this->Form->input('Activo');
            echo $this->Form->input('Aulas_Id_Aulas');
            echo $this->Form->input('Profesores_Id_Profesores');
            echo $this->Form->input('Turno_Id_Turnos');
            echo $this->Form->input('Departamentos_Id_Depertamentos');
            echo $this->Form->input('Niveles_Id_Niveles');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
