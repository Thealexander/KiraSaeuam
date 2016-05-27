<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cargo->Id_Cargos],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cargo->Id_Cargos)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cargos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cargos form large-9 medium-8 columns content">
    <?= $this->Form->create($cargo) ?>
    <fieldset>
        <legend><?= __('Edit Cargo') ?></legend>
        <?php
            echo $this->Form->input('Cargo');
            echo $this->Form->input('Descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
