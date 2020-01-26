<table style="content-align: right">
<h1><?= __('Adicionar Link:')?></h1>
</table>
    <?php
echo $this->Form->create($web);

echo $this->Form->control('site');
echo $this->Form->control('fonte', ['rows' => '3']);
echo $this->Form->button(__('Salvar Site'));
echo $this->Form->end();
?>
<?=$this -> element('footer',[
    'Page' => 'WebGrafia',
])?>
