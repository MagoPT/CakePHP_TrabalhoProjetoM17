<table style="content-align: right">
<h1><?= __('Empresas')?></h1>
</table>
<p><?= $this->Html->link("Adicionar Empresa", ['action' => 'add']) ?></p>
<table>
    <tr>
        <?php echo'<th>'.$this->Paginator->sort('id_empresa',null,['direction' =>'desc']).'</th>';?>
        <?php echo'<th>'.$this->Paginator->sort('nome',null,['direction' =>'desc']).'</th>';?>
        <?php echo'<th>'.$this->Paginator->sort('web',null,['direction' =>'desc']).'</th>';?>
        <?php echo'<th>'.$this->Paginator->sort('email',null,['direction' =>'desc']).'</th>';?>
        <th><?= __('Editar')?></th>
        <th><?= __('Eliminar')?></th>
    </tr>

    <?php foreach ($empresas as $empresa): //Lista todas as empresas existentes na tabel ?>
        <tr>
            <td>
                <?= $this->Html->link($empresa->id_empresa, ['action' => 'view', $empresa->id_empresa]) ?>
            </td>
            <td>
                <?= $empresa->nome ?>
            </td>
            <td>
                <?= $empresa->web ?>
            </td>
            <td>
                <?= $empresa->email ?>
            </td>
            <td>
                <?= $this->Html->link('Editar', ['action' => 'edit', $empresa->id_empresa]) //Onde iremos editar o código?>
            </td>
            <td>
                <?= $this->Form->postLink(
                    'Apagar',
                    ['action' => 'delete', $empresa->id_empresa],
                    ['confirm' => 'Deseja apagar a empresa selecionada?'])
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
    'Page' => 'Empresa',
])?>

