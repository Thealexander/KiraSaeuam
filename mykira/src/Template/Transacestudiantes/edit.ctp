<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $transacestudiante->Id_TransacEstudiantes],
                ['confirm' => __('Are you sure you want to delete # {0}?', $transacestudiante->Id_TransacEstudiantes)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Transacestudiantes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="transacestudiantes form large-9 medium-8 columns content">
    <?= $this->Form->create($transacestudiante) ?>
    <fieldset>
        <legend><?= __('Edit Transacestudiante') ?></legend>
        <?php
            echo $this->Form->input('Fecha_Tracsaciones', ['empty' => true]);
            echo $this->Form->input('Cantidad_Total');
            echo $this->Form->input('Descripcion');
            echo $this->Form->input('Estudiantes_Id_Estudiantes');
            echo $this->Form->input('Tutores_Id_Tutores');
            echo $this->Form->input('Personal_IdPersonal');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
