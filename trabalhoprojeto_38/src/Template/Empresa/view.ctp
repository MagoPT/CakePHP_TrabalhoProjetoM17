<table style="content-align: right">
<h1><?= h($empresas->nome) ?></h1>
</table>
<p><?= __('Email:')?> <?= h($empresas->email) ?></p>
<p><?= __('Site:')?>  <?= h($empresas->web) ?></p>
<p>ID: <?= h($empresas->id_empresa) ?></p>
<?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?>

<?= $this->element('ultimos_contratos',[
    'tipo' => 'id_empresa', //Esta variavel é importante pois vai mos permitir utilizar o mesmo element para varios posts
    'id_user' => $empresas->id_empresa,  //Id do utilizador que vai ser usado para mostrar apenas os contratos realtivos a ele
    'limite' => '4', //Limite de quantos contratos iremos mostrar ao utilizador
])?>
<?=$this -> element('footer',[
    'Page' => 'Empresa',
])?>
