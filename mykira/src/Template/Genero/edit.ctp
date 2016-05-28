<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $genero->Id_Estudiantes],
                ['confirm' => __('Are you sure you want to delete # {0}?', $genero->Id_Estudiantes)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Genero'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="genero form large-9 medium-8 columns content">
    <?= $this->Form->create($genero) ?>
    <fieldset>
        <legend><?= __('Edit Genero') ?></legend>
        <?php
            echo $this->Form->input('Estudiantes_Nombres');
            echo $this->Form->input('Estudiantes_Apellidos');
            echo $this->Form->input('Fecha_nacimiento', ['empty' => true]);
            echo $this->Form->input('Fecha_registro', ['empty' => true]);
            echo $this->Form->input('Fecha_actualizacion', ['empty' => true]);
            echo $this->Form->input('Nivel-anio');
            echo $this->Form->input('Email');
            echo $this->Form->input('Direccion');
            echo $this->Form->input('Telefono');
            echo $this->Form->input('Celular');
            echo $this->Form->input('Notas');
            echo $this->Form->input('Sexo');
            echo $this->Form->input('genero');
            echo $this->Form->input('nacionalidad');
            echo $this->Form->input('Cedula');
            echo $this->Form->input('Ciudad');
            echo $this->Form->input('Departamento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
