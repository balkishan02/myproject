<?php

namespace App\Controller\Api;
use App\Controller\AppController;

class UserapiController extends AppController{

    public function add(){
        $userApi = $this->Userapi->newEmptyEntity();
        if ($this->request->is('post')){
            $userApi = $this->Userapi->patchEntity($userApi, $this->request->getData());
            if ($this->Userapi->save($userApi)){
               $this->set([
                   'success' => true,
                   'data' => $userApi,
                   'message' => "Hello, $userApi->username. Your Repossess Submitted Successfully",
                   '_serialize' => ['success', 'data', 'message']
               ]);
               $this->RequestHandler->renderAs($this, 'json');
               return;
            }
            $this->set([
                'success' => false,
                'data' => $userApi,
                'message' => "User $userApi->username Already In Database, Try Something else !",
                '_serialize' => ['success', 'data', 'message']
            ]);
            $this->RequestHandler->renderAs($this, 'json');
            return;
        }

    }

    public function delete($id = null){
        $this->request->allowMethod(['post', 'delete']);
        $userApiDel = $this->Userapi->get($id);
        if ($this->Userapi->delete($userApiDel)){
            $this->set([
                'success' => true,
                'data' => $userApiDel,
                'message' => "Id $id Data deleted successfully",
                '_serialize' => ['success', 'data', 'message']
            ]);
            $this->RequestHandler->renderAs($this, 'Json');
            return;
        }
        else{
            $this->set([
                'success'=> false,
                'data' => $userApiDel,
                'message' => 'Data Not Deleted !',
                '_serialize' => ['success', 'data', 'message']
            ]);
            $this->RequestHandler->renderAs($this, 'Json');
            return;
        }
    }

    public function edit($id = null){
        $userApiEdit = $this->Userapi->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])){
            $userApiEdit = $this->Userapi->patchEntity($userApiEdit, $this->request->getData());
//            echo '<pre>';print_r($this->request->getData());die();
            if ($this->Userapi->save($userApiEdit)){
                $this->set([
                    'success' => true,
                    'data' => $userApiEdit,
                    'message' => "Id $id Data Updated successfully",
                    '_serialize' => ['success', 'data', 'message']
                ]);
                $this->RequestHandler->renderAs($this, 'Json');
                return;
            }
            $this->set([
                'success' => false,
                'data' => $userApiEdit,
                'message' => "Not Update Data !",
                '_serialize' => ['success', 'data', 'message']
            ]);
            $this->RequestHandler->renderAs($this, 'Json');
            return;
        }
    }

    public function index(){
        $userapi = $this->Userapi->find('all')->all();
        $this->set([
            'success' => true,
            'data' => $userapi,
            'message' => 'Api Running',
            '_serialize' => ['success', 'message', 'data']
        ]);
        $this->RequestHandler->renderAs($this, 'Json');
        return;
    }



}
