<?php

namespace App\Controller;

use Cake\I18n\I18n;

class webgrafiacontroller extends AppController //Controlador do Utilizador
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
    }

    public function index() //Land Page da webgráfia onde será listado os registo existentes na tabela
    {
        $this->Webgrafia->recursive=0;
        $this->paginate=array('limit' =>10); //Limite máximo de registos mostrados por página
        $this->set('web', $this->paginate());
    }
    public function view($id) //Visualização de um registo específico
    {
        $web = $this->Webgrafia->get($id);
        $this->set(compact('web'));
    }
    public function add() //Criaçãp de um novo registo
    {
        $web = $this->Webgrafia->newEntity();
        if ($this->request->is('post')) {
            $web = $this->Webgrafia->patchEntity($web, $this->request->getData());

            if ($this->Webgrafia->save($web)) {
                $this->Flash->success(__('Link criado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro ao criar o link.'));
        }
        $this->set('web', $web);
    }
    public function edit($id = null) //Edição de um registo específico
    {
        $web = $this->Webgrafia->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Webgrafia->patchEntity($web, $this->request->getData());
            if ($this->Webgrafia->save($web)) {
                $this->Flash->success(__('O link foi atualizado.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O link não pôde ser atualizado.'));
        }

        $this->set('web', $web);
    }
    public function delete($id) //Eliminaçãp de um registo específico
    {
        $this->request->allowMethod(['post', 'delete']);

        $web = $this->Webgrafia->get($id);
        if ($this->Webgrafia->delete($web)) {
            $this->Flash->success(__('O link com id: {0} foi apagado.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
}
?>
