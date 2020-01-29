<?php
    echo $this->Form->Create("Localizations", array('url'=>'/locale'));
    echo $this->Form->radio("Locale",[
        ['value' =>'en','text' =>'English'],
        ['value' =>'pt','text' =>'Português'],
    ]);
    echo $this->Form->submit('Mudar Lingua');
    echo $this->Form->end();
    ?>
