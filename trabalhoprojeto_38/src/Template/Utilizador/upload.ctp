<?php echo $this->Form->Create('Utilizador', array('type'=>'file'));?>
<label>Ficheiro</label>
<?php
    echo $this->Form->file('uploadfile.',array('multiple'));
    echo $this->Form->button('Enviar');
?>
<?=$this -> element('footer',[
    'Page' => 'Utilizador',
])?>
