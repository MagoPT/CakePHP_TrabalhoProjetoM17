<table style="content-align: right">
<h1><?= __('Contrato:')?></h1>
<p><?= $this->Html->link("Adicionar contrato", ['action' => 'add']) ?></p>
</table>
<table>
    <tr>
        <?php echo'<th>'.$this->Paginator->sort('id_contrato',null,['direction' =>'desc']).'</th>';?>
        <?php echo'<th>'.$this->Paginator->sort('id_utilizador',null,['direction' =>'desc']).'</th>';?>
        <?php echo'<th>'.$this->Paginator->sort('id_empresa',null,['direction' =>'desc']).'</th>';?>
        <?php echo'<th>'.$this->Paginator->sort('id_regulacao',null,['direction' =>'desc']).'</th>';?>
        <?php echo'<th>'.$this->Paginator->sort('descricao',null,['direction' =>'desc']).'</th>';?>
        <th><?= __('Editar')?></th>
        <th><?= __('Eliminar')?></th>
    </tr>

    <?php foreach ($contratos as $contrato): //Lista todos os utilizadores existentes na tabela?>
        <tr>
            <td>
                <?= $this->Html->link($contrato->id_contrato, ['action' => 'view', $contrato->id_contrato]) ?>
            </td>
            <td>
                <?= $contrato->has('id_utilizador') ? $this->Html->link($contrato->utilizador->email, ['controller' => 'Utilizador', 'action' => 'view', $contrato->utilizador->id_utilizador]) : '' ?>
            </td>
            <td>
                <?= $contrato->has('id_empresa') ? $this->Html->link($contrato->empresa->nome, ['controller' => 'Empresa', 'action' => 'view', $contrato->empresa->id_empresa]) : '' ?>
            </td>
            <td>
                <?= $contrato->id_regulacao ?>
            </td>
            <td>
                <?= $contrato->descricao ?>
            </td>
            <td>
                <?= $this->Html->link('Editar', ['action' => 'edit', $contrato->id_contrato]) //Onde iremos editar o código?>
            </td>
            <td>
                <?= $this->Form->postLink(
                    'Apagar',
                    ['action' => 'delete', $contrato->id_contrato],
                    ['confirm' => 'Deseja apagar o utilizador selecionado?'])
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('Primeira')) ?>
        <?= $this->Paginator->prev('< ' . __('anterior')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('proxima') . ' >') ?>
        <?= $this->Paginator->last(__('ultima') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter('Pagina {{page}} de {{pages}}, mostrando {{current}} registos de {{count}} totais, desde o registe {{start}}, ate ao {{end}}') ?></p>
</div>
