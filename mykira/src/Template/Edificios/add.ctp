<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Edificios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="edificios form large-9 medium-8 columns content">
    <?= $this->Form->create($edificio) ?>
    <fieldset>
        <legend><?= __('Add Edificio') ?></legend>
        <?php
            echo $this->Form->input('Codigo_Edificio');
            echo $this->Form->input('Descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
