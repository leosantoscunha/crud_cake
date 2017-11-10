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
            <li><?= $this->Html->link(__('Editar Permissão'), ['action' => 'edit', $role->id]) ?> </li>
            <li><?= $this->Form->postLink(__('Excluir Permissão'), ['action' => 'delete', $role->id], ['confirm' => __('Tem certeza que deseja exclur este registro # {0}?', $role->id)]) ?> </li>
            <li><?= $this->Html->link(__('Lista de Permissões'), ['action' => 'index']) ?> </li>
            <li><?= $this->Html->link(__('Nova Permissão'), ['action' => 'add']) ?> </li>
        </ul>
    </nav>
</div>
<div class="col-sm-8">
    <div class="form-group">
        <h3><?= h($role->role) ?></h3>
        <table class="vertical-table">
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($role->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Situação') ?></th>
                <td><?= h($role->status) == 'A' ? 'ATIVO' : 'INATIVO' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Role') ?></th>
                <td><?= h($role->role) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Data Created') ?></th>
                <td><?= h($role->data_created) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Data Modified') ?></th>
                <td><?= h($role->data_modified) ?></td>
            </tr>
        </table>
    </div>
</div>
