<table style="content-align: right">
<h1><?= h($web->site) ?></h1>
</table>
<p><?= __('Fonte:')?> <?= h($web->fonte) ?></p>
<p><?= __('Site:')?>  <?= h($web->site) ?></p>
<p><?= __('ID:')?>  <?= h($web->id_webgrafia) ?></p>
<?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?>
<?=$this -> element('footer',[
    'Page' => 'WebGrafia',
])?>
