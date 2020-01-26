<table style="content-align: right">

<h1><?= __('Webgrafia')?></h1>
<p><?= $this->Html->link("Adicionar link", ['action' => 'add']) ?></p>
</table>
    <table>
    <tr>
        <?php echo'<th>'.$this->Paginator->sort('id_webgrafia',null,['direction' =>'desc']).'</th>';?>
        <?php echo'<th>'.$this->Paginator->sort('site',null,['direction' =>'desc']).'</th>';?>
        <?php echo'<th>'.$this->Paginator->sort('fonte',null,['direction' =>'desc']).'</th>';?>
        <th><?= __('Editar')?></th>
        <th><?= __('Eliminar')?></th>
    </tr>

    <?php foreach ($web as $link): //Lista todos os utilizadores existentes na tabela?>
        <tr>
            <td>
                <?= $this->Html->link($link->id_webgrafia, ['action' => 'view', $link->id_webgrafia]) ?>
            </td>
            <td>
                <?= $link->site ?>
            </td>
            <td>
                <?= $this->Html->link($link->fonte)?>
            </td>

            <td>
                <?= $this->Html->link('Editar', ['action' => 'edit', $link->id_webgrafia]) //Onde iremos editar o código?>
            </td>
            <td>
                <?= $this->Form->postLink(
                    'Apagar',
                    ['action' => 'delete', $link->id_webgrafia],
                    ['confirm' => 'Deseja apagar o link selecionado?'])
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
    'Page' => 'WebGrafia',
])?>

