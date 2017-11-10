<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="col-sm-2" style="margin-right: 30px;">
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Cadastros') ?></li>
            <li class="active"><?= $this->Html->link(__('Novo Usuário'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Lista de Permissões'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Nova Permissão'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        </ul>
    </nav>
</div>
<div class="col-sm-8">
    <div class="form-group">
        <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('Cadastrar Usuário') ?></legend>
            <?php
            echo $this->Form->input('Situação', array('options' => array('A' => 'ATIVO', 'I' => 'INATIVO'), 'default' => 'A'));
            echo $this->Form->control('Usuário nome');
            echo $this->Form->control('Usuário');
            echo $this->Form->control('Senha');
            echo $this->Form->control('Permissão', ['options' => $roles]);
            ?>

            <div class="form-group" style="float: left">
                <div class="btn-group">

                    <?= $this->Form->button(__('Cadastrar')) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </fieldset>

    </div>
</div>
