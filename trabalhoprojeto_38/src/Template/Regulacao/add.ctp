<table style="content-align: right">
<h1><?= __('Criar regulação:')?></h1>
</table>
<?php
echo $this->Form->create($regulacao);

echo $this->Form->control('local_efetivo');
echo $this->Form->control('designacao', ['rows' => '3']);
echo $this->Form->control('regulamento');
echo $this->Form->button(__('Salvar Regulação'));
echo $this->Form->end();
?>
<?=$this -> element('footer',[
    'Page' => 'Regulação',
])?>
