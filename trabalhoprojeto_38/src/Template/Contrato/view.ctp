<table style="content-align: right">
<h1>ID:<?= h($contratos->id_contrato) ?></h1>
</table>
<p><?= __('ID Utilizador:')?> <?= h($contratos->id_utilizador) ?></p>
<p><?= __('Id Site:')?>  <?= h($contratos->id_empresa) ?></p>
<p><?= __('Descrição:')?> <?= h($contratos->descricao) ?></p>
<?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?>
