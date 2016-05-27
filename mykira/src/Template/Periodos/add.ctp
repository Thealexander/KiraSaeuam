<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Periodos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="periodos form large-9 medium-8 columns content">
    <?= $this->Form->create($periodo) ?>
    <fieldset>
        <legend><?= __('Add Periodo') ?></legend>
        <?php
            echo $this->Form->input('NumerodePeriodo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
