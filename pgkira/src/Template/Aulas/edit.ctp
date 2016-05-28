<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aula->Id_Aulas],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aula->Id_Aulas)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Aulas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="aulas form large-9 medium-8 columns content">
    <?= $this->Form->create($aula) ?>
    <fieldset>
        <legend><?= __('Edit Aula') ?></legend>
        <?php
            echo $this->Form->input('Codigo_Aula');
            echo $this->Form->input('Descripcion');
            echo $this->Form->input('Edificios_Id_Edificios');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
