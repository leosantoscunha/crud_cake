<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role[]|\Cake\Collection\CollectionInterface $roles
 */
?>
<div class="col-sm-2" style="margin-right: 30px;">
    <ul class="side-nav">
        <li class="heading"><?= __('Cadastros') ?></li>
        <li><?= $this->Html->link(__('Nova Permissão'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    </ul>
    </nav>
</div>
<div class="roles index large-9 medium-8 columns content">
    <h3><?= __('Permissões') ?></h3>
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" class="table table-striped">
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Permissão') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Data Cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Última alteração') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($roles as $role): ?>
                <tr>
                    <td><?= $this->Number->format($role->id) ?></td>
                    <td><?= h($role->status) == 'A' ? 'ATIVO' : 'INATIVO' ?></td>
                    <td><?= h($role->role) ?></td>
                    <td><?= h($role->data_created) ?></td>
                    <td><?= h($role->data_modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $role->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $role->id]) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $role->id], ['confirm' => __('Tem certeza que deseja exclur este registro # {0}?', $role->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('Primeira')) ?>
                <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('Próxima') . ' >') ?>
                <?= $this->Paginator->last(__('Última') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} registros(s)  de um total de {{count}}')]) ?></p>
        </div>
    </div>
</div>
