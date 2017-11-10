<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="col-sm-2" style="margin-right: 30px;">
        <ul class="side-nav">
            <li class="heading"><?= __('Cadastros') ?></li>
            <li class="active"><?= $this->Html->link(__('Novo Usuário'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Lista de Permissões'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Nova Permissão'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        </ul>
</div>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Usuários') ?></h3>
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" class="table table-striped">
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Data Cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ultima Alteração') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Usuário Nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Usuário') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Senha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Permissão') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->status) == 'A' ? 'ATIVO' : 'INATIVO'?></td>
                    <td><?= h($user->date_created) ?></td>
                    <td><?= h($user->date_modified) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->password) ?></td>
                    <td><?= $user->has('role') ? $this->Html->link($user->role->role, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $user->id], ['confirm' => __('Excluir registro # {0}?', $user->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('primeira')) ?>
                <?= $this->Paginator->prev('< ' . __('anterior')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('proxima') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} registros(s)  de um total de {{count}}')]) ?></p>
        </div>
    </div>
</div>
