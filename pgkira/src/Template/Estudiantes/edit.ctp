<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estudiante->Id_Estudiantes],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estudiante->Id_Estudiantes)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Estudiantes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="estudiantes form large-9 medium-8 columns content">
    <?= $this->Form->create($estudiante) ?>
    <fieldset>
        <legend><?= __('Edit Estudiante') ?></legend>
        <?php
            echo $this->Form->input('Estudiantes_Nombres');
            echo $this->Form->input('Estudiantes_Apellidos');
            echo $this->Form->input('Fecha_nacimiento', ['empty' => true]);
            echo $this->Form->input('Fecha_registro', ['empty' => true]);
            echo $this->Form->input('Fecha_actualizacion', ['empty' => true]);
            echo $this->Form->input('nivannio');
            echo $this->Form->input('email');
            echo $this->Form->input('Direccion');
            echo $this->Form->input('Telefono');
            echo $this->Form->input('Celular');
            echo $this->Form->input('Notas');
            echo $this->Form->input('sexo');
            echo $this->Form->input('genero');
            echo $this->Form->input('nacionalidad');
            echo $this->Form->input('Cedula');
            echo $this->Form->input('Ciudad');
            echo $this->Form->input('Departamento');
            echo $this->Form->input('photo');
            echo $this->Form->input('decuento');
            echo $this->Form->input('Tutores_Id_Tutores');
            echo $this->Form->input('Monto_a_pagar');
            echo $this->Form->input('photo_di');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
