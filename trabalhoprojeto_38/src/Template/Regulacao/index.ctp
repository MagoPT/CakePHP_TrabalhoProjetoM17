<table style="content-align: right">
<h1><?= __('Regulações:')?></h1>
<p><?= $this->Html->link(__("Adicionar Regulação"), ['action' => 'add']) ?></p>
</table>
<table>
    <tr>
        <?php echo'<th>'.$this->Paginator->sort('id_utilizador',__('ID regulacao'),['direction' =>'desc']).'</th>';?>
        <?php echo'<th>'.$this->Paginator->sort('designacao',__('Designação'),['direction' =>'desc']).'</th>';?>
        <?php echo'<th>'.$this->Paginator->sort('local_efetivo',__('Local efetivo'),['direction' =>'desc']).'</th>';?>
        <?php echo'<th>'.$this->Paginator->sort('regulamento',__('Regulamento'),['direction' =>'desc']).'</th>';?>
        <th><?= __('Editar:')?></th>
        <th><?= __('Eliminar:')?></th>
    </tr>

    <?php foreach ($regulacoes as $regulacao): //Lista todos os utilizadores existentes na tabela?>
        <tr>
            <td>
                <?= $this->Html->link($regulacao->id_regulacao, ['action' => 'view', $regulacao->id_regulacao]) ?>
            </td>
            <td>
                <?= $regulacao->designacao ?>
            </td>
            <td>
                <?= $regulacao->local_efetivo ?>
            </td>
            <td>
                <?= $this->Html->link($regulacao->regulamento)?>
            </td>
            <td>
                <?= $this->Html->link('Editar', ['action' => 'edit', $regulacao->id_regulacao]) //Onde iremos editar o registo?>
            </td>
            <td>
                <?= $this->Form->postLink(
                    'Apagar',
                    ['action' => 'delete', $regulacao->id_regulacao],
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
<?=$this -> element('footer',[
    'Page' => 'Regulação',
])?>
