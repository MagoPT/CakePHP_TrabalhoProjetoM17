<?php

namespace App\Controller;

use Cake\I18n\I18n;

class ContratoController extends AppController //Controlador do Contrato
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
    }

    public function index() //Land Page do contrato onde será listado os registo existentes na tabela
    {
        $this->Contrato->recursive=0;
        $this->paginate = [
            'contain' => ['Utilizador','Empresa'],
            'limit' =>5 //Limite máximo de registos mostrados por página
        ];

        $this->set('contratos', $this->paginate());
    }
    public function view($id) //Visualização de um registo específico
    {
        $contratos = $this->Contrato->get($id);
        $this->set(compact('contratos'));
    }
    public function add() //Criaçãp de um novo registo
    {
        $contrato = $this->Contrato->newEntity();
        if ($this->request->is('post')) {
            $contrato = $this->Contrato->patchEntity($contrato, $this->request->getData());

            if ($this->Contrato->save($contrato)) {
                $this->Flash->success(__('Contrato criado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro ao criar o contrato.'));
        }
        $this->set('contrato', $contrato);
    }
    public function edit($id = null) //Edição de um registo específico
    {
        $contratos = $this->Contrato->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Contrato->patchEntity($contratos, $this->request->getData());
            if ($this->Contrato->save($contratos)) {
                $this->Flash->success(__('O Contrato foi atualizado.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O contrato não pôde ser atualizado.'));
        }

        $this->set('contrato', $contratos);
    }
    public function delete($id) //Eliminaçãp de um registo específico
    {
        $this->request->allowMethod(['post', 'delete']);

        $contratos = $this->Contrato->get($id);
        if ($this->Contrato->delete($contratos)) {
            $this->Flash->success(__('O contrato com id: {0} foi apagado.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
    function ultimoscontratos($limit,$user,$tipo) {

    $contratos=$this->Contrato->find('all', array(
        'fields'=>array('id_contrato','id_utilizador','id_empresa','descricao','created'),

        'recursive'=>0,
        'limit'=>$limit
    ))->order(['id_utilizador' => 'ASC'])
    ->where([$tipo => $user]);;



    $this->response->body(json_encode($contratos));
    return $this->response;
    }
}
?>
