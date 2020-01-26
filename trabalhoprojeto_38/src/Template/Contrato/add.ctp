<table style="content-align: right">
<h1><?= __('Criar empresa')?></h1>
</table>
<?php
echo $this->Form->create($contrato);

echo $this->Form->control('id_utilizador', ['type' => 'number']);
echo $this->Form->control('id_empresa', ['type' => 'number']);
echo $this->Form->control('regulacao', ['type' => 'number']);
echo $this->Form->control('descricao', ['rows' => '1']);
echo $this->Form->button(__('Salvar Contracto'));
echo $this->Form->end();
?>
