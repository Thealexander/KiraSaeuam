<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $edificio->Id_Edificios],
                ['confirm' => __('Are you sure you want to delete # {0}?', $edificio->Id_Edificios)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Edificios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="edificios form large-9 medium-8 columns content">
    <?= $this->Form->create($edificio) ?>
    <fieldset>
        <legend><?= __('Edit Edificio') ?></legend>
        <?php
            echo $this->Form->input('Codigo_Edificio');
            echo $this->Form->input('Descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
