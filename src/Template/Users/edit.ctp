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
            <li><?= $this->Form->postLink(
                    __('Excluir'),
                    ['action' => 'delete', $user->id],
                    ['confirm' => __('Tem certeza que deseja exclur este registro # {0}?', $user->id)]
                )
                ?></li>
            <li><?= $this->Html->link(__('Lista de Usuários'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Lista de Permissões'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Nova Permissão'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        </ul>
    </nav>
</div>
<div class="col-sm-8">
    <div class="form-group">
        <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('Editar Usuário') ?></legend>
            <?php
            echo $this->Form->input('status', array('label'=>'Situação','options' => array('A' => 'ATIVO', 'I' => 'INATIVO')));
            echo $this->Form->control('name', array('label'=>'Usuário Nome'));
            echo $this->Form->control('username', array('label'=>'Usuário'));
            echo $this->Form->control('password', array('label'=>'Senha'));
            echo $this->Form->control('roles_id', ['label'=>'Permissão','options' => $roles]);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
