<table style="content-align: right">
<h1><?= h($regulacao->designacao) ?></h1>
</table>

<?php
echo $this->Form->create($regulacao);
echo $this->Form->control(__('Local efetivo:'));
echo $this->Form->control(__('Regulamento:'));
echo $this->Form->button(__('Guardar regulação'));
echo $this->Form->end();
?>
<?=$this -> element('footer',[
    'Page' => 'Regulação',
])?>
