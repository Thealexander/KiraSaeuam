<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $personal->Id_Personal],
                ['confirm' => __('Are you sure you want to delete # {0}?', $personal->Id_Personal)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Personal'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="personal form large-9 medium-8 columns content">
    <?= $this->Form->create($personal) ?>
    <fieldset>
        <legend><?= __('Edit Personal') ?></legend>
        <?php
            echo $this->Form->input('Personal_Nombre');
            echo $this->Form->input('Personal_Apellidos');
            echo $this->Form->input('Telefono');
            echo $this->Form->input('Celular');
            echo $this->Form->input('Email');
            echo $this->Form->input('Direccion');
            echo $this->Form->input('Fecha_nacimiento', ['empty' => true]);
            echo $this->Form->input('Fecha_registro', ['empty' => true]);
            echo $this->Form->input('Fecha_modificacion', ['empty' => true]);
            echo $this->Form->input('Salario');
            echo $this->Form->input('Cargos_Id_Cargos');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
