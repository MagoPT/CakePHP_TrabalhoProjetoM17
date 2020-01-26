<table style="content-align: right">
    <h1><?= __('Utilizadores')?></h1>
    <p><?= $this->Html->link("Adicionar Utilizador", ['action' => 'add']) ?></p>
</table>
<table>
    <tr>
        <?php echo'<th>'.$this->Paginator->sort('id_utilizador',null,['direction' =>'desc']).'</th>';?>
        <?php echo'<th>'.$this->Paginator->sort('nome',null,['direction' =>'desc']).'</th>';?>
        <?php echo'<th>'.$this->Paginator->sort('idade',null,['direction' =>'desc']).'</th>';?>
        <?php echo'<th>'.$this->Paginator->sort('email',null,['direction' =>'desc']).'</th>';?>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>

    <?php foreach ($utilizadores as $utilizador): //Lista todos os utilizadores existentes na tabela?>
        <tr>
            <td>
                <?= $this->Html->link($utilizador->id_utilizador, ['action' => 'view', $utilizador->id_utilizador]) ?>
            </td>
            <td>
                <?= $utilizador->nome ?>
            </td>
            <td>
                <?= $utilizador->idade ?>
            </td>
            <td>
                <?= $utilizador->email ?>
            </td>
            <td>
                <?= $this->Html->link('Editar', ['action' => 'edit', $utilizador->id_utilizador]) //Onde iremos editar o código?>
            </td>
            <td>
                <?= $this->Form->postLink(
                    'Apagar',
                    ['action' => 'delete', $utilizador->id_utilizador],
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
    'Page' => 'Utilizador',
])?>
