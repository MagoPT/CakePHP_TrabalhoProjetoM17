<table style="content-align: right">
<h1><?= __('Criar Empresa')?></h1>
</table>
<?php
echo $this->Form->create($empresa);

echo $this->Form->control('nome');
echo $this->Form->control('web', ['rows' => '3']);
echo $this->Form->control('email', ['type' => 'email']);
echo $this->Form->control('pass', ['type' => 'password']);
echo $this->Form->button(__('Salvar Empresa'));
echo $this->Form->end();
?>
<?=$this -> element('footer',[
    'Page' => 'Empresa',
])?>
