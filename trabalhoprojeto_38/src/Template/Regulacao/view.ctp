<table style="content-align: right">
<h1><?= h($regulacoes->designacao) ?></h1>
</table>
<p><?= __('Local efetivo:')?> <?= h($regulacoes->local_efetivo) ?></p>
<p><?= __('Regulamento:')?> <?= $this->Html->link($regulacoes->regulamento)?></p>
<p><?= __('ID:')?> <?= h($regulacoes->id_regulacao) ?></p>
<?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?>
<?=$this -> element('footer',[
    'Page' => 'Regulação',
])?>
