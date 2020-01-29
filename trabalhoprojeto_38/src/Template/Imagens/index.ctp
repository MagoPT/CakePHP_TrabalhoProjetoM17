<table style="content-align: right">
<h1><?= __('Imagens:')?></h1>
<!--<p><?= $this->Html->link(__("Adicionar Imagem"), ['action' => 'upload']) ?></p>-->
</table>
<table>
    <?php foreach ($imagens as $imagem): //Lista todos os utilizadores existentes na tabela?>
        <div style="display: table-row; width: 200px; float:left; margin-left: 25px; text-align: center">
                <?php
                echo $this->Html->image('uploads/'.$imagem->path, [
                    "alt" => "Brownies",
                    'width'=>'200px',
                    'height'=>'200px',
                    'url' => ['controller' => 'Utilizador', 'action' => 'view', $imagem->utilizador->id_utilizador]
                ]);
                echo '<br>';
                echo $imagem->has(__('id_utilizador')) ? $this->Html->link($imagem->utilizador->nome, ['controller' => 'Utilizador', 'action' => 'view', $imagem->utilizador->id_utilizador]) : '';

        ?>
        </div>
    <?php endforeach; ?>
    </div>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('Primeira')) ?>
        <?= $this->Paginator->prev('< ' . __('anterior')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('proxima') . ' >') ?>
        <?= $this->Paginator->last(__('ultima') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(__('Pagina {{page}} de {{pages}}, mostrando {{current}} registos de {{count}} totais, desde o registe {{start}}, ate ao {{end}}')) ?></p>
</div>
<?=$this -> element('footer',[
    'Page' => __('Imagens'),
])?>
