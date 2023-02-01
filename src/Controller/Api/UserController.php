<?php

namespace App\Controller\Api;

class UserController extends AppController{
    public function add()
    {
        $user = $this->User->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->User->patchEntity($user, $this->request->getData());
            echo '<pre>';print_r($this->request->getData());die();
            if ($this->User->save($user)) {
                $this->set([
                    'success' => true,
                    'data' => null,
                    'message' => "data inserted",
                    '_serialize' => ['success', 'data', 'message'],
                ]);
                $this->RequestHandler->renderAs($this, 'Json');
                return;
            }
            $this->set([
                'success' => false,
                'data' => null,
                'message' => "nahi huaa",
                '_serialize' => ['success', 'data', 'message'],
            ]);
            $this->RequestHandler->renderAs($this, 'Json');
            return;
        }

    }
}
