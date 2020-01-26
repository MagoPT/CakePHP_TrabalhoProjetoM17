<style>

    .split {
        height: 100%;
        width: 50%;
        position: relative;
        z-index: 1;
        top: 0;
        overflow-x: hidden;
        padding-top: 20px;
    }

    .left {
        left: 0;
    }

    .right {
        right: 0;
    }



</style>
<table style="content-align: right">
<div class="split left">
    <h1><?= h($utilizadores->nome) ?></h1>
    <p><?= __('Email:')?> <?= h($utilizadores->email) ?></p>
    <p><?= __('Idade:')?> <?= h($utilizadores->idade) ?></p>
    <p><?= __('ID:')?> <?= h($utilizadores->id_utilizador) ?></p>
</div>

<div class="split right">
    <?php echo $this->Html->image('uploads/'.$utilizadores->profilepicture, array('width' => '200','alt'=>'aswq','align'=>'left')); ?>
</div>
</table>
<?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?><br>
<?= $this->Html->link(__('Upload foto'), ['action' => 'upload/'.$utilizadores->id_utilizador]) ?>


<?= $this->element('ultimos_contratos',[
    'tipo' => 'id_utilizador', //Esta variavel é importante pois vai mos permitir utilizar o mesmo element para varios posts
    'id_user' => $utilizadores->id_utilizador,  //Id do utilizador que vai ser usado para mostrar apenas os contratos realtivos a ele
    'limite' => '4', //Limite de quantos contratos iremos mostrar ao utilizador
    ])?>
<?=$this -> element('footer',[
    'Page' => 'Utilizador',
])?>
