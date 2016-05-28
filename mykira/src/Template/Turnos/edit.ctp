<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $turno->Id_Turnos],
                ['confirm' => __('Are you sure you want to delete # {0}?', $turno->Id_Turnos)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Turnos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="turnos form large-9 medium-8 columns content">
    <?= $this->Form->create($turno) ?>
    <fieldset>
        <legend><?= __('Edit Turno') ?></legend>
        <?php
            echo $this->Form->input('Turno');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
