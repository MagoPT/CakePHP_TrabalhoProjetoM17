<table style="content-align: right">
<h1>ID:<?= h($contrato->id_contrato) ?></h1>
</table>
<?php
echo $this->Form->create($contrato);
echo $this->Form->control('id_utilizador');
echo $this->Form->control('id_empresa');
echo $this->Form->control('descricao');
echo $this->Form->button(__('Guardar contracto'));
echo $this->Form->end();
?>
