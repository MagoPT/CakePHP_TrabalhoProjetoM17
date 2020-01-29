<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\I18n;

class LanguageController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Inclui o FlashComponent
    }

    public function index($language)
    {
        if($language == 'en'){
            $this->request->session()->write('linguagem', 'en');
        } else {
            $this->request->session()->write('linguagem', 'pt');
        }
        $this->redirect($this->referer());
    }
}
?>
