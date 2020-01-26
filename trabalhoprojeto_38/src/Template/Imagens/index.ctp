<table style="content-align: right">
<h1><?= __('Imagens:')?></h1>
<!--<p><?= $this->Html->link("Adicionar Imagem", ['action' => 'upload']) ?></p>-->
</table>
<table>

    <?php foreach ($imagens as $imagem): //Lista todos os utilizadores existentes na tabela?>

                <?php

                echo $this->Html->image('uploads/'.$imagem->path, array('width' => '200px','height'=>'200px','alt'=>'aswq'));
                echo $imagem->has('id_utilizador') ? $this->Html->link($imagem->utilizador->nome, ['controller' => 'Utilizador', 'action' => 'view', $imagem->utilizador->id_utilizador]) : '';


        ?>

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
    'Page' => 'Imagens',
])?>
