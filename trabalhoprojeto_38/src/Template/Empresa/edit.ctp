<table style="content-align: right">
<h1><?= h($empresa->nome) ?></h1>
</table>
<?php
echo $this->Form->create($empresa);
echo $this->Form->control('email');
echo $this->Form->control('web');
echo $this->Form->control('pass', ['type' => 'password']);
echo $this->Form->button(__('Guardar empresa'));
echo $this->Form->end();
?>
<?=$this -> element('footer',[
    'Page' => 'Empresa',
])?>
