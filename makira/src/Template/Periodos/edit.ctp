<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $periodo->Id_Periodo],
                ['confirm' => __('Are you sure you want to delete # {0}?', $periodo->Id_Periodo)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Periodos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="periodos form large-9 medium-8 columns content">
    <?= $this->Form->create($periodo) ?>
    <fieldset>
        <legend><?= __('Edit Periodo') ?></legend>
        <?php
            echo $this->Form->input('NumerodePeriodo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
