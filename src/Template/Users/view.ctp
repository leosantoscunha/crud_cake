<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="col-sm-2" style="margin-right: 30px;">
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Ações') ?></li>
            <li><?= $this->Html->link(__('Editar Usuário'), ['action' => 'edit', $user->id]) ?> </li>
            <li><?= $this->Form->postLink(__('Excluir Usuário'), ['action' => 'delete', $user->id], ['confirm' => __('Tem certeza que deseja exclur este registro # {0}?', $user->id)]) ?> </li>
            <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?> </li>
            <li><?= $this->Html->link(__('New Usuário'), ['action' => 'add']) ?> </li>
            <li><?= $this->Html->link(__('Listar Permissões'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
            <li><?= $this->Html->link(__('Nova Permissão'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        </ul>
    </nav>
</div>
<div class="col-sm-8">
    <div class="form-group">
        <h3><?= h($user->name) ?></h3>
        <table class="vertical-table">
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($user->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Situação') ?></th>
                <td><?= h($user->status) == 'A' ? 'ATIVO' : 'INATIVO' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Usuário Nome') ?></th>
                <td><?= h($user->name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Usuário') ?></th>
                <td><?= h($user->username) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Senha') ?></th>
                <td><?= h($user->password) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Permissão') ?></th>
                <td><?= $user->has('role') ? $this->Html->link($user->role->id, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Data Cadastro') ?></th>
                <td><?= h($user->date_created) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Última Alteração') ?></th>
                <td><?= h($user->date_modified) ?></td>
            </tr>
        </table>
    </div>
