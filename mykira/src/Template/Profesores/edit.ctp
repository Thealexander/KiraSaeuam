<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $profesore->Personal_Id_Personal],
                ['confirm' => __('Are you sure you want to delete # {0}?', $profesore->Personal_Id_Personal)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Profesores'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="profesores form large-9 medium-8 columns content">
    <?= $this->Form->create($profesore) ?>
    <fieldset>
        <legend><?= __('Edit Profesore') ?></legend>
        <?php
            echo $this->Form->input('Departamentos_Id_Departamentos');
            echo $this->Form->input('Fotos_Id_photo');
            echo $this->Form->input('documento_vitae');
            echo $this->Form->input('Clases_Id_Clases');
            echo $this->Form->input('Descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
