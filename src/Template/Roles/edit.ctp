<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<div class="col-sm-2" style="margin-right: 30px;">
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Form->postLink(
                    __('Excluir'),
                    ['action' => 'delete', $role->id],
                    ['confirm' => __('Tem certeza que deseja exclur este registro # {0}?', $role->id)]
                )
                ?></li>
            <li><?= $this->Html->link(__('Lista Permissões'), ['action' => 'index']) ?></li>
        </ul>
    </nav>
</div>
<div class="col-sm-8">
    <div class="form-group">
        <?= $this->Form->create($role) ?>
        <fieldset>
            <legend><?= __('Editar Permissão') ?></legend>
            <?php
            echo $this->Form->input('status', array('label'=>'Situação','options' => array('A' => 'ATIVO', 'I' => 'INATIVO'), 'default' => 'A'));
            echo $this->Form->control('role', ['Permissão']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Alterar')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
