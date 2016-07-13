<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class ContactsController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
    }

    public function add()
    {
        $contact= $this->Contacts->newEntity($this->request->data);
        if ($this->Contacts->save($contact)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            'contact' => $contact,
            '_serialize' => ['message', 'recipe']
        ]);
    }
}
