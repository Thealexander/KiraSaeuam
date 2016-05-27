<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tutore->Id_tutores],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tutore->Id_tutores)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tutores'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tutores form large-9 medium-8 columns content">
    <?= $this->Form->create($tutore) ?>
    <fieldset>
        <legend><?= __('Edit Tutore') ?></legend>
        <?php
            echo $this->Form->input('Nombres_Tutor1');
            echo $this->Form->input('Nombres_Tutor2');
            echo $this->Form->input('Nombres_Tutor3');
            echo $this->Form->input('Apellidos_Tutor1');
            echo $this->Form->input('Apellidos_Tutor2');
            echo $this->Form->input('Apellidos_Tutor3');
            echo $this->Form->input('Telefono');
            echo $this->Form->input('Celular_Opcion1');
            echo $this->Form->input('Celuar_opcion2');
            echo $this->Form->input('Direccion');
            echo $this->Form->input('email');
            echo $this->Form->input('Cedula_Tutor1');
            echo $this->Form->input('Cedula_Tutor2');
            echo $this->Form->input('Cedula_Tutor3');
            echo $this->Form->input('Estudiantes_Id_Estudiantes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
