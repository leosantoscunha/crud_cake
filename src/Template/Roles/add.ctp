<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<div class="col-sm-2" style="margin-right: 30px;">
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Cadastros') ?></li>
            <li><?= $this->Html->link(__('Lista de Permissões'), ['action' => 'index']) ?></li>
        </ul>
    </nav>
</div>
<div class="col-sm-8">
    <div class="form-group">
        <?= $this->Form->create($role) ?>
        <fieldset>
            <legend><?= __('Cadastrar Permissão') ?></legend>
            <?php
            echo $this->Form->input('Situação', array('options' => array('A' => 'ATIVO', 'I' => 'INATIVO'), 'default' => 'A'));
            echo $this->Form->control('role', ['label'=>'Permissão']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Cadastrar')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
