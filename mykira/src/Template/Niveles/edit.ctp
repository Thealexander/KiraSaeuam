<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $nivele->Id_Niveles],
                ['confirm' => __('Are you sure you want to delete # {0}?', $nivele->Id_Niveles)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Niveles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="niveles form large-9 medium-8 columns content">
    <?= $this->Form->create($nivele) ?>
    <fieldset>
        <legend><?= __('Edit Nivele') ?></legend>
        <?php
            echo $this->Form->input('Nombre_Nivel');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
