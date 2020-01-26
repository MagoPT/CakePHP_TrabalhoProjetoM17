<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class ImagensTable extends Table//Criação da tabela Contrato
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');
        $this->setPrimaryKey('id');

        $this->belongsTo('Utilizador')//Isto é necessário pois temos de ciar uma associação entre as duas tabelas
        ->setForeignKey('id_utilizador')
            ->setJoinType('INNER');

    }

}
?>
