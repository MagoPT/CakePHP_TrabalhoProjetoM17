<table style="content-align: right">
<h1><?= h($web->site) ?></h1>
</table>
<?php
echo $this->Form->create($web);
echo $this->Form->control('fonte');
echo $this->Form->control('site');
echo $this->Form->button(__('Guardar link'));
echo $this->Form->end();
?>
<?=$this -> element('footer',[
    'Page' => 'WebGrafia',
])?>
